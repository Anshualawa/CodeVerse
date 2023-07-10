@extends('layouts.header')
@push('title')
    <title> CodeVerse </title>
@endpush

<body class="text-info" style="background: url({{ asset('wlc.png') }});background-repeat:repeat;background-size:cover;">

    <div class="bg-success bg-opacity-25" style="height: 100%">
        <div class="container py-5">
            <div class="row py-5 ">
                <div class="col-lg-3 py-5">
                </div>
                <div class="col-lg-6 py-5 clearfix">
                    <a href="/home">
                        <img src="{{ asset('logovd.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
</body>

@include('layouts.footer')
