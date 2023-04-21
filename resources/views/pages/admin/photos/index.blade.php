@extends('layouts.app')

@section('content')

<main>
    <div class="container my-5">
        @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
         @endif
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
        @foreach ($images as $image)        
            <div class="col mt-3 position-relative">
                <img src="{{ asset($image->filepath) }}" class="img-fluid" alt="{{ $image->alt }}">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary position-absolute rounded-0" style="top:0; right:12px" data-bs-toggle="modal" data-bs-target="#modal{{ $image->id }}">X</button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal{{ $image->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content bg-dark text-white">

                                <div class="modal-header border-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body border-0 text-center text-uppercase fw-bold">
                                    T'es sûr sûr sûr ????
                                </div>

                                <div class="modal-footer border-0">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>

                                    <form action="{{ route('photos.destroy', $image) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-primary">Supprimer</button>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                
            </div>
        @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $images->links() }}
        </div>
    </div>

</main>

@endsection