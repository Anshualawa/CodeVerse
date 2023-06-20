@extends('layouts.header')


@push('title')
    <title> Login </title>
@endpush


<div class="container my-5 py-5 ">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="row p-5">
                <h1>Login Form</h1>
                <div class="shadow bg-light p-5 rounded-3 border ">
                    <form action="{{ url('/') }}/customer" method="post">
                        @csrf

                        <x-input type="email" name="email" label="User ID" />
                        <x-input type="password" name="passwordd" label="Password" />

                        <button type="submit" class="btn btn-primary shadow ">Login</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if you don't have account <a href="/register">SignUp</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
    </div>
</div>



@include('layouts.footer')
