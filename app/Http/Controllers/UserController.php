<?php

namespace App\Http\Controllers;

use DB;
use App\User as User;
use App\Sport;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\RestControllerTrait as RestControllerTrait;


class UserController extends Controller
{

    use RestControllerTrait;
    const MODEL = 'App\Models\User';


    /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function register (Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:4',
            'email'    => 'required|email|unique:users'
        ]);

        $user = User::fill($request->all());
        $user->password = Hash::make($user->password);
        $user->save();

        return $user;
    }

    public function login (Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'email'    => 'required|email'
        ]);

        if ($request->has('email') && $request->has('password')) {

            $user = User::where('email', $request->input('email'))->first();

            if ($user && Hash::check($request->input('password'), $user->password)) {
                $api_token = $user->createToken('MobileToken')->accessToken;

                $user->getMostData();

                $workouts = $user->givenWorkouts->merge($user->createdWorkouts);

                // if ($user->is_coach) {
                $sports = Sport::getAll();
                // }

                $response = [
                    'auth'            => $api_token,
                    'sports'          => $sports,
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



}