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
        <section class="content card p-3">
            <form method="post" action="{{ route('categories.update',$categories->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label>Nom:</label>
                    <input type="text" value="{{ $categories->categorie }}" name="categorie" class="form-control">
                    <input type="hidden" name="categorieId" value="{{ $categories->id }}">
                    {!! $errors->first('categorie', '<small class="text-danger">:message</small>') !!}
                </div>
               <a href="{{ route('categories.index') }}">
                <button type="submit" class="btn btn-primary">Retour</button>
               </a>
                <button type="submit" class="btn btn-primary">Modifier la catégorie</button>
            </form>
        </section>
    </div>
</div>
@endsection
