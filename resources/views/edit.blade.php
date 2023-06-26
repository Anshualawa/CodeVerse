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
                        {{ $title }}
                    </h1>
                    <div class="shadow bg-light p-5 rounded-3 border">
                        <form action="{{ $url }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xsm-6">

                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $Customer->name }}">
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Date of Birth</label>
                                            <input type="date" name="dob" class="form-control"
                                                value="{{ $Customer->dob }}">
                                            <span class="text-danger">
                                                @error('dob')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" name="state" class="form-control"
                                                value="{{ $Customer->state }}">
                                            <span class="text-danger">
                                                @error('state')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xsm-6">

                                        <div class="mb-3">
                                            <label class="form-label">Email ID</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ $Customer->email }}">
                                            <span class="text-danger">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label">Gender</label> <br>
                                            <div class="form-check form-check-inline  border p-1 w-100 rounded">
                                                <input type="radio" name="gender" value="M"
                                                    {{ $Customer->gender == 'M' ? 'checked' : '' }} />
                                                <label for="gender"> M &nbsp;&nbsp;</label>
                                                <input type="radio" name="gender" value="F"
                                                    {{ $Customer->gender == 'F' ? 'checked' : '' }} />
                                                <label for="gender">F &nbsp;&nbsp;</label>
                                                <input type="radio" name="gender" value="O"
                                                    {{ $Customer->gender == 'O' ? 'checked' : '' }} />
                                                <label for="gender">Other</label>

                                            </div>
                                            {{-- <span class="text-danger">
                                                    @error('gender')
                                                        {{ $message }}
                                                    @enderror
                                                </span> --}}
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Country</label>
                                            <input type="text" name="country" class="form-control"
                                                value="{{ $Customer->country }}">
                                            <span class="text-danger">
                                                @error('country')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" name="address" class="form-control"
                                            value="{{ $Customer->address }}">
                                        <span class="text-danger">
                                            @error('address')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xsm-6">


                                        {{-- <x-input type="password" name="password" label="Password" /> --}}
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xsm-6">

                                        {{-- <x-input type="password" name="password_confirmation" label="Conform Password" /> --}}
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-2"></div>
        </div>
    </div>
@endsection
