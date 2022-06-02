@include('app.layouts.header')
<div class="container ">
    <div class="row mt-5">
        <div class="col-12">
            <a href="/app" class="text-smt-sixth h3"><i class="fas fa-arrow-left"></i></a>
        </div>
    </div>
    <div class="card down shadow">
        <div class="row">
            @if($message = Session::get('message'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="col-5 up ">
                <img src="{{ asset('image' . '/' . $bookShows->photo) }}" alt="{{ $bookShows->titre }}"
                    class="w-75 h-100 poster ">
                <div class="col-12 text-center boutton mb-3">
                    <button type="button" class="btn bg-smt-secondary text-white font-weight-bold px-4">
                        @if ($bookShows->prix == null)
                            Gratuit
                        @else
                            Payer l'oeuvre
                        @endif
                    </button>
                </div>
                <div class="col-12 text-center boutton ">
                    <button type="button" class="btn text-white bg-smt-tertiary font-weight-bold px-4 px-4">Ajouter au
                        favoris</button>
                </div>
            </div>
            <div class="col-7 p-4 ">
                <h3 class="font-weight-bold">{{ $bookShows->titre }}</h3>
                <h5 class="">{{ $bookShows->author->nom }} {{ $bookShows->author->prenom }}</h5>
                <p class="text-justify pr-3">
                    {{ $bookShows->description }}
                </p>
            </div>
            <div class="col-12 d-flex justify-content-center mb-5">
                @if ($bookShows->prix != null)
                    <form action="{{ route('payment.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="book_id" value="{{ $bookShows->id }}">
                        <input type="hidden" name="price" value="{{ $bookShows->prix }}">
                        <button type="submit" class="btn bg-smt-tertiary font-weight-bold text-white px-5">
                            Acheter
                        </button>
                    </form>
                @else
                    <button type="button" class="btn bg-smt-tertiary font-weight-bold text-white px-5">
                        DEMARRER LA LECTURE
                    </button>
                @endif
            </div>
        </div>
    </div>
</div>
@include('app.layouts.footer')
