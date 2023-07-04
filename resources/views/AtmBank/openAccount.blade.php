@extends('layouts.header')

@push('title')
    <title>Create Account</title>
@endpush

<div class="container my-5 p-5">
    <div class="row justify-content-center align-items-center g-2">
        <span>
            <h1>Create Account </h1>
        </span>
    </div>
    <hr>

    <div class="container m-5 p-5">
        <div class="row justify-content-center align-items-center g-2">
            <form action="{{ url('/atm-new-user') }}" method="post">
                @csrf
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                aria-describedby="emailHelpId" placeholder="alawa@mail.com">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname"
                                placeholder=" Pappu">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname"
                                value="{{ old('lastnaem') }}" placeholder="Alawa">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center g-2">

                    <div class="col">
                        <div class="mb-3">
                            <label for="dob" class="form-label">Data Of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob"
                                value="{{ old('dob') }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="tel" class="form-control" name="contact_number" id="contact_number"
                                value="{{ old('contact_number') }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <div class="form-control text-center">
                                <input type="radio" class="form-check-input" name="gender" id="gender"
                                    value="M">
                                Male
                                &nbsp; <input type="radio" class="form-check-input" name="gender" id="gender"
                                    value="F">Female
                                &nbsp; <input type="radio" class="form-check-input" name="gender" id="gender"
                                    value="O">Other
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>




    @include('AtmBank/layout/back_btn')

</div>



@include('layouts.footer')
