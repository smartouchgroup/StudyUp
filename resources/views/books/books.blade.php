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
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bolder">Ajouter un livre </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="inputName">Titre du livre</label>
                                        <input type="text" name="titre" id="inputName" class="form-control" placeholder='Veuillez entre le titre du livre' required'>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStatus">Catégories</label>
                                        <select id="inputStatus" name="categorie_id" class="form-control custom-select">
                                            @foreach($categories as $categorie)
                                            <option selected value="{{ $categorie->id }}">{{ $categorie->categorie }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStatus">Editeur</label>
                                        <select id="inputStatus" name="editeur_id" class="form-control custom-select">
                                            @foreach($editors as $editor)
                                            <option selected value="{{ $editor->id }}">{{ $editor->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStatus">langue</label>
                                        <select id="inputStatus" name="langue_id" class="form-control custom-select">
                                            @foreach($languages as $language)
                                            <option selected value="{{ $language->id }}">{{ $language->langue}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Description /Resumé</label>
                                        <textarea id="inputDescription" name="description" class="form-control"
                                            rows="10"></textarea>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputName">Nombre de pages</label>
                                    <input type="number" name="page" id="inputName" class="form-control" placeholder="Veuillez entrer le nombre de page du livre">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Auteur</label>
                                    <select id="inputStatus" name="auteur_id" class="form-control custom-select">
                                        @foreach($authors as $author)
                                        <option selected value="{{ $author->id }}">{{ $author->nom}}
                                            {{ $author->prenom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Pays</label>
                                    <select id="inputStatus" name="pays_id" class="form-control custom-select">
                                        @foreach($countries as $countrie)
                                        <option selected value="{{ $countrie->id }}">{{ $countrie->pays}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Prix</label>
                                    <input type="number" name="prix" id="inputClientCompany" class="form-control" placeholder="Veuillez entrer le prix du livre">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="file-upload">
                                            <button class="file-upload-btn" type="button"
                                                onclick="$('.file-upload-input').trigger( 'click' )">Add
                                                Image</button>
                                            <div class="image-upload-wrap">
                                                <input class="file-upload-input" type='file' name="photo"
                                                    onchange="readURL(this);" accept="image/*" />

                                                <div class="drag-text">
                                                    <h3>Ajouter une Photo</h3>
                                                </div>
                                                {!! $errors->first('photo', '<small
                                                    class="text-danger">:message</small>') !!}
                                            </div>
                                            <div class="file-upload-content">
                                                <img class="file-upload-image" src="#" alt="your image" />
                                                <div class="image-title-wrap">
                                                    <button type="button" onclick="removeUpload()"
                                                        class="remove-image">Retirer
                                                        <span class="image-title">Uploaded Image</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <div class="file-upload">
                                        <button class="file-upload-btn" type="button"
                                            onclick="$('.file-upload-input').trigger( 'click' )">Add
                                            Image</button>
                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' name="photo"
                                                onchange="readURL(this);" accept="image/*" />

                                            <div class="drag-text">
                                                <h3>Ajouter une Photo</h3>
                                            </div>
                                            {!! $errors->first('photo', '<small class="text-danger">:message</small>') !!}
                                        </div>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="#" alt="your image" />
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Retirer
                                                    <span class="image-title">Uploaded Image</span>
                                                </button>
                                            </div>
                                        </div>
                                        </div> -->
                                        <div class="mt-4 bg-secondary text-center">
                                            <label for="">Ajouter un document</label>
                                        </div>
                                        <div class="card">
                                            <input class="input bg-white-50" type="file" name="document"  accept="pdf">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Publier </button>
                            </form>
                        </div>
                        <div class="card my-5">
                            <div class="card-header">
                                <h3 class="card-title font-weight-bold text-uppercase">Liste des livres ( {{ count($books) }} )</h3>
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
                                            <th style="width: 20%">
                                                NOM DU LIVRE
                                            </th>
                                            <th style="width: 20%" class="text-center">
                                                AUTEURS
                                            </th>
                                            <th style="width: 30%" class="text-center">
                                                LANGUES
                                            </th>
                                            <th style="width: 30%" class="text-center">
                                                NOMBRE DE PAGE
                                            </th>
                                            <th style="width: 30%" class="text-center">
                                                PRIX
                                            </th>
                                            <th style="width: 20%" class="text-center">
                                                ACTIONS
                                            </th>
                                        </tr>
                                    </thead>
                                        @forelse ($books as $book)
                                    <tbody>
                                        <tr>
                                            <td>
                                            {{ $book->titre }}
                                            </td>
                                            <td class="text-center">
                                            {{ $book->author->nom }}
                                            </td>
                                            <td class="text-center">
                                            {{$book->langues->langue}}
                                            </td>
                                            <td class="text-center">
                                            {{ $book->page }}
                                            </td>
                                            <td class="text-center">
                                                @if ($book->prix == null)
                                                    Gratuit
                                                @else
                                                {{ $book->prix }} Fcfa
                                                @endif
                                            </td>
                                            <td class="  d-flex justify-content-around">
                                                <a href="{{ route('books.edit',$book->id) }}">
                                                    <button class="btn btn-info btn-sm " type="button">
                                                        Editer
                                                    </button>
                                                </a>
                                                <form action="{{ route('books.destroy',$book->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm mx-4" type="submit">
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </td>
                                            @empty
                                            <div class="alert alert-warning col-md-12 col-xs-12" role="alert">
                                                <p class='font-weight-bolder text-center '>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                    </svg>
                                                    Aucun livre  disponible
                                                </p>
                                            </div>
                                        </tr>
                                    </tbody>
                                    @endforelse
                                </table>
                                {{$books->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
