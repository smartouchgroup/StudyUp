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
            <form method="post" action="{{ route('editors.update', $editeurs->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label>Nom:</label>
                    <input type="text" value="{{ $editeurs->nom}}" name="nom" class="form-control">
                    <input type="hidden" name="editorId" value="{{ $editeurs->id }}">
                    {!! $errors->first('nom', '<small class="text-danger">:message</small>') !!}
                </div>
                <div class="form-group">
                <label>Icone:</label>
                    <input type="file" value="{{ $editeurs->icone }}" class="form-control-file" name="icone" id="exampleFormControlFile1">
                    <style>
                        .cercle {
                            width: 75px;
                            height: 75px;
                            border-radius: 50%;
                        }
                    </style>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </section>
    </div>
</div>
@endsection