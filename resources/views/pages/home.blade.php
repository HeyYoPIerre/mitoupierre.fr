@extends('layouts.app')

@section('content')
    <main>

        <section class="container accueil-introduction position-relative">

           <div class="row">
            <div class="col-xl-8 col-md-7">
                <h1 class="d-flex flex-wrap mb-5 mb-md-0 px-md-0 px-4">
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
                    <div class="photographe under">photographe</div>
                    <div class="text"> &ensp;et&ensp; </div>
                    <div class="devweb">développeur web</div>
                    <div class="mt-4 text">Basé à Caen, mais je peux me déplacer si nécessaire</div>
                </h1>
            </div>
            <div class=" d-flex justify-content-end position-relative col-xl-4 col-md-5 align-content-end px-md-0 px-4 m-0">
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="btn btn-primary cta position-absolute bottom-0 end-0 popupopener border-0" id="popupLink">HIT ME
                    UP!</button>
                <img src="{{ asset('images/Archive-21.jpg') }}" title="" alt="Portrait" class="mwa img-fluid">
            </div>
            <div class="w-50 h-50 rounded-circle bg-color"></div>
        </section>
           </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark text-white">
                    <div class="modal-header" style="border-color: #343a40">
                        <div class="modal-title text-uppercase" id="exampleModalLabel">Il va falloir défiler manuellement
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        J'ai ajouté des effets faudrait pas les manquer
                    </div>
                    <div class="modal-footer" style="border-color: #343a40">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">C'est vrai</button>
                    </div>
                </div>
            </div>
        </div>

        <section class="container-fluid accueil-photos">
            <div class="wrap-slider" id="js-wrapSlider">
                <ul class="js-slider">
                    @foreach ($images as $image)
                        <li class="item"><a href="{{ route('portfolio') }}"><img src="{{ asset($image->filepath) }}"
                                    alt="{{ $image->alt }}"></a></li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="container shadow px-4 px-md-5 accueil-filer">
            <div class="row mt-4 mb-5">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="{{ asset('images/logosfront.webp') }}" alt="JS logo" class="img-fluid reveal-1 mb-4 mb-md-0">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <p class="reveal-2 fw-600 font-17 font-md-22">L'aventure commence toujours par monter une équipe
                </div>
            </div>
            <div class="row flex-column-reverse flex-md-row mb-5">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="reveal-2 fw-600 font-17 font-md-22">Forcément, je ne suis qu'un homme, j'utilise Bootstrap
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="{{ asset('images/bootstrap-logo-shadow.webp') }}" alt="bootstrap logo" height="300"
                        width="300" class="img-fluid reveal-1 mb-4 mb-md-0">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="{{ asset('images/PHP-logo.svg.webp') }}" alt="php logo" height="300" width="300"
                        class="img-fluid reveal-1 mb-4 mb-md-0">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <p class="reveal-2 fw-600 font-17 font-md-22"> Armé de mon php et mon couteau je me suis attaqué au
                        backend
                    </p>
                </div>
            </div>
            <div class="row flex-column-reverse flex-md-row mb-4">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="reveal-2 fw-600 font-17 font-md-22">Un framework pour les gouverner tous !
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="{{ asset('images/lordoflaravel.webp') }}" alt="lordoflaravel" height="300"
                        width="300" class="img-fluid reveal-1 mb-4 mb-md-0">
                </div>
            </div>
        </section>
        <section class="container-fluid accueil-projet-perso">
            <div class="row py-4">
                <div class="col-md-6 col-xl-3  d-flex justify-content-center flex-column align-items-center">
                    <i class="fa-solid fa-code font-50 mb-4"></i>
                    <span class="counter font-50" data-count="3667">3.667</span>
                    <p class="mb-0 font-23">Lignes rédigées</p>
                </div>
                <div class="col-md-6 col-xl-3  d-flex justify-content-center flex-column align-items-center">
                    <i class="fa-regular fa-folder font-50 mb-4"></i>
                    <span class="counter font-50" data-count="42">42</span>
                    <p class="mb-0 font-23">Projets inachevés</p>
                </div>
                <div class="col-md-6 col-xl-3  d-flex justify-content-center flex-column align-items-center">
                    <i class="fa-regular fa-image font-50 mb-4"></i>
                    <span class="counter font-50" data-count="6523">6.523</span>
                    <p class="mb-0 font-23">Photos supprimées</p>
                </div>
                <div class="col-md-6 col-xl-3  d-flex justify-content-center flex-column align-items-center">
                    <div class="gloveicon mb-4"></div>
                    <span class="counter font-50" data-count="8457">8.457</span>
                    <p class="mb-0 font-23">Crochets gauche</p>
                </div>
            </div>
        </section>

        <section class="container about rounded-4 shadow mt-5">
            <p class="reveal-1">A la base je voulais juste faire un site pour mettre des photos.
                Mais dans le fond je ne veux pas faire comme les autres, du coup pas question de passer par un site de
                portfolios !
                Alors j'ai commencé à apprendre, puis j'ai compris pourquoi on utilise des CMS. Mais j'ai déjà dit qu'ici on
                fait pas comme les autres ! </p>
            <p class="reveal-2">De ce fait, j'ai fait mon propre CMS avec Laravel. C'est à cet instant que c'est parti en
                vrille. Du coup,
                je passe mon temps libre à coder, puis tout effacer et recommencer dans l'espoir d'être payé pour.
                J'ai plus le temps de shooter dans cette histoire ! Parce que oui, je fais de la photo aussi. </p>
            <p class="reveal-3">Depuis des années que je ne compte plus j'essaie sans cesse de faire de la photo en mieux,
                évidemment, vous
                l'avez compris, ici, on fait pas... La science de l'image, l'art de raconter sans les mots, la joie de
                l'immortalité. Tant de raisons qui m'ont amenées à ces quelques lignes. Mais le problème avec la photo
                c'est qu'il faut un sujet, et ça, c'est à vous de le devenir.
                Si vous avez l'œil, vous avez remarqué que je fais de la boxe, genre beaucoup trop de boxe. Et le plus dur
                dans l'histoire, c'est de trouver un équilibre dans ce triangle. </p>
            <p class="reveal-4">Quelques lignes ne suffisent pas à résumer autant de passion et d'acharnement, alors autant
                en parler autour
                d'un projet d'envergure ! </p>
        </section>
        <div class="container mb-4">
            <div class="line reveal-4"></div>
        </div>

        <section id="contact" class="container section-contact shadow rounded-4 my-5 py-5">
            <h2>Hit me up !</h2>
            @if (Session::has('success'))
                <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
            <form method="POST" class="row mx-4 mx-md-5" action="{{ route('contacts.store') }}">
                @csrf

                <div class="col-md-6 mb-4">

                    <label for="name" class="text-white">nom</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">
                    <label for="email" class="text-white">email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 mb-4">
                    <label for="subject_constant" class="text-white">objet de la demande</label>
                    <select name="subject_constant" id="subject_constant"
                        class="form-control form-select @error('subject_constant') is-invalid @enderror">
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

                <div class="col-12 mb-4">
                    <label for="content" class="text-white">message</label>
                    <textarea name="content" id="content" rows="10" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn cta border-0 mx-auto my-3">ENVOYER</button>
                </div>
            </form>

        </section>
        <section class="container-fluid accueil-filer-footer">
        </section>

    </main>
@endsection
