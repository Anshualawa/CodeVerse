@extends('layouts.header')

@push('title')
    <title>Upload Content</title>
@endpush
<div class="container my-5 p-5">

    <form action="{{ url('/') }}/php" method="POST" class="bg-light shadow p-5 rounded-4">
        @csrf
        <div class="form-check form-check-inline my-4">
            <input class="form-check-input" type="radio" name="sub_code" id="python3" value="100">
            <label class="form-check-label" for="python3">Python3</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sub_code" id="php" value="102">
            <label class="form-check-label" for="php">PHP</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sub_code" id="js" value="103">
            <label class="form-check-label" for="js">JavaScript</label>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="" class="form-label">Headline</label>
                <input type="text" name="headline" value="{{ old('headline') }}" class="form-control"
                    placeholder="write headline here ......" aria-describedby="helpId">

            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Summary</label>
            <textarea class="form-control" name="summary" id="" rows="5" placeholder="Write content here ......"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="/home">Canchel</a>
    </form>
</div>

@include('layouts.footer')
