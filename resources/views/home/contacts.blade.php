@extends('layouts.layout')
@section('content')
<div class="text-center mb-5 ">
    <h1 class="display-4 font-weight-bold text-smt-tertiary mb-5">Nous contacter</h1>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block my-2">
        <button type="button" class="close ml-1" data-dismiss="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <div class="card fit-content mx-auto ">
        <div class="card-body  p-0 row ">
            <div class="fit-content d-block p-5 col-lg-6 col-md-6 col-xs-12">
                <h4 class="mb-5 font-weight-bold text-smt-tertiary">Nous envoyer un email</h4>
                <form action="{{ route('message.store') }}" method="post" class="contacts  ">
                    @csrf
                    <div class="form-group border rounded">
                        <input type="text" name="name" placeholder="Votre nom" required class="text-indent-3">
                    </div>
                    <div class="form-group border rounded">
                        <input type="email" name="email" placeholder="Votre e-mail" required class="text-indent-3">
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Votre message ..." class="text-indent-3 rounded border"></textarea>
                    </div>
                    <button type="submit" class="form-control mx-3 mt-3 bg-smt-secondary font-weight-bold text-white">Envoyer</button>
                </form>
            </div>
            <div class="bg-smt-primary p-5 text-white col-lg-6 col-md-6 col-xs-12">
                <h4 class="mb-5 font-weight-bold text-smt-tertiary text-white">Nous contacter autrement</h4>
                <div class="fit-content py-3 col-xs-12">
                    <span class="h3"><i class="fas fa-phone-alt"></i></span>
                    <a class="h5 ml-3 font-weight-bold text-white" href="tel:0022655026262">+226 55 02 62 62</a>
                </div>

                <div class="fit-content py-3 col-xs-12">
                    <span class="h3"><i class="fas fa-envelope"></i></span>
                    <a class="h5 ml-3 font-weight-bold text-white" href="mailto:smtgroup@gmail.com">smtgroup@gmail.com</a>
                </div>

                <div class="fit-content py-3 col-xs-12">
                    <span class="h3"><i class="fab fa-facebook-messenger"></i></span>
                    <a class="h5 ml-3 font-weight-bold text-white" href="#">me.smtgroup.facebook.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
