<?php

namespace App\Http\Controllers;

use DB;
use App\User as User;
use GenTux\Jwt\JwtToken;
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
            if ($request->user()) {
                return $request->user()->api_token;
            }

            $user = User::where([
                ['email', $request->input('email')],
            ])->first();

            if (Hash::check($request->input('password'), $user->password)) {
                $api_token = $this->token($user);

                $user->update(['api_token' => $api_token]);

                return $user;
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

    public function token (User $user)
    {
        return JWTAuth::fromUser($user);
    }

}
