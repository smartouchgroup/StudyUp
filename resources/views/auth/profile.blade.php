@extends('layouts.master')
@section('contenu')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto">
            <section class="content">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close ml-1" data-dismiss="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold text-uppercase">Profil</h3>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h5 class="mx-4 my-3">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                Nom :
                            </h5>
                            <h5 class="mx-4 my-4">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                Prénom (s) :
                            </h5>
                            <h5 class="mx-4 my-4">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                Email:
                            </h5>
                        </div>
                        <div class=" col-6 my-3 ">
                            <h5 class="ml-3">
                                {{ Auth::user()->firstname }}
                            </h5>
                            <h5 class="my-4 ml-3">
                                {{ Auth::user()->lastname }}
                            </h5>
                            <h5 class="my-4 ml-3">
                                {{ Auth::user()->email }}
                            </h5>
                        </div>
                    </div>
                    <form class="my-2 mx-2 row" action="{{ route('changeData') }}" method="post">
                        @csrf
                        <div class="form-group col-6 col-xs-12 ">
                            <label for="firstname">Nom</label>
                            <input type="text" class="form-control" required value="{{ Auth::user()->firstname }}"
                                name="firstname">
                            {!! $errors->first('firstname', '<small class="text-danger">:message</small>') !!}
                        </div>
                        <div class="form-group col-6 col-xs-12">
                            <label for="lastname">Prénom(s)</label>
                            <input type="text" class="form-control" required value="{{ Auth::user()->lastname }}"
                                name="lastname">
                            {!! $errors->first('lastname', '<small class="text-danger">:message</small>') !!}
                        </div>
                        <button type="submit" class="btn btn-primary ml-3">modifier</button>
                    </form>
                    <form class="my-2 mx-2 row" action="{{ route('changeEmail') }}" method="post">
                        @csrf
                        <div class="form-group col-6 col-xs-12 ">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->email }}"
                                aria-describedby="emailHelp" name="email">
                            {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                        </div>
                        <div class="form-group col-6 col-xs-12 ">
                            <label for="email">Confirmer </label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" name="email-confirm" placeholder="Veuillez confirmer le e-mail">
                            {!! $errors->first('email-confirm', '<small class="text-danger">:message</small>') !!}
                        </div>
                        <button type="submit" class="btn btn-primary ml-3">modifier</button>
                    </form>

                    <form class="my-2 mx-2 row" action="{{ route('changePassword') }}" method="post">
                        @csrf
                        <div class="form-group col-6 col-xs-12">
                            <label for="exampleInputPassword1">Mot de passe</label>
                            <input type="password" class="form-control" required name="password" id="exampleInputPassword1"
                                placeholder="Mot de passe">
                            {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                        </div>
                        <div class="form-group col-6 col-xs-12 ">
                            <label for="exampleInputPassword1">Confirmer</label>
                            <input type="password" class="form-control" required name="confirm_password"
                                id="exampleInputPassword1" placeholder="Veuiller confirmer Mot de passe">
                            {!! $errors->first('confirm_password', '<small class="text-danger">:message</small>') !!}
                        </div>
                        <button type="submit" class="btn btn-primary ml-3">Modifier</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection
