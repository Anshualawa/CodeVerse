@extends('layouts.header')

@push('title')
    <title>Bank Statement</title>
@endpush

<div class="container my-5 p-5">
    <div class="row justify-content-center align-items-center g-2">
        <span>
            <h1>Bank statement</h1>
        </span>
    </div>
    <hr>

    <div class="table-responsive">
        <table class="table table-hover table-borderless align-middle">
            <thead class="table-light">
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                </tr>
            </thead>
            <tbody class="">
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>


    @include('AtmBank/layout/back_btn')

</div>



@include('layouts.footer')
