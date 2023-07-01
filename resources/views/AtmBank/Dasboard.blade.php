@extends('layouts.header')

@push('title')
    <title>My Bank</title>
@endpush






<div class="container">
    <div class="row justify-content-center align-items-center text-center  p-5 g-2">
        <span>
            <img src="https://bank.sbi/o/SBI-Theme/images/custom/logo.png" class="img-fluid rounded-top" alt="">
        </span>
    </div>
    <span class=""><a class="btn text-primary" href="">Create Account</a></span>
    <hr>
    <div class="row justify-content-center align-items-center text-center p-5   g-2 ">
        <div class="col p-2">
            <a href="{{ url('/atm-bank/login') }}" class="btn btn-light shadow border ">
                <span>
                    <h3>Withdraw Money</h3>
                </span>
                <span>
                    <img src="https://sbi.co.in/documents/136/73003/debit_card.png/58a6832b-deaa-c3d8-f22d-c90c0c2bf785?t=1560335158596"
                        class="img-fluid rounded-top" width="100vh" alt="">
                </span>
            </a>
        </div>
        <div class="col p-2">
            <a href="" class="btn btn-light shadow border ">
                <span>
                    <h3>Deposit Money</h3>
                </span>
                <span>
                    <img src="https://sbi.co.in/documents/136/73003/debit_card.png/58a6832b-deaa-c3d8-f22d-c90c0c2bf785?t=1560335158596"
                        class="img-fluid rounded-top" width="100vh" alt="">
                </span>
            </a>
        </div>
        <div class="col p-2">
            <a href="{{ url('/atm-bank/statment') }}" class="btn btn-light shadow border ">
                <span>
                    <h3>Mini Statement</h3>
                </span>
                <span>
                    <img src="https://sbi.co.in/documents/136/73003/debit_card.png/58a6832b-deaa-c3d8-f22d-c90c0c2bf785?t=1560335158596"
                        class="img-fluid rounded-top" width="100vh" alt="">
                </span>
            </a>
        </div>
    </div>
</div>


@include('layouts.footer')
