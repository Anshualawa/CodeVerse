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

    public function show(string $id)
    {

        return view('AtmBank/balance');
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