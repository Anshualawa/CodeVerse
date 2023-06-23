@extends('layouts.header')


@push('title')
    <title> Login </title>
@endpush

@include('layouts.nav-bar')
<div class=" ">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5">
            <img src="https://uploads-ssl.webflow.com/6165b74221c0712ba456e3b6/616763f8658bd97135922f21_RealTools-min-f3ecee6329d9d851c00370dcf00a256f.png" alt="" width="100%">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="row py-5">
                <h1>Login Form</h1>
                <div class="shadow bg-light p-5 rounded-3 border ">
                    <form action="{{ url('/') }}/login" method="post">
                        @csrf

                        <x-input type="email" name="email" label="User ID" />
                        <x-input type="password" name="passwordd" label="Password" />

                        <button type="submit" class="btn btn-primary shadow ">Login</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        if you don't have account <a href="/register">SignUp</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
    </div>
</div>



@include('layouts.footer')
