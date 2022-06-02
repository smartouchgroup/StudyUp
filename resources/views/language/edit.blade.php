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
            <form method="post" action="{{ route('language.update',$languages->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label>Nom:</label>
                    <input type="hidden" name="langueId" value="{{ $languages->id }}">
                    <select type="text" value="{{ $languages->langue }}" name="langue" class="form-control"
                        placeholder="Choisir votre langue">
                        <option value="">Choisissez la langue</option>
                        <option value="Française">Française </option>
                        <option value="Anglaise">Anglaise </option>
                        <option value="Anglaise">Allemand </option>
                        <option value="Arabe">Arabe</option>
                        <option value="Espagnole">Espagnole </option>
                    </select>
                    {!! $errors->first('language', '<small class="text-danger">:message</small>') !!}
                </div>
                <div class="form-group">
                    <input type="file" value="{{ $languages->icone }}" class="form-control-file" name="icone"
                        id="exampleFormControlFile1">
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </section>
    </div>
</div>
@endsection