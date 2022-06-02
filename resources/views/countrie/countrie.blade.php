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
                    <h3 class="card-title font-weight-bold text-uppercase">Countries ({{count($countries)}})</h3>
                    <div class="card-tools d-flex justify-content-between">
                        <button type="button" class="btn btn-block btn-outline-success btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Ajouter un pays</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Choisir un pays</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{route('countrie.store')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Pays:</label>
                                                <select class="option form-control" name="pays" placeholder="Choisir votre pays">
                                                    <option value="Burkina_Faso" selected="selected">Burkina_Faso
                                                    </option>
                                                    <option value="Afghanistan">Afghanistan </option>
                                                    <option value="Afrique_Centrale">Afrique_Centrale </option>
                                                    <option value="Afrique_du_sud">Afrique_du_Sud </option>
                                                    <option value="Albanie">Albanie </option>
                                                    <option value="Algerie">Algerie </option>
                                                    <option value="Allemagne">Allemagne </option>
                                                    <option value="Angleterre">Angleterre</option>
                                                    <option value="Andorre">Andorre </option>
                                                    <option value="Angola">Angola </option>
                                                    <option value="Anguilla">Anguilla </option>
                                                    <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                                    <option value="Argentine">Argentine </option>
                                                    <option value="Armenie">Armenie </option>
                                                    <option value="Australie">Australie </option>
                                                    <option value="Autriche">Autriche </option>
                                                    <option value="Azerbaidjan">Azerbaidjan </option>

                                                    <option value="Bahamas">Bahamas </option>
                                                    <option value="Bangladesh">Bangladesh </option>
                                                    <option value="Barbade">Barbade </option>
                                                    <option value="Bahrein">Bahrein </option>
                                                    <option value="Belgique">Belgique </option>
                                                    <option value="Belize">Belize </option>
                                                    <option value="Benin">Benin </option>
                                                    <option value="Bermudes">Bermudes </option>
                                                    <option value="Bielorussie">Bielorussie </option>
                                                    <option value="Bolivie">Bolivie </option>
                                                    <option value="Botswana">Botswana </option>
                                                    <option value="Bhoutan">Bhoutan </option>
                                                    <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                                    <option value="Bresil">Bresil </option>
                                                    <option value="Brunei">Brunei </option>
                                                    <option value="Bulgarie">Bulgarie </option>
                                                    <option value="Burundi">Burundi </option>

                                                    <option value="Caiman">Caiman </option>
                                                    <option value="Cambodge">Cambodge </option>
                                                    <option value="Cameroun">Cameroun </option>
                                                    <option value="Canada">Canada </option>
                                                    <option value="Canaries">Canaries </option>
                                                    <option value="Cap_vert">Cap_Vert </option>
                                                    <option value="Chili">Chili </option>
                                                    <option value="Chine">Chine </option>
                                                    <option value="Chypre">Chypre </option>
                                                    <option value="Colombie">Colombie </option>
                                                    <option value="Comores">Colombie </option>
                                                    <option value="Congo">Congo </option>
                                                    <option value="Congo_democratique">Congo_democratique </option>
                                                    <option value="Cook">Cook </option>
                                                    <option value="Coree_du_Nord">Coree_du_Nord </option>
                                                    <option value="Coree_du_Sud">Coree_du_Sud </option>
                                                    <option value="Costa_Rica">Costa_Rica </option>
                                                    <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                                                    <option value="Croatie">Croatie </option>
                                                    <option value="Cuba">Cuba </option>

                                                    <option value="Danemark">Danemark </option>
                                                    <option value="Djibouti">Djibouti </option>
                                                    <option value="Dominique">Dominique </option>

                                                    <option value="Egypte">Egypte </option>
                                                    <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                                    <option value="Equateur">Equateur </option>
                                                    <option value="Erythree">Erythree </option>
                                                    <option value="Espagne">Espagne </option>
                                                    <option value="Estonie">Estonie </option>
                                                    <option value="Etats_Unis">Etats_Unis </option>
                                                    <option value="Ethiopie">Ethiopie </option>

                                                    <option value="Falkland">Falkland </option>
                                                    <option value="Feroe">Feroe </option>
                                                    <option value="Fidji">Fidji </option>
                                                    <option value="Finlande">Finlande </option>
                                                    <option value="France">France </option>

                                                    <option value="Gabon">Gabon </option>
                                                    <option value="Gambie">Gambie </option>
                                                    <option value="Georgie">Georgie </option>
                                                    <option value="Ghana">Ghana </option>
                                                    <option value="Gibraltar">Gibraltar </option>
                                                    <option value="Grece">Grece </option>
                                                    <option value="Grenade">Grenade </option>
                                                    <option value="Groenland">Groenland </option>
                                                    <option value="Guadeloupe">Guadeloupe </option>
                                                    <option value="Guam">Guam </option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernesey">Guernesey </option>
                                                    <option value="Guinee">Guinee </option>
                                                    <option value="Guinee_Bissau">Guinee_Bissau </option>
                                                    <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                                    <option value="Guyana">Guyana </option>
                                                    <option value="Guyane_Francaise ">Guyane_Francaise </option>

                                                    <option value="Haiti">Haiti </option>
                                                    <option value="Hawaii">Hawaii </option>
                                                    <option value="Honduras">Honduras </option>
                                                    <option value="Hong_Kong">Hong_Kong </option>
                                                    <option value="Hongrie">Hongrie </option>

                                                    <option value="Inde">Inde </option>
                                                    <option value="Indonesie">Indonesie </option>
                                                    <option value="Iran">Iran </option>
                                                    <option value="Iraq">Iraq </option>
                                                    <option value="Irlande">Irlande </option>
                                                    <option value="Islande">Islande </option>
                                                    <option value="Israel">Israel </option>
                                                    <option value="Italie">italie </option>

                                                    <option value="Jamaique">Jamaique </option>
                                                    <option value="Jan Mayen">Jan Mayen </option>
                                                    <option value="Japon">Japon </option>
                                                    <option value="Jersey">Jersey </option>
                                                    <option value="Jordanie">Jordanie </option>

                                                    <option value="Kazakhstan">Kazakhstan </option>
                                                    <option value="Kenya">Kenya </option>
                                                    <option value="Kirghizstan">Kirghizistan </option>
                                                    <option value="Kiribati">Kiribati </option>
                                                    <option value="Koweit">Koweit </option>

                                                    <option value="Laos">Laos </option>
                                                    <option value="Lesotho">Lesotho </option>
                                                    <option value="Lettonie">Lettonie </option>
                                                    <option value="Liban">Liban </option>
                                                    <option value="Liberia">Liberia </option>
                                                    <option value="Liechtenstein">Liechtenstein </option>
                                                    <option value="Lituanie">Lituanie </option>
                                                    <option value="Luxembourg">Luxembourg </option>
                                                    <option value="Lybie">Lybie </option>

                                                    <option value="Macao">Macao </option>
                                                    <option value="Macedoine">Macedoine </option>
                                                    <option value="Madagascar">Madagascar </option>
                                                    <option value="Madère">Madère </option>
                                                    <option value="Malaisie">Malaisie </option>
                                                    <option value="Malawi">Malawi </option>
                                                    <option value="Maldives">Maldives </option>
                                                    <option value="Mali">Mali </option>
                                                    <option value="Malte">Malte </option>
                                                    <option value="Man">Man </option>
                                                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                                                    <option value="Maroc">Maroc </option>
                                                    <option value="Marshall">Marshall </option>
                                                    <option value="Martinique">Martinique </option>
                                                    <option value="Maurice">Maurice </option>
                                                    <option value="Mauritanie">Mauritanie </option>
                                                    <option value="Mayotte">Mayotte </option>
                                                    <option value="Mexique">Mexique </option>
                                                    <option value="Micronesie">Micronesie </option>
                                                    <option value="Midway">Midway </option>
                                                    <option value="Moldavie">Moldavie </option>
                                                    <option value="Monaco">Monaco </option>
                                                    <option value="Mongolie">Mongolie </option>
                                                    <option value="Montserrat">Montserrat </option>
                                                    <option value="Mozambique">Mozambique </option>

                                                    <option value="Namibie">Namibie </option>
                                                    <option value="Nauru">Nauru </option>
                                                    <option value="Nepal">Nepal </option>
                                                    <option value="Nicaragua">Nicaragua </option>
                                                    <option value="Niger">Niger </option>
                                                    <option value="Nigeria">Nigeria </option>
                                                    <option value="Niue">Niue </option>
                                                    <option value="Norfolk">Norfolk </option>
                                                    <option value="Norvege">Norvege </option>
                                                    <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                                    <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                                                    <option value="Oman">Oman </option>
                                                    <option value="Ouganda">Ouganda </option>
                                                    <option value="Ouzbekistan">Ouzbekistan </option>

                                                    <option value="Pakistan">Pakistan </option>
                                                    <option value="Palau">Palau </option>
                                                    <option value="Palestine">Palestine </option>
                                                    <option value="Panama">Panama </option>
                                                    <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee
                                                    </option>
                                                    <option value="Paraguay">Paraguay </option>
                                                    <option value="Pays_Bas">Pays_Bas </option>
                                                    <option value="Perou">Perou </option>
                                                    <option value="Philippines">Philippines </option>
                                                    <option value="Pologne">Pologne </option>
                                                    <option value="Polynesie">Polynesie </option>
                                                    <option value="Porto_Rico">Porto_Rico </option>
                                                    <option value="Portugal">Portugal </option>

                                                    <option value="Qatar">Qatar </option>

                                                    <option value="Republique_Dominicaine">Republique_Dominicaine
                                                    </option>
                                                    <option value="Republique_Tcheque">Republique_Tcheque </option>
                                                    <option value="Reunion">Reunion </option>
                                                    <option value="Roumanie">Roumanie </option>
                                                    <option value="Royaume_Uni">Royaume_Uni </option>
                                                    <option value="Russie">Russie </option>
                                                    <option value="Rwanda">Rwanda </option>

                                                    <option value="Sahara Occidental">Sahara Occidental </option>
                                                    <option value="Sainte_Lucie">Sainte_Lucie </option>
                                                    <option value="Saint_Marin">Saint_Marin </option>
                                                    <option value="Salomon">Salomon </option>
                                                    <option value="Salvador">Salvador </option>
                                                    <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                                    <option value="Samoa_Americaine">Samoa_Americaine </option>
                                                    <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                                                    <option value="Senegal">Senegal </option>
                                                    <option value="Seychelles">Seychelles </option>
                                                    <option value="Sierra Leone">Sierra Leone </option>
                                                    <option value="Singapour">Singapour </option>
                                                    <option value="Slovaquie">Slovaquie </option>
                                                    <option value="Slovenie">Slovenie</option>
                                                    <option value="Somalie">Somalie </option>
                                                    <option value="Soudan">Soudan </option>
                                                    <option value="Sri_Lanka">Sri_Lanka </option>
                                                    <option value="Suede">Suede </option>
                                                    <option value="Suisse">Suisse </option>
                                                    <option value="Surinam">Surinam </option>
                                                    <option value="Swaziland">Swaziland </option>
                                                    <option value="Syrie">Syrie </option>

                                                    <option value="Tadjikistan">Tadjikistan </option>
                                                    <option value="Taiwan">Taiwan </option>
                                                    <option value="Tonga">Tonga </option>
                                                    <option value="Tanzanie">Tanzanie </option>
                                                    <option value="Tchad">Tchad </option>
                                                    <option value="Thailande">Thailande </option>
                                                    <option value="Tibet">Tibet </option>
                                                    <option value="Timor_Oriental">Timor_Oriental </option>
                                                    <option value="Togo">Togo </option>
                                                    <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                                    <option value="Tristan da cunha">Tristan de cuncha </option>
                                                    <option value="Tunisie">Tunisie </option>
                                                    <option value="Turkmenistan">Turmenistan </option>
                                                    <option value="Turquie">Turquie </option>

                                                    <option value="Ukraine">Ukraine </option>
                                                    <option value="Uruguay">Uruguay </option>

                                                    <option value="Vanuatu">Vanuatu </option>
                                                    <option value="Vatican">Vatican </option>
                                                    <option value="Venezuela">Venezuela </option>
                                                    <option value="Vierges_Americaines">Vierges_Americaines </option>
                                                    <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                                    <option value="Vietnam">Vietnam </option>

                                                    <option value="Wake">Wake </option>
                                                    <option value="Wallis et Futuma">Wallis et Futuma </option>

                                                    <option value="Yemen">Yemen </option>
                                                    <option value="Yougoslavie">Yougoslavie </option>

                                                    <option value="Zambie">Zambie </option>
                                                    <option value="Zimbabwe">Zimbabwe </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Icone:</label>
                                                <input type="file" name="icone" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                            <div class="modal-footer">
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
                                    NOM DU PAYS
                                </th>
                                <th style="width: 30%" class="text-center">
                                    ICONE
                                </th>
                                <th style="width: 20%" class="text-center">
                                    OPTION
                                </th>
                            </tr>
                        </thead>
                        @forelse($countries as $countrie)
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <a>
                                        {{ $countrie->pays }}
                                    </a>
                                    <br />

                                </td>
                                <td class="text-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="pays" class="cercle" src="{{asset('image').'/'.$countrie->icone}}">
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
                                    <a href="{{ route('countrie.edit',$countrie->id) }}">
                                        <button class="btn btn-info btn-sm " type="button">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Editer
                                        </button>
                                    </a>
                                    <form action="{{ route('countrie.destroy',$countrie->id) }}" method="post">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                        Aucun pays disponible
                                    </p>
                                </div>
                            </tr>
                        </tbody>
                        @endforelse
                    </table>
                    {{ $countries->links() }}
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
