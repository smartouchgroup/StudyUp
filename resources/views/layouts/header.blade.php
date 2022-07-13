<div class="home_container mx-auto d-flex flex-column">
    <div class="mx-auto">
        <header class="navbar d-flex justify-content-space-between bg-smt-primary py-2 m-0">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('dist/img/logo.png') }}" width="50" height="50"
                    class="d-inline-block align-top bg-light rounded-circle mr-2" alt="">
                <span class="h3 text-white font-weight-bold">StudyUp</span>
            </a>
            <button class="text-white fit-content font-weight-bold border-0 text-center col-1 smt-sm-showNavBtn">
                <i class="fal fa-bars"></i>
            </button>
            <div class="navContainer">
                <nav class="smt-sm-sidebar">
                    <button class="text-white border-0 smt-sm-hideNavBtn">
                        <i class="fal fa-times"></i>
                    </button>
                    <ul class="nav justify-content-end header-nav">
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ asset('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ asset('quest') }}">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ asset('a_propos') }}">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ asset('contacts') }}">Contacter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ route('download') }}" data-toggle="modal"
                                data-target="#exampleModal">Télécharger</a>
                        </li>
                        @if (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold"
                                    href="{{ route('deconnexion') }}">Deconnexion</a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </header>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">Pour une meilleure
                expérience utilisateur, nous vous recommendons de télécharger la version
                mobile de StudyUp</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <h6 class="text-center mt-3">
            Veuillez scanner le code Qr
        </h6>
        <div class="modal-body row">

            <div class="col-6 mx-auto text-center">
                <img src="{{ asset('image/qr-code_appstore.png') }}" alt=""
                    width="50%">
            </div>
            <div class="col-6 mx-auto text-center">
                <img src="{{ asset('image/qr-code_playstore.png') }}" alt=""
                    width="50%">
            </div>
            <div class="col-6 mx-auto text-center">
                <button class="btn bg-smt-secondary font-weight-bold text-white px-3">
                    <i class="fab fa-app-store"></i> APP STORE
                </button>
            </div>
            <div class="col-6 mx-auto text-center">
                <button class="btn bg-smt-secondary font-weight-bold text-white px-3">
                    <i class="fab fa-google-play"></i> GOOGLE PLAY
                </button>
            </div>

        </div>
    </div>
</div>
</div>
