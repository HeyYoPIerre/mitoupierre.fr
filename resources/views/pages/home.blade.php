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
                <a href="javascript:void(0)" class="cta position-absolute bottom-0 end-0 popupopener"  id="popupLink">HIT ME UP!</a>
                <img src="{{ asset('images/Archive-21.jpg') }}" title="" alt="Portrait" class="mwa">
            </div>
            <div class="w-50 h-50 rounded-circle bg-color"></div>
        </section>

        <div class="popup" onclick="closePopup()">
            <h2>Il va falloir défiler manuellement</h2>
            <p>J'ai ajouté des scripts faudrait pas les manquer</p>
        </div>
    

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
            <div class="textpop ">
                <img src="{{ asset('images/pngeggjs.webp') }}" alt="JS logo" class="col-6">
                <p class="col-6">Faut vraiment préciser que j'ai passé des heures sur flexbox avant d'écrire n'importe quoi en Javascript?
                </p>
            </div>
            <div class="textpop flex-row-reverse">
                <img src="{{ asset('images/bootstrap-logo-shadow.webp') }}" alt="bootstrap logo" class="col-6">
                <p class="col-6">Forcément, je ne suis qu'un homme, j'utilise Bootstrap.
                </p>
            </div>
            <div class="textpop">
                <img src="{{ asset('images/PHP-logo.svg.webp') }}" alt="php logo" class="col-6">
                <p class="col-6">C'est avec ce langage que j'ai commencé à perdre mon âme...
                </p>
            </div>
            <div class="textpop flex-row-reverse">
                <img src="{{ asset('images/lordoflaravel.webp') }}" alt="laravel logo" class="col-6">
                <p class="col-6">Un framework pour les gouverner tous !
                </p>
            </div>

        </section>
        <section class="container-fluid accueil-projet-perso d-flex flex-row">
            <div class="col-3 d-flex justify-content-center flex-column align-items-center">
                <span class="counter" data-count="3667">3.667</span>
                <h3>Lignes rédigées</h3>
            </div>
            <div class="col-3 d-flex justify-content-center flex-column align-items-center">
                <span class="counter" data-count="42">42</span>
                <h3>Projets inachevés</h3>
            </div>
            <div class="col-3 d-flex justify-content-center flex-column align-items-center">
                <span class="counter" data-count="6523">6.523</span>
                <h3>Photos supprimées</h3>
            </div>
            <div class="col-3 d-flex justify-content-center flex-column align-items-center">
                <span class="counter" data-count="10000">10,000</span>
                <h3>Jabs</h3>
            </div>
        </section>

        <section class="about">
            <p>S'il faut se présenter, soit, je peux commencer. A la base je voulais just faire un site pour mettre des photos. 
                Mais dans le fond j'veux pas faire comme les autres, du coups pas question de passer par un site de portfolios ! 
                Alors j'ai commencé à apprendre, puis j'ai compris pourquoi on utilise des CMS. Mais j'ai déjà dit qu'ici on fait pas comme les autres! <br> 
                De ce fait, j'ai fait mon propre CMS avec Laravel. C'est à cet instant que c'est parti en vrille. Du coups, je passe mon temps libre à coder, puis tout effacer et recommencer dans l'espoir d'être payé pour. 
                J'ai plus le temps de shooter dans cette histoire! Parceque oui, je fais de la photo aussi. <br>
                Depuis des années que je ne compte plus j'essaie sans cesse de faire de la photo en mieux, évidemment, vous l'avez compris, ici, on fait pas...bref. La science de l'image, l'art de raconter sans les mots, la joie de l'immortalité. Tant de raisons qui m'ont ammenées à ces quelques lignes. Mais le problème avec la photo c'est qu'il faut un sujet, et ça, c'est à vous de devenir. 
                Si vous avez l'oeil, vous avez remarqué que je fais de la boxe, genre beaucoup trop de boxe. Et le plus dur dans l'histoire, c'est de trouver un équilibre dans ce triangle. <br>
                Quelques lignes ne suffisent pas à résumer autant de passion et d'acharnement, alors autant en parler autour d'un projet d'envergure! </p>
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
