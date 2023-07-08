@extends('layouts.header')

@push('title')
    <title>Admin Login</title>
@endpush




<div class="container">


    <div class="container p-5 m-2">
        <div class="row justify-content-center align-items-center g-2 m-2 p-5 border rounded-4 shadow bg-light">
            <div class="col-4">
                <form action="{{ route('adminpost') }}" method="post">
                    @csrf
                    <div class="mb-2 p-5 ">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control " name="email" id="email"
                            aria-describedby="emailHelpId" placeholder="enter register email id"
                            value="{{ old('email') }}">

                        <div class="mb-3">
                            <label for="userID" class="form-label">Password</label>
                            <input type="text" class="form-control" name="userID" id="userID"
                                aria-describedby="helpId" value="{{ old('userID') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-8">
                @include('add.ai')
            </div>
        </div>
    </div>





    @include('AtmBank/layout.back_btn')
</div>

@include('layouts.footer')
