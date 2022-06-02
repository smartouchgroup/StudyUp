@extends('layouts.layout')
@section('content')
<div class="container">
    <div class=" ">
        <div class="text-center">
            <h2 class="display-4 font-weight-bold text-smt-tertiary">Aperçu de StudyUp</h2>
        </div>
        <P class="my-5 text-center letter_size text-smt-tertiary">
            Les dernières mises à jours et infomations sur StudyUp , les ,nouveaux livres ,les informations du campus ,
            les partenariats et les opportunités
        </P>
    </div>
</div>
<div class="container-fluid ">
    <div class="row  ">

        <div class="col-lg-7 mb-5">
            <div class="card">
                @foreach($articles as $article)
                <div class="fond text-center " style='background: {{$article->color}};'>
                    <img src="{{asset('image').'/'.$article->photo}}" class="mt-3" width="175px" height="87%" alt="...">
                </div>
                <div class="card-body  ">
                    <h5 class="card-title text-center text-smt-tertiary font-weight-bold ">{{ $article->titre }}</h5>
                    <p class="card-text text-center text-smt-tertiary">{{ $article->contenu }}</p>
                    <div class="bordure  d-flex  justify-content-end ">
                        <h6 class="my-2">Publié le {{ date('d-m-Y',strtotime($article->created_at ))}}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card " style="width: 100%">
                <div class="card-header ">
                    <h4 class="font-weight-bold text-smt-tertiary">Derniers Articles</h4>
                </div>
                <div class="card-body p-0">
                    @foreach($last_articles as $last_article)
                    <div class=" bordure_bottom row m-0">
                        <div class="fond_last text-center col-lg-3 col-md-3 p-0">
                            <img src="{{asset('image').'/'.$last_article->photo}}" width="100%" height="100%" alt="...">
                        </div>
                        <div class="size_titre col-9 p-0">
                            <p class="card-title text-justify text-smt-tertiary font-weight-bold mx-2 text-uppercase ">
                                {{ $last_article->titre }}</p>
                            <div class="    d-flex justify-content-end">
                                <a href="" class="text-smt-secondary">Lire l'article</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-5">
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <h4 class="font-weight-bold text-smt-tertiary">Derniers Articles</h4>
                </div>
                @foreach($last_articles as $last_article)
                <ul class="list-group list-group-flush row m-0">
                    <li class="list-group-item d-flex p-0">
                        <div class=" text-center col-3 p-0">
                            <img src="{{asset('image').'/'.$last_article->photo}}" width="100%" height="145px" alt="...">
                        </div>
                        <div class=" size_titre col-9 p-0">
                        <p class="card-title text-justify text-smt-tertiary font-weight-bold mx-2 text-uppercase ">{{ $last_article->titre }}</p>
                        <div class=" margin_top ml-3  d-flex justify-content-end">
                            <a href="" class="text-smt-secondary">Lire l'article</a>
                        </div>
                    </div>
                    </li>
                </ul>
                @endforeach
            </div>
        </div> -->

    </div>
</div>

@endsection