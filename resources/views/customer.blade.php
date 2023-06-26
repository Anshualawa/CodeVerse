@extends('layouts.main')
@push('title')
    <title> {{ $title }} </title>
@endpush

@section('registration-form')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-2"></div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <div class="row p-5">
                    <h1>
                        {{$title}}
                    </h1>
                    <div class="shadow bg-light p-5 rounded-3 border">
                        <form action="{{ url('/') }}/register" method="post">
                            @csrf
                            <div class="row">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xsm-6">
                                        <x-input type="text" name="name" label="Name" />
                                        <x-input type="date" name="dob" label="Date of Birth" />
                                        <x-input type="text" name="state" label="State" />

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xsm-6">
                                        <x-input type="email" name="email" label="Email" />


                                        <div class="mb-3">
                                            <label class="form-label">Gender</label> <br>
                                            <div class="form-check form-check-inline  border p-1 w-100 rounded">
                                                <input type="radio" name="gender" value="M" />
                                                <label for="gender"> M &nbsp;&nbsp;</label>
                                                <input type="radio" name="gender" value="F" />
                                                <label for="gender">F &nbsp;&nbsp;</label>
                                                <input type="radio" name="gender" value="O" />
                                                <label for="gender">Other</label>

                                            </div>
                                            {{-- <span class="text-danger">
                                                    @error('gender')
                                                        {{ $message }}
                                                    @enderror
                                                </span> --}}
                                        </div>


                                        <x-input type="text" name="country" label="Country" />
                                    </div>
                                </div>
                                <div class="row">
                                    <x-input type="text" name="address" label="Address" />
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xsm-6">

                                        <x-input type="password" name="password" label="Password" />
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xsm-6">

                                        <x-input type="password" name="password_confirmation" label="Conform Password" />
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            if you have already account <a href="/login">Sign In</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-2"></div>
        </div>
    </div>
@endsection
