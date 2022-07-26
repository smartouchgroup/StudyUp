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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold text-uppercase">Achat de livre</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects table-responsive">
                            <thead>
                                <tr>
                                    <th style="width: 20%" class="text-center">
                                        NOM
                                    </th>
                                    <th style="width: 20%" class="text-center">
                                        PRENOM(S)
                                    </th>
                                    <th style="width: 20%" class="text-center">
                                        LIVRE ACHETES
                                    </th>
                                    <th style="width: 20%" class="text-center">
                                        MONTANT
                                    </th>
                                    <th style="width: 20%" class="text-center">
                                        DATE ET HEURE D'ACHAT
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($buys as $item)
                                <tbody>
                                        <tr>
                                            <td class="text-center">
                                                {{ $item->user->firstname }}
                                            </td>
                                            <td class="text-center">
                                                {{ $item->user->lastname }}
                                            </td>
                                            <td class="text-center">
                                                {{ $item->books->titre }}
                                            </td>
                                            <td class="text-center">
                                                {{ $item->price }} Fcfa
                                            </td>
                                            <td class="text-center">
                                                {{ date('d-M-Y', strtotime($item->updated_at)) }} à
                                                {{ date('H:i', strtotime($item->updated_at)) }}
                                            </td>
                                        </tr>
                                </tbody>
                            @endforeach
                        </table>
                        {{$buys->links()}}
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
