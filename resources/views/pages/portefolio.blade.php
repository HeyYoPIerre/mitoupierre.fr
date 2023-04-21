@extends('layouts.app')

@section('content')
    
<main class="justify-content-center">
        <div class="container-fluid image-container d-flex justify-content-center col-12 p-5 pt-0">
                <img src="{{ asset($image->filepath) }}" alt="{{ $image->alt }}" class="">

        </div>
</main>

@endsection