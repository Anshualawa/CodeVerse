@extends('layouts.header')


<div class="container p-5 my-5">
    <div class="row justify-content-center align-items-center text-start g-2">
        <span>
            <h1>Account Detail's</h1>
        </span>
    </div>
    <div class="table-responsive">
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">Customer ID</th>
                    <th scope="col">Account Number</th>
                    <th scope="col">Total Balance</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">R1C1</td>
                    <td>{{ $data }}</td>
                    <td><span>Rs. 54214 /-</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row justify-content-center align-items-center text-center g-2 my-5 p-5">
        <span><a class="btn btn-primary" href="{{ url('/atm-bank') }}">Go Back to Home Page</a></span>
    </div>

</div>



@include('layouts.footer')
