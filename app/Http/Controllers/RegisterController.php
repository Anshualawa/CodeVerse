<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('customer');
    }
    public function store()
    {
        return view('customer');
    }
    public function login()
    {
        return view('login');
    }
    public function loginFail()
    {
        return view('home');
    }
}