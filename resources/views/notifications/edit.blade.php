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
            <form method="post" action="{{ route('notifications.update',$notifications->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label>Nom:</label>
                    <input type="text" value="{{ $notifications->message }}" name="message" class="form-control">
                    <input type="hidden" name="notificationId" value="{{ $notifications->id }}">
                    {!! $errors->first('message', '<small class="text-danger">:message</small>') !!}
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">URL/lien</label>
                    <input type="text" class="form-control" value="{{ $notifications->url }}" name="url" id="recipient-name">
                    {!! $errors->first('URL/lien', '<small class="text-danger">:message</small>') !!}
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </section>
    </div>
</div>
@endsection