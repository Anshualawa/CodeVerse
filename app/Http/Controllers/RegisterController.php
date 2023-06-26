<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class RegisterController extends Controller
{
    public function index()
    {
        $url = url('/customer');
        $title = 'Customer Registration';
        $data = compact('url', 'title');
        return view('customer')->with($data);
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

        $Customer = new Customers;
        $Customer->name = $request['name'];
        $Customer->email = $request['email'];
        $Customer->gender = $request['gender'];
        $Customer->state = $request['state'];
        // $Customer->status = $request['status'];
        $Customer->address = $request['address'];
        $Customer->country = $request['country'];
        $Customer->passowrd = md5($request['password']);
        $Customer->dob = $request['dob'];
        $Customer->save();
        return redirect('/customer');
    }

    public function view()
    {
        $Customer = Customers::all();
        $data = compact('Customer');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {
        $Customer = Customers::find($id);
        if (!is_null($Customer)) {
            $Customer->delete();
        }
        return redirect('/customer');
    }

    public function edit($id)
    {
        $Customer = Customers::find($id);

        if (is_null($Customer)) {
            // $Customer->delete();
            return redirect('/customer');
        } else {
            $url = url('/customer/update') . '/' . $id;
            $title = 'Customer Update';
            $data = compact('Customer', 'url', 'title');
            return view('edit')->with($data);
        }

    }

    public function update($id, Request $request)
    {
        $Customer = Customers::find($id);
        $Customer->name = $request['name'];
        $Customer->email = $request['email'];
        $Customer->gender = $request['gender'];
        $Customer->state = $request['state'];
        // $Customer->status = $request['status'];
        $Customer->address = $request['address'];
        $Customer->country = $request['country'];
        $Customer->dob = $request['dob'];
        $Customer->save();
        return redirect('/customer');
    }

}