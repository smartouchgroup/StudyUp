
@extends('layouts.auth')

@section('content')

<div class="fit-content">
    <div class="flex flex-column text-center">
        <img src="{{ asset('dist/img/logo.png') }}" alt="smarttouch_logo" class="w-75 lp_logo">
        <p class="display-4 font-weight-bold">StudyUp</p>
        <p class="line-height-10"><span class="lead">by</span><span class="font-weight-bold"> SMART TOUCH GROUP</span></p>
    </div>
</div>
<div class="fit-content">
    <div class="fit-content p-md-5 p-3 bg-white rounded border shadow-sm login-card">
        @if($message = Session::get('warning'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <form action="{{ route('login.auth') }}" method="post" class="fit-content login text-center mx-auto">
            @csrf
            <div class="fit-content c mb-4 border rounded">
                <input type="email" name="email" placeholder="Adresse e-mail" required class="border-0 text-indent-3">
            </div>
            <div class="d-flex justify-content-between c align-items-center my-4 border rounded">
                <input type="password" name="password" placeholder="Mot de passe" required class="login_password border-0 text-indent-3">
                <!-- <a href="" class="input-group-text text-decoration-none border-0"><i class="far fa-eye-slash"></i></a> -->
            </div>

            <button type="submit" class="border-0 p-1 font-weight-bold mx-auto word-space-1">Se connecter</button>
            <div class="my-4 mx-auto ">
                <a href="{{ route('forget.password.get') }}">Mot de passe oublié?</a>
            </div>
        </form>
        <div class="text-center mt-4">
            <a href="/register" class="link-btn font-weight-bold word-space-1">Créer un compte</a>
        </div>
    </div>
</div>
@endsection
