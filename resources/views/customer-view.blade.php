@extends('layouts.header')

@push('title')
    <title> Dashboard </title>
@endpush

@include('layouts.nav-bar')



<div class="container">
    <a href="{{ route('register') }}"><button class="btn btn-primary d-inline-block m-2 float-end">Add</button></a>
    <div class="shadow border rounded">
        <table class="table table-hover table-secondary table-responsive">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Gender</th>
                    <th scope="col">State</th>
                    <th scope="col">Country</th>
                    <th scope="col">Status</th>
                    <th class="text-center" scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer as $item)
                    <tr>
                        <td scope="row">{{ $item->customer_id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->dob }}</td>
                        <td>
                            @if ($item->gender == 'M')
                                Male
                            @elseif($item->gender == 'F')
                                Female
                            @elseif($item->gender == 'O')
                                Other
                            @endif

                        </td>
                        <td>{{ $item->state }}</td>
                        <td>{{ $item->country }}</td>
                        <td>
                            @if ($item->status == '1')
                                <span class="badge text-success"> Active </span>
                            @else
                                <span class="badge text-danger">Inactive</span>
                            @endif

                        </td>
                        <td><a href="#"><button class="btn btn-warning">Update</button></a></td>
                        <td><a href="{{ route('customer.delete', ['id' => $item->customer_id]) }}"><button
                                    class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div>



@include('layouts.footer')
