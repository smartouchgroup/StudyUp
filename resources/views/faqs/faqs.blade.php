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
                <h3 class="card-title">Ajout de faqs</h3>
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
            <form action="{{route('Faqs.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body container">
                    <div class="row">
                        <div class="col-lg-12 col-md-9 col-xs-12">
                            <div class="form-group">
                                <label>Titre du faq</label>
                                <input type="text" class="form-control" name="titre" placeholder="Entrer titre">
                                {!! $errors->first('titre', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group">
                                <label>Contenu du faqs</label>
                                <textarea type='text' class="form-control" name="contenu" id="Xy"></textarea>
                                {!! $errors->first('contenu', '<small class="text-danger">:message</small>') !!}
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Valider</button>
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
                            <th style="width: 40%" class="text-center">
                                TITRES
                            </th>
                           
                            <th style="width: 40%" class="text-center">
                                Contenu
                            </th>
                            <th style="width: 30%" class="text-center">
                                ACTIONS
                            </th>
                        </tr>
                    </thead>
                    @forelse($faqs as $faq)
                    <tbody>
                        <tr>
                            <td>
                                {{ $faq->id }}
                            </td>
                            <td class="text-center">                               
                                {{ $faq->titre }}                                
                            </td>                        
                            <td class="text-center">                               
                                {{ $faq->contenu }}                           
                            </td>
                            <td class="  d-flex justify-content-around my-4">
                                <a href="{{ route('Faqs.edit',$faq->id) }}">
                                    <button class="btn btn-info btn-sm " type="button">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Editer
                                    </button>
                                </a>
                                <form action="{{ route('Faqs.destroy',$faq->id) }}" method="post">
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
                            <div class="alert alert-warning col-md-12 col-xs-12" role="alert">
                                <p class='font-weight-bolder text-center '>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                    Aucun faq disponible
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