<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class RegisterController extends Controller
{
    public function index()
    {
        return view('customer');
    }
    public function store(Request $request)
    {
        echo '<pre>';
        print_r($request->all());

        $customer = new Customers;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->passowrd = md5($request['password']);
        $customer->dob = $request['dob'];
        $customer->save();
        return redirect('customer/view');
    }

    public function view()
    {
        $customer = Customers::all();
        $data = compact('customer');
        return view('customer-view')->with($data);
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