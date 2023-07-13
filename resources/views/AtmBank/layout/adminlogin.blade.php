@extends('layouts.header')

@push('title')
    <title>Admin Login</title>
@endpush


<div style="background: url({{ asset('login.png') }});background-size:cover; padding:20px;">

    <div class="container p-4" >


        <div class="container p-5 m-5">
            <div class="row justify-content-center align-items-center g-2 m-2 p-5  ">
                <div class="col-xs-4  col-lg-4 bg-dark bg-opacity-25 border rounded-4 shadow">
                    <form action="{{ route('adminpost') }}" method="post">
                        @csrf
                        <div class="mb-1 p-5 ">
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
                {{-- <div class="col-8">
                @include('add.ai')
            </div> --}}
            </div>
        </div>
    </div>
    @include('AtmBank/layout.back_btn')
</div>





@include('layouts.footer')
