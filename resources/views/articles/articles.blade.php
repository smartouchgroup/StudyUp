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
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title">Ajout d'articles</h3>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close ml-1" data-dismiss="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-xs-12">
                            <div class="form-group">
                                <label>Titre de l'article</label>
                                <input type="text" class="form-control" name="titre" placeholder="Entrer titre">
                                {!! $errors->first('titre', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group">

                                <label>Fond:</label>

                                <div class="input-group my-colorpicker2">
                                    <input type="color" name="color" class="form-control">
                                    {!! $errors->first('color', '<small class="text-danger">:message</small>') !!}
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-square"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Contenu de l'article</label>
                                <textarea type='text' class="form-control" name="contenu" id="Xy"></textarea>
                               
                                {!! $errors->first('contenu', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-check form-switch col-12">
                                <input class="form-check-input" type="checkbox" name="last_article">
                                <label class="form-check-label font-weight-bolder" >selectionner comme derniers articles</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12 my-5">
                            <div class="file-upload">
                                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add
                                    Image</button>
                                <div class="image-upload-wrap">
                                    <input class="file-upload-input" type='file' name="photo" onchange="readURL(this);" accept="image/*" />

                                    <div class="drag-text">
                                        <h3>Ajouter une Photo</h3>
                                    </div>
                                    {!! $errors->first('photo', '<small class="text-danger">:message</small>') !!}
                                </div>
                                <div class="file-upload-content">
                                    <img class="file-upload-image" src="#" alt="your image" />
                                    <div class="image-title-wrap">
                                        <button type="button" onclick="removeUpload()" class="remove-image">Retirer <span class="image-title">Uploaded Image</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Publier</button>
                </div>
            </form>
        </div>

        <div class="card my-5">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-uppercase">Liste des articles</h3>
                <div class="card-tools d-flex justify-content-between">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                N°
                            </th>
                            <th style="width: 20%" class="text-center">
                                TITRES
                            </th>
                            <th style="width: 30%" class="text-center">
                                PHOTOS
                            </th>
                            <th style="width: 30%" class="text-center">
                                Contenu
                            </th>
                            <th style="width: 30%" class="text-center">
                                Fond
                            </th>
                            <th style="width: 20%" class="text-center">
                                ACTIONS
                            </th>
                        </tr>
                    </thead>
                    @forelse($articles as $article)
                    <tbody>
                        <tr>
                            <td>
                                {{ $article->id }}
                            </td>
                            <td class="text-center">
                                {{ $article->titre }}
                            </td>
                            <td class="text-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="articles" class="cercle" src="{{asset('image').'/'.$article->photo}}">
                                        <style>
                                            .cercle {
                                                width: 75px;
                                                height: 75px;
                                                border-radius: 50%;
                                            }
                                        </style>
                                    </li>
                                </ul>
                            </td>
                            <td class="text-center">
                                {{ $article->contenu }}
                            </td>
                            <td class="text-center">
                                <input type="color" value="{{$article->color}}" class="form-control my-4">
                            </td>
                            <td class="  d-flex justify-content-around my-4">
                                <a href="{{ route('articles.edit',$article->id) }}">
                                    <button class="btn btn-info btn-sm " type="button">
                                        Editer
                                    </button>
                                </a>
                                <form action="{{ route('articles.destroy',$article->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm mx-4" onclick="alerte()" type="submit">
                                        Supprimer
                                    </button>
                                    <!-- <script>
                                            function alerte(){
                                                alert('Voulez-vous vraiment retirer cette catégorie?')
                                            }
                                        </script> -->
                                </form>
                            </td>
                            @empty
                            <div class="alert alert-warning col-md-12 col-xs-12" role="alert">
                                <p class='font-weight-bolder text-center '>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                    Aucun Article disponible
                                </p>
                            </div>
                        </tr>
                    </tbody>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>


@endsection