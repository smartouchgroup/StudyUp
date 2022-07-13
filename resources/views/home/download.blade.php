@extends('layouts.layout')
@section('content')
    <section id="download" class="faq">
        <div class="container">
            <h5 class="font-weight-bold text-center text-white mb-2">
                Pour une meilleure expérience utilisateur, nous vous recommendons de télécharger la version mobile de StudyUp
            </h5>
            <h2 class="text-center mt-2 font-bold">
                Scannez le code Qr maintenant !!!
            </h2>
            <div class="text-center my-3">
                <span class="mx-5">
                    <img src="{{ asset('image/qr-code_appstore.png') }}" alt="" width="125px" height="125px">
                </span>

                <span class="mr-2">
                    <img src="{{ asset('image/qr-code_playstore.png') }}" alt="" width="125px" height="125px">
                </span>
            </div>

        </div>
    </section>
@endsection
