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
    <div class="container">
        <section class="content">
            <form method="post" action="{{ route('authors.update',$auteurs->id) }}" >
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label>Nom:</label>
                    <input type="text" value="{{ $auteurs->nom }}" name="nom" class="form-control">
                    {!! $errors->first('nom', '<small class="text-danger">:message</small>') !!}
                </div>
                <div class="form-group">
                    <label>Prenom(s):</label>
                    <input type="text" value="{{ $auteurs->prenom }}" name="prenom" class="form-control">
                    {!! $errors->first('prenom', '<small class="text-danger">:message</small>') !!}
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </section>
    </div>
</div>
@endsection
