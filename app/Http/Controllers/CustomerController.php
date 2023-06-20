<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'passwordd' => 'required',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]
        );
        echo '<pre>';
        print_r($request->all());
    }
}