<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_1()
    {

        return redirect('home')->with('info', 'Login Action Under Proccess ');
        // echo "<h1> Login Action Page Under Proccess </h1>";
    }
    public function login_2(Request $request)
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