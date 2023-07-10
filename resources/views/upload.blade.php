@extends('layouts.header')

@include('layouts.nav-bar')



<div class="container">
    <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Choose file</label>
            <input type="file" class="form-control" name="image" placeholder="" aria-describedby="fileHelpId">
            <div id="fileHelpId" class="form-text">Help text</div>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>



@include('layouts.back_btn')
@include('layouts.footer')
