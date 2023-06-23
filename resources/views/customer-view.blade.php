@extends('layouts.header')

@push('title')
    <title> Dashboard </title>
@endpush

@include('layouts.nav-bar')



.<div class="container">
    <div class="table-responsive shadow border rounded">
        <table class="table table-hover table-secondary ">
            {{-- <pre>
                {{ print_r($customer) }}
            </pre> --}}
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">DOB</th>
                    <th scope="col">State</th>
                    <th scope="col">Country</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer as $item)
                    <tr class="">
                        <td scope="row">{{ $item->customer_id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->dob }}</td>
                        <td>{{ $item->state }}</td>
                        <td>{{ $item->country }}</td>
                        <td>{{ $item->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>



@include('layouts.footer')
