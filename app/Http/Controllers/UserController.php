<?php

namespace App\Http\Controllers;

use DB;
use App\User as User;
use App\Sport;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Http\Traits\RestControllerTrait;
use Carbon\Carbon;

class UserController extends Controller
{

    use RestControllerTrait;
    const MODEL = 'App\User';

    /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:4',
            'email'    => 'required|email|unique:users'
        ]);

        $user = User::create($request->all());
        $user->password = Hash::make($user->password);
        $user->save();

        return $this->login($request);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'email'    => 'required|email'
        ]);

        if ($request->has('email') && $request->has('password')) {

            $user = User::where('email', $request->input('email'))->first();

            if ($user && Hash::check($request->input('password'), $user->password)) {
                if (!$user->api_token) {
                    $user->api_token = $user->createToken('MobileToken')->accessToken;
                    $user->save();
                }

                $user->getMostData();

                $workouts = $user->givenWorkouts->merge($user->createdWorkouts);

                $response = [
                    // 'auth'            => $user->createToken('MobileToken')->accessToken,
                    'auth'            => $user->api_token,
                    'sports'          => Sport::getAll(),
                    'user'            => array_filter($user->toArray(), 'is_scalar'),
                    'workouts'        => $workouts,
                    'givenWorkouts'   => $user->givenWorkouts->pluck('id')->toArray(),
                    'createdWorkouts' => $user->createdWorkouts->pluck('id')->toArray(),
                    'pupils'          => $user->pupils->toArray(),
                    'coaches'         => $user->coaches->toArray(),
                ];

                return $this->showResponse($response);
            }

        }

        return $this->notFoundResponse();
    }

    public function getMostData(Request $request)
    {
        $user = $request->user();

        $user->getMostData();

        $workouts = $user->givenWorkouts->merge($user->createdWorkouts);

        $response = [
            'sports'          => Sport::getAll(),
            'user'            => array_filter($user->toArray(), 'is_scalar'),
            'workouts'        => $workouts,
            'givenWorkouts'   => $user->givenWorkouts->pluck('id')->toArray(),
            'createdWorkouts' => $user->createdWorkouts->pluck('id')->toArray(),
            'pupils'          => $user->pupils->toArray(),
            'coaches'         => $user->coaches->toArray(),
        ];

        return $this->showResponse($response);
    }

    public function getPupils(Request $request)
    {
        $user = $request->user();

        return response()->json($user->pupils);
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $updated = $user->update($request->all());

        return response()->json(['updated' => $updated, 'user' => $user]);
    }

    public function who(Request $request)
    {
        return $request->user();
    }

    public function addPupil(Request $request)
    {
        if ($request->has('email') &&
            $pupil = User::where('email', $request->input('email'))->first())
        {
            $user = $request->user();
            $user->pupils()->attach([$pupil->id => ['created_at' => Carbon::now()]]);

            return $this->showResponse($pupil);
        }
        return $this->notFoundResponse();
    }

    public function removePupil(Request $request, $id)
    {
        if (User::find($id))
        {
            $user = $request->user();
            $user->pupils()->detach($id);

            return $this->showResponse(true);
        }
        return $this->notFoundResponse();
    }

}
