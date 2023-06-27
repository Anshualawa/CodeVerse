@extends('layouts.header')
@push('title')
    <title> CodeVerse </title>
@endpush

<body class="text-info"
    style="background: url('https://scitechdaily.com/images/AI-Technology-Creation-Concept.gif');background-repeat:repeat;background-size:cover;">

    <div class="bg-success bg-opacity-25" style="height: 100%">
        <div class="container py-5">
            <div class="row py-5 ">
                <div class="col-lg-3 py-5">
                </div>
                <div class="col-lg-6 py-5 clearfix">
                    <a href="/home">
                        <div class="row my-5">
                            <div class="col-lg-3 px-1 text-end ">
                                <img src="https://uploads-ssl.webflow.com/6165b74221c0712ba456e3b6/6165b8f90ce1a399de9cef63_Logo%20Mark.svg"
                                    alt="" width="180v">
                            </div>
                            <div class="col-9  py-5">
                                <img src="https://uploads-ssl.webflow.com/6165b74221c0712ba456e3b6/6165b90e4b166ab7c07d598b_Codeverse%20Text%20Mark.svg"
                                    alt="" width="550vh">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
</body>

@include('layouts.footer')
