<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
}