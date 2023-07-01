@extends('layouts.header')
@push('title')
    <title>Login</title>
@endpush

<div class="container my-5 p-5">
    <div class="row justify-content-center align-items-center g-2">
    </div>
    <div class="row justify-content-center align-items-center p-5 g-2">
        <div class="col "></div>
        <div class="col  p-5 shadow border rounded">

            <div class="row justify-content-center align-items-center g-2 ">
                <span></span>
            </div>
            <div class="row justify-content-center align-items-center g-2 ">

                <form action="{{ url('/atm-bank/login') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="accountnumber" class="form-label">Account Number</label>
                        <input type="text" class="form-control" name="accountnumber" id="accountnumber"
                            value="{{ old('accountnumber') }}" aria-describedby="helpId" placeholder="">
                        {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                    </div>
                    <div class="mb-3">
                        <label for="customerpin" class="form-label">Secret PIN Number</label>
                        <input type="password" class="form-control" name="customerpin" id="customerpin"
                            aria-describedby="helpId" placeholder="">
                        {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>

        </div>
        <div class="col"></div>
    </div>
</div>
@include('layouts.footer')
