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
        // echo '<pre>';
        // print_r($request->all());

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]
        );

        $customer = new Customers;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->state = $request['state'];
        $customer->status = $request['status'];
        $customer->address = $request['address'];
        $customer->country = $request['country'];
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

}