@extends('layouts.app')

@section('content')
    <main>

        <section class="container accueil-introduction position-relative">

            <div class="col-8">
                <h1 class="d-flex flex-wrap">
                    <div class="lamp">
                        <div class="lava">
                            <div class="blob"></div>
                            <div class="blob"></div>
                            <div class="blob"></div>
                            <div class="blob"></div>
                            <div class="blob"></div>
                            <div class="blob"></div>
                            <div class="blob"></div>
                            <div class="blob"></div>
                            <div class="blob top"></div>
                            <div class="blob bottom"></div>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="d-none" version="1.1">
                        <defs>
                            <filter id="goo">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                <feColorMatrix in="blur" mode="matrix"
                                    values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                                <feBlend in="SourceGraphic" in2="goo" />
                            </filter>
                        </defs>
                    </svg>
                    <div class="text"> Salut, moi c'est Pierre,&ensp;</div>
                    <div class="photographe">photographe</div>
                    <div class="text"> &ensp;et&ensp; </div>
                    <div class="devweb">développeur web</div>
                    <div class="mt-4 text under">Basé à Caen, mais je peux me déplacer si nécessaire</div>
                </h1>

            </div>
            <div class=" d-flex justify-content-end position-relative col-4 align-content-end p-0 m-0">
                <a href="#contact" class="cta position-absolute bottom-0 end-0">HIT ME UP!</a>
                <img src="{{ asset('images/Archive-18.jpg') }}" title="" alt="Portrait" class="mwa">
            </div>
            <div class="w-50 h-50 rounded-circle bg-color"></div>
        </section>

        <section class="container-fluid accueil-photos">
            <div class="wrap-slider" id="js-wrapSlider">
                <ul class="js-slider">
                    @foreach ($images as $image)
                        <li class="item"><a href="{{ route('portefolio') }}"><img src="{{ asset($image->filepath) }}"
                                    alt="{{ $image->alt }}"></a></li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="container-fluid accueil-filer">
            <div class="accueil-dev">
                <p>En matière de développement web, l'aventure commence. Revenez plus tard pour y trouver mes créations. Vous êtes bien évidemment dans l'une d'entre elles.
                </p>
            </div>
        </section>
        <section class="container-fluid accueil-projet-perso d-flex flex-column">
            <h2>Projet Personnel</h2>
            <p>Dans le cadre d'un projet personnel particulier, je suis à la recherche de personnes prêtes à m'accueilir le
                temps d'un shooting photo.<br>Si vous êtes interressé(e) ou connaissez des gens suceptibles de l'être,
                n'hésitez
                pas à me contacter pour en savoir plus.</p>
        </section>

        <section id="contact" class="section-contact">
            <h2>Parlons de votre projet</h2>
            @if (Session::has('success'))
                <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
            <form method="POST" action="{{ route('contacts.store') }}">
                @csrf

                <div class="form-name-email">
                    <div class="form-column">

                        <label for="name">nom</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="@error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-column">
                        <label for="email">email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="@error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-column">
                    <label for="subject_constant">objet de la demande</label>
                    <select name="subject_constant" id="subject_constant"
                        class="@error('subject_constant') is-invalid @enderror">
                        @foreach (config('constants.subjects') as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                    @error('subject_constant')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <label for="content">message</label>
                <textarea name="content" id="content" rows="10" class="@error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="d-flex">
                    <button type="submit" class="btn cta border-0 mx-auto my-3">ENVOYER</button>
                </div>
            </form>

        </section>
        <section class="container-fluid accueil-filer-footer">
        </section>
    </main>
@endsection
