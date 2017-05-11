<?php

namespace App\Http\Controllers;

use DB;
use App\User as User;

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
            'email' => 'required|email|unique:users'
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
            'email' => 'required|email'
        ]);


        if ($request->has('email') && $request->has('password')) {

            $user = User::with(
                'givenWorkouts',
                'givenWorkouts.exercises',
                'givenWorkouts.exercises.group',
                'givenWorkouts.modality',
                'createdWorkouts',
                'createdWorkouts.exercises',
                'createdWorkouts.exercises.group',
                'createdWorkouts.modality',
                'pupils',
                'coaches'
            )->where([
                ['email', $request->input('email')],
            ])
            ->first();

            if ($user && Hash::check($request->input('password'), $user->password)) {
                $api_token = $user->createToken('MobileToken')->accessToken;

                $response = [
                    'user' => $user->toArray(),
                    'auth' => $api_token,
                ];

                return $this->showResponse($response);
            }

        }

        return $this->notFoundResponse();
    }

    public function getPupils (Request $request)
    {
        $user = $request->user();

        $pupils = User::getPupils($user);

        return response()->json($pupils);
    }

    public function update (Request $request)
    {
        $user = $request->user();

        $updated = $user->update($request->all());

        return response()->json(['updated' => $updated, 'user' => $user]);
    }

    public function who (Request $request)
    {
        return $request->user();
    }



}
