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
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title font-weight-bold text-uppercase">Language ( {{count($languages)}} )</h3>
                    <div class="card-tools d-flex justify-content-between">
                        <button type="button" class="btn btn-block btn-outline-success btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Ajouter une langue</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Choisir une langue</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('language.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Langue:</label>
                                                <select class="option form-control" name="langue" placeholder="Choisir votre langue">
                                                    <option value="">Choisissez la langue</option>
                                                    <option value="Française">Française </option>
                                                    <option value="Anglaise">Anglaise </option>
                                                    <option value="Anglaise">Allemand</option>
                                                    <option value="Arabe">Arabe</option>
                                                    <option value="Espagnole">Espagnole</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Icone:</label>
                                                <input type="file" name="icone" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Retour
                                                </button>
                                                <button type="submit" class="btn btn-primary">Valider
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 20%" class="text-center">
                                    NOM
                                </th>
                                <th style="width: 30%" class="text-center">
                                    ICONE
                                </th>
                                <th style="width: 20%" class="text-center">
                                    OPTION
                                </th>
                            </tr>
                        </thead>
                        @forelse($languages as $language)
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <a>
                                        {{ $language->langue }}
                                    </a>
                                    <br />
                                </td>
                                <td class="text-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="language" class="cercle" src="{{asset('image').'/'.$language->icone}}">
                                            <style>
                                                .cercle {
                                                    width: 80px;
                                                    height: 80px;
                                                    border-radius: 50%;
                                                }
                                            </style>
                                        </li>
                                    </ul>
                                </td>
                                <td class="  d-flex justify-content-around ">
                                    <a href="{{ route('language.edit',$language->id) }}">
                                        <button class="btn btn-info btn-sm " type="button">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Editer
                                        </button>
                                    </a>
                                    <form action="{{ route('language.destroy',$language->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="alerte()" type="submit">
                                            <i class="fas fa-trash">
                                            </i>
                                            Supprimer
                                        </button>
                                    </form>
                                </td>
                                @empty
                                <div class="alert alert-danger col-md-12 col-xs-12" role="alert">
                                    <p class='font-weight-bolder text-center '>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill " viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                        Aucune langue disponible
                                    </p>
                                </div>
                            </tr>
                        </tbody>
                        @endforelse
                    </table>
                </div>
        </section>
    </div>
</div>
@endsection
