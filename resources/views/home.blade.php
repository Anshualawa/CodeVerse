@extends('layouts.header')
@include('layouts.nav-bar')

@push('title')
    <title>Welcome-CodeVerse</title>
@endpush


<div class="container">
    @foreach ($content as $item)
        <div class="row bg-light shadow rounded-2 my-3 px-3">
            <small id="emailHelpId" class="form-text text-muted">last update {{ $item->updated_at }}</small>
            <h4>{{ $item->headline }} {{-- <span class="badge bg-primary">New</span> --}}</h4>
            <p class="fw-light">
                {{ $item->summary }}
            </p>
        </div>
    @endforeach
</div>






@include('layouts.footer')
