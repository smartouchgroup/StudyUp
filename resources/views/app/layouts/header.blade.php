<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>App | Accueil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container-fluid bg-white app-header">
        <header class="mx-auto d-flex justify-content-around align-items-center">
            <div>
                <a href="#" class="fit-content d-flex justify-content-center align-items-center text-smt-tertiary text-decoration-none">
                    <img src="{{asset('dist/img/logo.png')}}" alt="StudyUp">
                    <span class="h2 font-weight-bold">StudyUp</span>
                </a>
            </div>
            <div class="fit-content d-flex justify-content-center align-items-center">
                <button id="languages" class="fit-content mx-4 border-0 bg-transparent text-smt-fourth hover-text-smt-tertiary">
                    <i class="fal fa-language"></i>
                </button>
                <a href="#" id="notification" class="mx-4 text-smt-fourth text-decoration-none hover-text-smt-tertiary">
                    <i class="far fa-bell"></i>
                </a>
                <a href="#" id="user" class="mx-4 d-flex justify-content-center align-items-center text-smt-sixth text-decoration-none hover-text-smt-tertiary">
                    <img src="{{asset('dist/img/avatar.svg')}}" alt="Avatar">
                    <span class="mx-1">AbubakrSidick</span>
                    <i class="fas fa-sort-down mb-2"></i>
                </a>
            </div>
        </header>
    </div>