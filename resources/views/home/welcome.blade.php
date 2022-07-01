<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>StudyUp | Accueil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset('css/introduction.css') }}" rel="stylesheet">
</head>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<body style="background: #fff;">
    @foreach($notifications as $notification)
    <div class="container-fluid bg-smt-tertiary">
        <div class="row">
            <div class="offset-2"></div>
            <div class="col-lg-8">
                <p class="text-smt-primary text-center mx-2 my-4 font-weight-bolder">{{$notification->message}}
                @if ($notification->url != null)
                <a href=" {{$notification->url}} " target="_blank" class="font-weight-bold text-smt-secondary mx-1"> Plus d'informations ?</a>
                @endif
                </p>
            </div>
            <div class="offset-2"></div>
        </div>
    </div>
    @endforeach
    <div class="home_container mx-auto d-flex flex-column">
        @include('layouts.header')
        <main class="mt-0 py-4 p-0">
            <div class="container-fluid my-5">
                <div class="row justify-content-around">
                    <div class="text col-md-5 mt-5 text-white">
                        <h1 class="display-4 font-weight-bold">Cultivez-vous de n'importe où que vous vous trouvez!</h1>
                        <p class="h4 font-weight-bold my-5">Roman, œuvres pédagogiques, etc. Retrouvez tout ce
                            dont vous avez besoin de lire sur notre plateforme.
                            Téléchargez notre application mobile ou créer un
                            compte en ligne :</p>
                        <div class="fit-content d-flex flex-column justify-content-between">
                            <div class="downloadBtns fit-content">
                                <a href="#" class="android bg-smt-tertiary text-smt-primary rounded-left text-decoration-none">
                                    <i class="fab fa-android"></i>
                                    <span class="font-weight-bold">android</span>
                                </a>
                                <a href="#" class="ios bg-smt-tertiary text-smt-primary rounded-right text-decoration-none">
                                    <i class="fab fa-apple"></i>
                                    <span class="font-weight-bold">iOS</span>
                                </a>
                            </div>
                            <div class="fit-content my-5">
                                <a href="{{ route('register') }}" class="home_registerBtn font-weight-bold text-decoration-none bg-smt-secondary text-white rounded">Créer un compte</a>
                            </div>
                        </div>
                    </div>
                    <div class="img  col-md-5 text-center">
                        <img src="{{asset('dist/img/student.png')}}" alt="Black student">
                    </div>
                </div>
                <div class="text-center my-5" id="section1">
                    <button class="bg-transparent border-0 outline-0 display-4 text-white-50">
                        <a href="#section2"><i class="fal fa-angle-down text-white"></i></a>
                    </button>
                </div>
            </div>
        </main>
    </div>
    <div class="container mt-1 mb-5 text-center">
        <div class="main" id="section2">
            <a href="#section1"></a>
        </div>
        <div class="row justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="titleband text-center" viewBox="0 0 764.864 153.241">
                <g id="Groupe_18" data-name="Groupe 18" transform="translate(-577.568 -1157.759)">
                    <rect id="up" data-name="Rectangle 4" width="761" height="124" transform="translate(577.568 1184.317) rotate(-2)" fill="rgba(244,147,29,0.25)" />
                    <rect id="down" data-name="Rectangle 5" width="761" height="124" transform="translate(581.896 1160.517) rotate(2)" fill="rgba(244,147,29,0.75)" />
                    <text id="text" data-name="svg_text" class="h1 font-weight-bold" transform="translate(680 1250)" fill="#262160" font-weight="700">
                        <tspan x="0" y="0">Des œuvres de toutes catégories ..</tspan>
                    </text>
                </g>
            </svg>
        </div>
        <p class="mt-5 h5 font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.</p>
    </div>
    <div class="container mt-5 categories py-5 text-smt-tertiary">
        <div class="row">
            <ul class="col-md-8 col-12 border-width-3">
                <li>
                    <div class="mt-5">
                        <h1 class="font-weight-bold">Roman</h1>
                        <p class="mt-3 font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut laboreet dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </li>
                <li>
                    <div class="mt-5">
                        <h1 class="font-weight-bold">Sciences</h1>
                        <p class="mt-3 font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut laboreet dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </li>
                <li>
                    <div class="mt-5" id="section2">
                        <h1 class="font-weight-bold">Développement personnel</h1>
                        <p class="mt-3 font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut laboreet dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </li>
                <li>
                    <div class="mt-5">
                        <h1 class="font-weight-bold">Et plus ..</h1>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid fonctionnement py-5" style="margin: 100px auto;">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="titleband text-center" viewBox="0 0 764.864 153.241">
                    <g id="Groupe_18" data-name="Groupe 18" transform="translate(-577.568 -1157.759)">
                        <rect id="up" data-name="Rectangle 4" width="761" height="124" transform="translate(577.568 1184.317) rotate(-2)" fill="rgba(38,33,96,0.25)" />
                        <rect id="down" data-name="Rectangle 5" width="761" height="124" transform="translate(581.896 1160.517) rotate(2)" fill="rgba(38,33,96,0.75)" />
                        <text id="text" data-name="svg_text" class="h1 font-weight-bold" transform="translate(680 1250)" fill="#F4931D" font-weight="700">
                            <tspan x="0" y="0">Comment fonctionne StudyUp</tspan>
                        </text>
                    </g>
                </svg>
            </div>
        </div>
        <div class="mt-5 mx-auto" style="width: 90%">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body">
                            <div class="card-title d-inline-block">
                                <h1 class="display-3 font-weight-bold p-0 d-inline">1.</h1>
                                <h3 class="font-weight-bold d-inline">Création de compte</h3>
                            </div>
                            <p class="card-text font-weight-bold">
                                Sed ut perspiciatis, unde omnis iste
                                natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam
                                eaque ipsa, quae ab illo inventore veritatis et
                                quasi architecto beatae vitae dicta sunt.
                                Nemo enim ipsam voluptatem, quia voluptas
                                sit,aspernatur aut odit aut fugit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body">
                            <div class="card-title d-inline-block">
                                <h1 class="display-3 font-weight-bold p-0 d-inline">2.</h1>
                                <h3 class="font-weight-bold d-inline">Abonnement</h3>
                            </div>
                            <p class="card-text font-weight-bold">
                                Sed ut perspiciatis, unde omnis iste
                                natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam
                                eaque ipsa, quae ab illo inventore veritatis et
                                quasi architecto beatae vitae dicta sunt.
                                Nemo enim ipsam voluptatem, quia voluptas
                                sit,aspernatur aut odit aut fugit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body">
                            <div class="card-title d-inline-block">
                                <h1 class="display-3 font-weight-bold p-0 d-inline">3.</h1>
                                <h3 class="font-weight-bold  d-inline">Partenariat</h3>
                            </div>
                            <p class="card-text font-weight-bold">
                                Sed ut perspiciatis, unde omnis iste
                                natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam
                                eaque ipsa, quae ab illo inventore veritatis et
                                quasi architecto beatae vitae dicta sunt.
                                Nemo enim ipsam voluptatem, quia voluptas
                                sit,aspernatur aut odit aut fugit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top: 100px;">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="titleband text-center" viewBox="0 0 764.864 153.241">
                    <g id="Groupe_18" data-name="Groupe 18" transform="translate(-577.568 -1157.759)">
                        <rect id="up" data-name="Rectangle 4" width="761" height="124" transform="translate(577.568 1184.317) rotate(-2)" fill="rgba(2,172,240,0.25)" />
                        <rect id="down" data-name="Rectangle 5" width="761" height="124" transform="translate(581.896 1160.517) rotate(2)" fill="rgba(2,172,240,0.75)" />
                        <text id="text" data-name="svg_text" class="h1 font-weight-bold" transform="translate(740 1250)" fill="#FFF" font-weight="700">
                            <tspan x="0" y="0">Les avis de nos abonnés</tspan>
                        </text>
                    </g>
                </svg>
            </div>
        </div>
        <div class="container-fluid mx-auto" style="margin-top: 100px;">
            <div class="row justify-content-around opinions">
                <div class="col-md-3 col-md-3-5 col-10 my-5">
                    <div class="card border-0 bg-transparent">
                        <div class="card-header border-0 py-2 d-flex justify-content-around">
                            <div id="profileField1" class="py-2">
                                <img src="{{asset('dist/img/student1.jpg')}}" alt="Djamila" class="w-50 rounded-circle">
                            </div>
                            <div class="text-center ml-5 opinion_author_header">
                                <h2 class="font-weight-bold">Djamila</h2>
                                <span>Etudiante en informatique</span>
                            </div>
                        </div>
                        <div class="card-body py-5" style="background: #f8f8f8;">
                            <div class="text-right h2 text-smt-fourth">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <p class="card-text">
                                Sed ut perspiciatis, unde omnis iste
                                natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam
                                eaque ipsa, quae ab illo inventore veritatis et
                                quasi architecto beatae vitae dicta sunt.
                                Nemo enim ipsam voluptatem, quia voluptas
                                sit,aspernatur aut odit aut fugit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-3-5 col-10 my-5">
                    <div class="card border-0 bg-transparent">
                        <div class="card-header border-0 py-2 d-flex justify-content-around">
                            <div id="profileField2" class="py-2">
                                <img src="{{asset('dist/img/student2.jpg')}}" alt="Abdel" class="w-50 rounded-circle">
                            </div>
                            <div class="text-center ml-4 opinion_author_header">
                                <h2 class="font-weight-bold">Abdel</h2>
                                <span>Etudiante en marketing</span>
                            </div>
                        </div>
                        <div class="card-body py-5" style="background: #f8f8f8;">
                            <div class="text-right h2 text-smt-fourth">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <p class="card-text">
                                Sed ut perspiciatis, unde omnis iste
                                natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam
                                eaque ipsa, quae ab illo inventore veritatis et
                                quasi architecto beatae vitae dicta sunt.
                                Nemo enim ipsam voluptatem, quia voluptas
                                sit,aspernatur aut odit aut fugit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-3-5 col-10 my-5">
                    <div class="card border-0 bg-transparent">
                        <div class="card-header border-0 py-2 d-flex justify-content-around">
                            <div id="profileField3" class="py-2">
                                <img src="{{asset('dist/img/student3.jpg')}}" alt="Albert" class="w-50 rounded-circle">
                            </div>
                            <div class="text-center ml-2 opinion_author_header">
                                <h2 class="font-weight-bold">Albert</h2>
                                <span>Etudiante en droit</span>
                            </div>
                        </div>
                        <div class="card-body py-5" style="background: #f8f8f8;">
                            <div class="text-right h2 text-smt-fourth">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <p class="card-text">
                                Sed ut perspiciatis, unde omnis iste
                                natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam
                                eaque ipsa, quae ab illo inventore veritatis et
                                quasi architecto beatae vitae dicta sunt.
                                Nemo enim ipsam voluptatem, quia voluptas
                                sit,aspernatur aut odit aut fugit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="titleband mb-3 text-center" viewBox="0 0 764.864 153.241">
                <g id="Groupe_18" data-name="Groupe 18" transform="translate(-577.568 -1157.759)">
                    <rect id="up" data-name="Rectangle 4" width="761" height="124" transform="translate(577.568 1184.317) rotate(-2)" fill="rgba(112,112,112,0.25)" />
                    <rect id="down" data-name="Rectangle 5" width="761" height="124" transform="translate(581.896 1160.517) rotate(2)" fill="rgba(112,112,112,0.75)" />
                    <text id="text" data-name="svg_text" class="h1 font-weight-bold" transform="translate(680 1250)" fill="#FFF" font-weight="700">
                        <tspan x="0" y="0">Une application multiplateforme</tspan>
                    </text>
                </g>
            </svg>
            <h3 class="font-weight-bold text-center text-smt-tertiary mt-5">Vous pouvez avoir l'application installable sous Android, iOS, tablette et en version web</h3>
        </div>
    </div>
    <div class="container-fluid mt-5 text-center multiplateform" style="padding-top: 150px; padding-bottom: 150px;">
        <img src="{{asset('dist/img/footer-devices.png')}}" alt="Devices" class="w-75">
    </div>
    @include('layouts.footer')
    <script src="{{ asset('js/home.js') }}" type="module" defer></script>
</body>

</html>
