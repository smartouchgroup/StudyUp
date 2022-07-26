<title>A propos | StudyUp</title>
@extends('layouts.layout')
@section('content')
<div class="container">
    <div class=" ">
        <div class="text-center">
            <h2 class="display-4 font-weight-bold text-smt-tertiary">A propos de StudyUp</h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 mt-5 text-center">
            <img src="{{asset('dist/img/logo.png')}}" alt="logo_png" width="275px" class="h-auto">
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 top">
        <p class="p-0 text-smt-tertiary  line font-weight-bold">StudyUp est une plateforme numérique ( essentiellement mobile) composée d'une large  gamme de collection  de documents numériques ou audios (c'est-à-dire numérisés ) accessibles à distance (en particulier via Playstore ou App store), proposant différentes modalités d'accès à l'information aux publics. Les documents sont constitués par catégories ou domaines (développement personel, littérature, roman, livre pédagogique etc ...)</a></p>
        </div>
    </div>
</div>
@endsection
