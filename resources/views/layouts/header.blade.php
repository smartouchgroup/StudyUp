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
                            <a class="nav-link font-weight-bold" href="{{ route('download') }}">Télécharger</a>
                        </li>
                        @if (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{ route('deconnexion') }}">Deconnexion</a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </header>
    </div>
</div>
