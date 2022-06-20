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
        <div class="offset-2"></div>
        <section class="content">
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
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title font-weight-bold text-uppercase">Catégories ( {{ count($categories) }})</h3>
                    <div class="card-tools d-flex justify-content-between">
                        <button type="button" class="btn btn-block btn-outline-success btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Ajouter une catégorie</button>
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
                                    NOM DE LA CATEGORIE
                                </th>
                                <th style="width: 20%" class="text-center">
                                    ACTION
                                </th>
                            </tr>
                        </thead>
                        @forelse($categories as $categorie)
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <a>
                                        {{ $categorie->categorie }}
                                    </a>
                                </td>
                                <td class="  d-flex justify-content-around ">
                                    <a href="{{ route('categories.edit',$categorie->id) }}">
                                        <button class="btn btn-info btn-sm " type="button">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Editer
                                        </button>
                                    </a>
                                    <form action="{{ route('categories.destroy',$categorie->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">
                                            <i class="fas fa-trash">
                                            </i>
                                            Supprimer
                                        </button>
                                        <script>
                                            function alerte(){
                                                alert('Voulez-vous vraiment retirer cette catégorie?')
                                            }
                                        </script>
                                    </form>
                                </td>
                                @empty
                                <div class="alert alert-warning col-md-12 col-xs-12" role="alert">
                                    <p class='font-weight-bolder text-center '>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                        Aucune Categorie disponible
                                    </p>
                                </div>
                            </tr>
                        </tbody>
                        @endforelse
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>

            <!-- modal  -->

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bolder" id="exampleModalLabel">Ajout de Catégories</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nom:</label>
                                    <input type="text" class="form-control" name="categorie" id="recipient-name" placeholder="Roman, developpement personnel, poesie">
                                    {!! $errors->first('categorie', '<small class="text-danger">:message</small>') !!}
                                </div>
                                <div class="form-group">
                                {{-- <label for="recipient-name" class="col-form-label">Icone:</label>
                                    <input type="file" name="icone" class="form-control-file" id="exampleFormControlFile1">
                                </div> --}}
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Valider</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
