<?php

namespace App\Http\Controllers;

use App\Models\AtmAdmin;
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

        return view('AtmBank/layout/adminlogin');
    }
    function AdminPost(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'userID' => 'required'
        ]);
        $id = $request->email;
        $passwd = $request->userID;
        $admin = AtmAdmin::all();
        if ($id == $admin[0]->email && $passwd == $admin[0]->adminID) {

            session_start();
            $_SESSION['loger'] = $admin[0]->email;

            Alert::success('ID and Password Match  Access Granted');
            $customer = mybank::all();
            $data = compact('customer');
            return view('AtmBank/AdminDashboard')->with($data);
        } else {

            Alert::warning("ID and Password don't Match. Access denied");
            return view('AtmBank/layout/adminlogin');
        }
    }

    function logout()
    {
        session_start();
        session_destroy();
        Alert::success('Admin Logout success');
        return view('AtmBank/Dasboard');

    }
}