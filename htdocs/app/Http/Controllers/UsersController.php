<?php

namespace App\Http\Controllers;

use DB;
use App\User;
//use App\Http\Requests;
use GenTux\Jwt\JwtToken;
use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

class UsersController extends Controller
{
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

        $request_params = $request->all();

        $request_params["password"] = $this->encryptPassword($request_params["password"]);

        $user = User::create($request_params);

        return $user;

    }

    public function login (Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'email' => 'required|email'
        ]);

        if ($request->user())
        {
            $user = $request->user();
            return $user->api_token;
        }
        else if ($request->has('email') && $request->has('password'))
        {
            $user = User::where([
                ['email', $request->input('email')],
            ])->first();

            if ($user instanceof User && 
                    password_verify($request->input('password'), $user->password)){

                $api_token = $this->token($user);

                $user->update(['api_token' => $api_token]);

                return $user->api_token;
            } else {
                return 'User not found';
            }
        }

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

    public function token (User $user)
    {
        $salt = '$1$tokengen$';

        $api_token = crypt($user->getPayload(), $salt);
        //$api_token = str_replace($salt, "", $api_token);

        //return $api_token;
        return password_hash($user->getPayload(), PASSWORD_DEFAULT);
    }

    public function encryptPassword ($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }


}