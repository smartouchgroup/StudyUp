<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title> StudyUp | Politique de confidentialité </title>


    <link href="{{ asset('boxicons/css/boxicons.min.css') }}"rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/introduction.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.header')
    <main>
        <div class="container">
            <div class="row m-auto d-block">
                <div class="text-center">
                    <h2 class="display-4 font-weight-bold text-smt-tertiary mb-2">Politique de confidentialité</h2>
                </div>

                <p class="my-2">
                    Qui sommes-nous ?
                    L’adresse de notre site Web est : <a href="https://ww.StudyUp.com"
                        class="font-weight-bold font-size-20">WWW.StudyUp.com</a>
                </p>
                <ul>
                    <li>
                        <h4 class="font-weight-bold mb-2">
                            1- Objet
                        </h4>
                        Les données produites par les utilisateurs lors de l’utilisation de notre site lui sont faites
                        dans le but de leur permettre d’accéder et de communiquer avec le site, et pour fournir les
                        services qu’ils demandent par l’intermédiaire de leur compte sur le site. <br>
                        L’utilisation de notre site est synonyme de consentement a la présente politique de
                        confidentialité.
                    </li>
                    <li class="my-2">
                        <h4 class="font-weight-bold mb-2">
                            2- Collections des données
                        </h4>
                        Nous recueillons des informations auprès de vous lorsque vous vous inscrivez sur notre site,
                        vous abonnez à une newsletter, répondez à une enquête, remplissez un formulaire, laissez un
                        commentaire ou entrez des informations sur notre site. Les informations collectées peuvent être
                        collectées de façon indirecte.
                    </li>
                    <li class="my-2">
                        <h4 class="font-weight-bold mb-2">
                            3- Utilisation des données personnelles collectées <br>
                        </h4>
                        a- Utilisations de données privées
                        Nous sommes propriétaires de vos données. Pour ce faire, nous ne vendons, n’échangeons ou ne
                        transférons d’aucune autre manière à des tiers vos informations personnellement identifiables,
                        sauf si nous en informons les utilisateurs à l’avance. Cependant cela ne concerne pas les
                        partenaires d’hébergement de sites Web et les autres parties qui nous aident à exploiter notre
                        site Web, à mener nos activités ou à servir nos utilisateurs, tant que ces parties conviennent
                        de garder ces informations confidentielles. Aussi vos informations peuvent être utilisées pour :
                        <ul>
                            <li>Améliorer notre site web</li>
                            <li>Améliorer le service client et vos besoins de prise en charge</li>
                            <li>Vous envoyez un mail</li>
                        </ul>
                    </li>
                    b- Utilisation des données non privées
                    Ces données qui ne sont pas privées, qui peuvent être qualifiées de publiques peuvent être
                    fournies à des tiers paries pour la publicité, le marketing et autres…
                    <li class="my-2">
                        <h4 class="font-weight-bold mb-2">
                            4- Durées de stockage de vos données
                        </h4>
                        Si vous laissez un commentaire, le commentaire et ses métadonnées sont conservés indéfiniment.
                        Cela permet de reconnaître et approuver automatiquement les commentaires suivants au lieu de les
                        laisser dans la file de modération. Pour les utilisateurs et utilisatrices qui s’enregistrent
                        sur notre site, nous stockons également les données personnelles indiquées dans leur profil.
                        Tous les utilisateurs et utilisatrices peuvent voir, modifier ou supprimer leurs informations
                        personnelles à tout moment (à l’exception de leur nom d’utilisateur (ice). Les gestionnaires du
                        site peuvent aussi voir et modifier ces informations.
                        Toutefois les données indésirables peuvent être supprimés sans le consentement de l’utilisateur
                    </li>
                    <li class="my-2">
                        <h4 class="font-weight-bold mb-2">
                            5- Les droits que vous avez sur vos données
                        </h4>
                        Si vous avez un compte ou si vous avez laissé des commentaires sur le site, vous pouvez demander
                        à recevoir un fichier contenant toutes les données personnelles que nous possédons à votre
                        sujet, incluant celles que vous nous avez fournies. Vous pouvez également demander la
                        suppression des données personnelles vous concernant. Cela ne prend pas en compte les données
                        stockées à des fins administratives, légales ou pour des raisons de sécurité.
                    </li>
                </ul>
            </div>
        </div>
    </main>
    @include('layouts.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/home.js') }}" type="module" defer></script>
</body>

</html>
