<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\mybank;

class AtmBank extends Controller
{
    public function index()
    {
        return view('AtmBank/Dasboard');
    }

    public function login()
    {
        return view('AtmBank/login');
    }
    public function create()
    {
        return view('AtmBank/openAccount');
    }

    function registered(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'dob' => 'required',
        ]);
        $bank = new mybank;
        $bank->email = $request['email'];
        $bank->firstname = $request['firstname'];
        $bank->lastname = $request['lastname'];
        $bank->date_of_birth = $request['dob'];
        $bank->contact_number = $request['contact_number'];
        $bank->gender = $request['gender'];
        $result = $bank->save();
        if ($result) {
            Alert::success('Application Submited Success');
            return view('AtmBank/login');
        } else {
            Alert::warning('Something want wroungh');
            return view('AtmBank/openAccount');
        }

    }
    function customers()
    {
        $customer = mybank::all();
        $data = compact('customer');
        // echo '<pre>';
        // print_r($customer->toArray());
        // exit;
        return view('AtmBank/customers')->with($data);
    }
    public function store(Request $request)
    {
        echo 'Store';
    }

    public function show(Request $request)
    {
        // $request->validate([
        //     [
        //         'accountnumber' => 'required',
        //         'customerpin' => 'required'
        //     ]
        // ]);
        $data = $request->accountnumber;
        $data = compact('data');
        Alert::success('Account Details');
        return view('AtmBank/balance')->with($data);
    }

    function Summary()
    {

        Alert::success('My Bank of India  Statement ');
        return view('AtmBank/statment');
    }

    public function edit(string $id)
    {
        echo 'edit';
    }

    public function update(Request $request, string $id)
    {
        echo 'Update';
    }
    public function destroy(string $id)
    {
        echo 'Destroy';
    }


    function Admin()
    {
        Alert::html('Hello Sir Welcome to our Addmin Panel');
        return view('AtmBank/AdminDashboard');
    }
}