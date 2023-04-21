@extends('layouts.app')

@section('content')

<main>
    <div class="container my-5 text-white">  
        <div class="row border-bottom py-3 mb-3"> 
            <div class="col-4">Nom</div>
            <div class="col-4">Email</div>
            <div class="col-4">Sujet</div>
        </div>    
        @foreach ($contacts as $contact) 
        <div class="row border-bottom pt-2">
            <div class="col-4">{{ $contact->name }}</div>
            <div class="col-4">{{ $contact->email }}</div>
            <div class="col-4"> 
                {{-- cf:formulaire. '===': compare les données + le type de données. 
                    Boucle sur le tableau constant.subject du dossier configs puis vérifie avec un @if que l'id du sujet e, constant match avec celui $contact. Affiche le nom--}}
                @foreach  (config('constants.subjects') as $id => $name)
                    @if ($id == $contact->subject_constant) 
                    {{ $name }}
                    @endif
                @endforeach 
            </div>
            <div class="col-12 py-3 border-bottom">{{ $contact->content }}</div>
        </div>
        @endforeach
    </div>
        <div class="d-flex justify-content-center">
            {{ $contacts->links() }}
        </div>
    </div>

</main>

@endsection