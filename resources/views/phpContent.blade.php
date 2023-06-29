@extends('layouts.header')

@push('title')
    <title>Upload Content</title>
@endpush
<div class="container my-5 p-5">

    <form action="{{ url('/') }}/php" method="POST" class="bg-light shadow p-5 rounded-4">
        @csrf
        <div class="col">
            <div class="mb-3">
                <label for="" class="form-label">Headline</label>
                <input type="text" name="headline" class="form-control" placeholder="write headline here ......"
                    aria-describedby="helpId">

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
