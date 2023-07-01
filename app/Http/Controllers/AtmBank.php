<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtmBank extends Controller
{
    public function index()
    {
        return view('AtmBank/Dasboard');
    }

    public function create()
    {
        return view('AtmBank/login');
    }

    public function store(Request $request)
    {
        echo 'Store';
    }

    public function show(Request $request)
    {
        $data = $request->accountnumber;
        $data = compact('data');
        return view('AtmBank/balance')->with($data);
    }

    function Summary()
    {
        return view('AtmBank/openAccount');
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