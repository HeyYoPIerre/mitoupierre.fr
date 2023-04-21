@extends('layouts.app')

@section('content')
    
<main>
        <div class="container-fluid image-container d-flex justify-content-center col-12 p-5">
                <img src="{{ asset($image->filepath) }}" alt="{{ $image->alt }}" class="">
        </div>
</main>

@endsection