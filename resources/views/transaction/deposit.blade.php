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
                        <h3 class="card-title font-weight-bold text-uppercase">Gestion de transaction</h3>
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
                                        MONTANT
                                    </th>
                                    <th style="width: 20%" class="text-center">
                                        DATE ET HEURE DE DEPOT
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($deposit as $item)
                                <tbody>
                                    @if ($item->amount > 0)
                                        <tr>
                                            <td class="text-center">
                                                {{ $item->amounts->firstname }}
                                            </td>
                                            <td class="text-center">
                                                {{ $item->amounts->lastname }}
                                            </td>
                                            <td class="text-center">
                                                {{ $item->amount }} Fcfa
                                            </td>
                                            <td class="text-center">
                                                {{ date('d-M-Y', strtotime($item->updated_at)) }} à
                                                {{ date('H:i', strtotime($item->updated_at)) }}
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            @endforeach
                        </table>
                        {{$deposit->links()}}
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
