<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 *
 */
class AuthController extends Controller
{
    /**
     * Develop BY: Pinak Mehta
     * Last Update By: Kriti
     * Description: To validate user
     * @param Request $request
     */
    public function login(Request $request)
    {
        $data = $request->all();

        if (Auth::attempt($data)) {
            $user = Auth::user();

            $token = $user->createToken('Laravel-9-Passport-Auth')->accessToken;


            return response()->json(['token' => $token], 200);
        }

    }

    /**
     * @return void
     */
    public function getProfile()
    {
        echo "calllll";
        echo '<pre>';
        print_r(Auth::user());
        die;
    }
}
