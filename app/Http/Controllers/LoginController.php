<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login_2(Request $request)
    {
        $user = Customers::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }
        $toke = $user->createToken('my-app-token')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $toke
        ];
        return response($response, 201);
    }
    public function login_1(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'passwordd' => 'required'
            ]
        );
        // echo "<h1> Login Action Page Under Proccess </h1>";
        return redirect('home')->with('info', 'Login Action Under Proccess ');
    }
}