@extends('layouts.header')
@include('layouts.nav-bar')

@push('title')
    <title>Welcome-CodeVerse</title>
@endpush


<div class="container">
    @foreach ($content as $item)
        <h4>{{ $item->headline }} {{-- <span class="badge bg-primary">New</span> --}}</h4>
        <p class="fw-light">
            {{ $item->summray }}
        </p>
    @endforeach
</div>






@include('layouts.footer')
