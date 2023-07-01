@extends('layouts.header')
@include('layouts.nav-bar')

@push('title')
    <title>Welcome-CodeVerse</title>
@endpush


<div class="container bg-success bg-opacity-25 rounded px-4">
    <span class=" ">
        <h1>PHP</h1>
    </span>
    @foreach ($php as $item)
        <div class="row bg-light shadow rounded-2 my-3 px-3">
            <small id="emailHelpId" class="form-text text-muted">last update {{ $item->updated_at }}</small>
            <h4>{{ $item->headline }} {{-- <span class="badge bg-primary">New</span> --}}</h4>
            <p class="fw-light">
                {{ $item->summary }}
            </p>
        </div>
    @endforeach
</div>

<div class="container bg-primary bg-opacity-25 rounded px-4">
    <span class=" ">
        <h1>Python3</h1>
    </span>
    @foreach ($python as $item)
        <div class="row bg-light shadow rounded-2 my-3 px-3">
            <small id="emailHelpId" class="form-text text-muted">last update {{ $item->updated_at }}</small>
            <h4>{{ $item->headline }} {{-- <span class="badge bg-primary">New</span> --}}</h4>
            <p class="fw-light">
                {{ $item->summary }}
            </p>
        </div>
    @endforeach
</div>

<div class="container bg-warning bg-opacity-25 rounded px-4">
    <span class=" ">
        <h1>JavaScript</h1>
    </span>
    @foreach ($js as $item)
        <div class="row bg-light shadow rounded-2 my-3 px-3">
            <small id="emailHelpId" class="form-text text-muted">last update {{ $item->updated_at }}</small>
            <h4>{{ $item->headline }} {{-- <span class="badge bg-primary">New</span> --}}</h4>
            <p class="fw-light">
                {{ $item->summary }}
            </p>
        </div>
    @endforeach
</div>

<div class="container">
    <div class="table-responsive">
        <table class="table table-primary ">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Emai</th>
                    <th scope="col">Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dummy_data as $item)
                    <tr class="">
                        <td scope="row">{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['age'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>


@include('layouts.footer')
