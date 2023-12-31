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
        return redirect('/customer')->with('success','Register Successful!');
    }

    public function view()
    {
        $Customer = Customers::all();
        $data = compact('Customer');
        return view('customer-view')->with($data);
    }

    public function trash()
    {
        $Customer = Customers::onlyTrashed()->get();
        $data = compact('Customer');
        return view('customer-trash')->with($data);
    }
    public function delete($id)
    {
        $Customer = Customers::find($id);
        if (!is_null($Customer)) {
            $Customer->delete();
            return redirect('/customer');
        }
        return redirect('/customer');
    }

    public function restore($id)
    {
        $Customer = Customers::withTrashed()->find($id);
        if (!is_null($Customer)) {
            $Customer->restore();
            return redirect('/customer/trash')->with('success','Restord Success');
        }
        return redirect('/customer/trash');
    }

    public function forcedelete($id)
    {
        $Customer = Customers::withTrashed()->find($id);
        if (!is_null($Customer)) {
            $Customer->forceDelete();
            return redirect('/customer/trash')->with('success','permanently Deleted !');
        }
        return redirect('/customer/trash')->with('info','Customer Not Found');
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
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'address' => 'required',
            ]
        );

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
        return redirect('/customer')->with('success','Update Successfully');
    }


    public function upload(Request $request)
    {
        // echo '<pre>';
        // $filename = time() . "-code." . $request->file('image')->getOriginalExtension();

        // echo $request->file('image')->storeAs('uploads', $filename);
        // echo $request->file('image')->getClientOrigina();
        // echo $imageName = time() . 'code.' . $request->file('image')->getClientOriginalExtension();
        // echo '<br>';
        $request->file('image')->store('uploads');
    }

}