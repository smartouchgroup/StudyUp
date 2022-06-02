<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>App | Accueil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container-fluid bg-white app-header">
        <header class="mx-auto d-flex justify-content-around align-items-center">
            <div>
                <a href="#"
                    class="fit-content d-flex justify-content-center align-items-center text-smt-tertiary text-decoration-none">
                    <img src="{{ asset('dist/img/logo.png') }}" alt="StudyUp">
                    <span class="h2 font-weight-bold">StudyUp</span>
                </a>
            </div>
            <form action="#" class="fit-content px-3 d-flex align-items-center rounded-pill">
                <i class="fal fa-search"></i>
                <input type="text" name="search" id="search" placeholder="Rechercher ..." class="border-0 ml-1">
                <input type="submit" class="d-none">
            </form>
            <div class="fit-content d-flex justify-content-center align-items-center">
                <button id="languages"
                    class="fit-content mx-4 border-0 bg-transparent text-smt-fourth hover-text-smt-tertiary">
                    <i class="fal fa-language"></i>
                </button>
                <a href="#" id="notification" class="mx-4 text-smt-fourth text-decoration-none hover-text-smt-tertiary">
                    <i class="far fa-bell"></i>
                </a>
                <a href="#" id="user" class=" mx-4 d-flex justify-content-center align-items-center text-smt-sixth text-decoration-none hover-text-smt-tertiary">
                    <img src="{{asset('dist/img/avatar.svg')}}" alt="Avatar">
                    <span class="mx-1">{{ Auth::user()->firstname }}</span>
                    {{-- <i class="fas fa-sort-down mb-2"></i> --}}
                </a>
                <form action="{{ route('deconnexion') }}" method="POST">
                    @csrf
                    <button class="btn btn-secondary " type="submit"  aria-expanded="false">
                     Deconnexion
                    </button>
                 </form>
            </div>

        </header>
    </div>

    <div class="container my-5">
        <div class="study-news mx-auto">
            <h1 class="fit-content mx-auto font-weight-bold text-smt-sixth mb-5">Les nouveautés de la plateforme</h1>
            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('dist/img/library.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('dist/img/library.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('dist/img/library.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 for-user">
        <div class="mx-auto col-md-9">
            <div class="w-100 d-flex justify-content-between border-bottom">
                <h2 class="text-smt-sixth">Bienvenue {{ Auth::user()->firstname }}!</h2>
                <div>
                    <button class="border-0 outline-none bg-transparent preference text-smt-sixth">
                        <i class="fal fa-sliders-h"></i>
                    </button>
                </div>
            </div>
            <h2 class="font-weight-bold my-3">Les œuvres recemment ajoutés</h2>
            <div class="row books_row">
                @forelse ($bookRecentlyAdded  as $book)
                    <div class="card p-1">
                        <div class="book_img rounded-top text-center">
                            <img src="{{ asset('image' . '/' . $book->photo) }}" alt="{{ $book->titre }}">
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="fit-content rate">
                                <h6 class="mt-2 font-weight-bold">{{ $book->titre }}</h6>
                            </div>
                            <div class="fit-content">
                                <span class="text-smt-sixth">
                                    @if ($book->prix == null)
                                        <h6 class="mt-2">Gratuit</h6>
                                    @else
                                        {{ $book->prix }} Fcfa
                                    @endif
                                </span>
                            </div>
                        </div>
                        <a href="{{ route('show', $book->id) }}"
                            class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir
                            le livre</a>
                    </div>
                @empty
                    <div class="alert alert-warning col-md-12 col-xs-12" role="alert">
                        <p class='font-weight-bolder text-center '>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                            Aucun livre disponible
                        </p>
                    </div>
                    {{ $bookRecentlyAdded->links() }}
                @endforelse
            </div>
            <!--œuvre mieux notées-->

            <h2 class="font-weight-bold my-5">Les œuvres les mieux notées</h2>
            <div class="row books_row">
                <div class="card p-1">
                    <div class="book_img rounded-top text-center">
                        <img src="{{ asset('image/a_c.jpg') }}" alt="Agatha_Christie">
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fit-content rate">
                            <img src="{{ asset('dist/img/star.svg') }}" alt="star">
                            <img src="{{ asset('dist/img/star.svg') }}" alt="star">
                            <img src="{{ asset('dist/img/star.svg') }}" alt="star">
                            <img src="{{ asset('dist/img/star_half.svg') }}" alt="star">
                        </div>
                        <div class="fit-content">
                            <span class="text-smt-sixth">Gratuit</span>
                        </div>
                    </div>
                    <a href="#"
                        class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir
                        le livre</a>
                </div>

                <div class="card p-1">
                    <div class="book_img rounded-top text-center">
                        <img src="{{ asset('image/a_c.jpg') }}" alt="Agatha_Christie">
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fit-content rate">
                            <img src="{{ asset('dist/img/star.svg') }}" alt="star">
                            <img src="{{ asset('dist/img/star.svg') }}" alt="star">
                            <img src="{{ asset('dist/img/star.svg') }}" alt="star">
                            <img src="{{ asset('dist/img/star_half.svg') }}" alt="star">
                        </div>
                        <div class="fit-content">
                            <span class="text-smt-sixth">Gratuit</span>
                        </div>
                    </div>
                    <a href="#"
                        class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir
                        le livre</a>
                </div>

                <div class="card p-1">
                    <div class="book_img rounded-top text-center">
                        <img src="{{ asset('image/a_c.jpg') }}" alt="Agatha_Christie">
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fit-content rate">
                            <img src="{{ asset('dist/img/star.svg') }}" alt="star">
                            <img src="{{ asset('dist/img/star.svg') }}" alt="star">
                            <img src="{{ asset('dist/img/star.svg') }}" alt="star">
                            <img src="{{ asset('dist/img/star_half.svg') }}" alt="star">
                        </div>
                        <div class="fit-content">
                            <span class="text-smt-sixth">Gratuit</span>
                        </div>
                    </div>
                    <a href="#"
                        class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir
                        le livre</a>
                </div>

                <div class="card p-1">
                    <div class="book_img rounded-top text-center">
                        <img src="{{ asset('image/a_c.jpg') }}" alt="Agatha_Christie">
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fit-content rate">
                            <img src="{{ asset('dist/img/star.svg') }}" alt="star">
                            <img src="{{ asset('dist/img/star.svg') }}" alt="star">
                            <img src="{{ asset('dist/img/star.svg') }}" alt="star">
                            <img src="{{ asset('dist/img/star_half.svg') }}" alt="star">
                        </div>
                        <div class="fit-content">
                            <span class="text-smt-sixth">Gratuit</span>
                        </div>
                    </div>
                    <a href="#"
                        class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir
                        le livre</a>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid my-5">
        <div class="col-md-9 mx-auto">
           <h2 class="font-weight-bold my-5">{{ $getBookByDrame[0]->category->categorie}}</h2>
        <div class="row books_row">
             @foreach ($getBookByDrame as $drame)
            <div class="card p-1">
              <div class="book_img rounded-top text-center">
                  <img src="{{asset('image' . '/' . $drame->photo)}}" alt="{{ $drame->titre }}">
              </div>
              <div class="card-body d-flex justify-content-between align-items-center">
                  <div class="fit-content rate">
                    <h6 class="mt-2 font-weight-bold">{{ $drame->titre }}</h6>
                  </div>
                  <div class="fit-content">
                      <span class="text-smt-sixth">
                      @if ($drame->prix == null)
                        php artisan serve
                          <h6 class="mt-2">Gratuit</h6>
                      @else
                          {{$drame->prix}} Fcfa
                      @endif</span>
                  </div>
              </div>
              <a href="{{ route('books.show',$drame->id) }}" class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir le livre</a>
          </div>
            @endforeach
          </div>
    </div> --}}

    @include('app.layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>

</html>
