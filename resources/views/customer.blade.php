@extends('layouts.main')
@push('title')
    <title> Registration </title>
@endpush

@section('registration-form')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-2"></div>
            <div class="col-lg-6 col-md-6 col-sm-8">
                <div class="row p-5">
                    <h1>
                        Registration Form
                    </h1>
                    <div class="shadow bg-light p-5 rounded-3 border">
                        <form action="{{ url('/') }}/customer" method="post">
                            @csrf

                            <x-input type="text" name="name" label="Name" />
                            <x-input type="email" name="email" label="Email" />
                            <x-input type="password" name="password" label="Password" />
                            <x-input type="password" name="password_confirmation" label="Conform Password" />

                            <button type="submit" class="btn btn-primary">Submit</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if you have already account <a href="/login">Sign In</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2"></div>
        </div>
    </div>
@endsection
