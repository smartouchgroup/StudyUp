<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudyUp | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__spin" src="dist/img/loader.png" alt="loader" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li>
                    <div>
                        <img src="{{ asset('dist/img/avatar.jpg') }}" width="40px" height="40px" alt="">
                    </div>
                <li class=" mt-2 mx-1">
                    <h6 class="font-weight-bold">{{ Auth()->user()->firstname }} {{ Auth()->user()->lastname }}</h6>
                </li>
                </li>
                <li class="mx-3 mt-1">
                    <a href="/deconnexion"><button type="button"
                            class="btn btn-secondary btn-sm ">Deconnexion</button></a>
                </li>
                <!-- Notifications Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('dashboard') }}" class="brand-link">
                <img src="dist/img/logo.png" alt="Study" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-bolder">StudyUp</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link active">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <p>Gestion de bibliothèque</p>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <p>
                                    Paramétrage Livres
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ asset('categories') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Catégories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ asset('authors') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Auteurs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ asset('editors') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Editeurs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ asset('countrie') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pays</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ asset('language') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Langues</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ asset('books') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ajouter un livre</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ asset('articles') }}" class="nav-link">
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                                <p>
                                    Gestion Articles
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('Faqs') }}" class="nav-link">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                                <p>
                                    Gestion FAQs
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('notifications.index') }}" class="nav-link">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p>
                                    Gestion Notifications
                                </p>
                            </a>
                        </li>
                        @if (Auth::user()->role_id == 1)
                        <li class="nav-item">
                            <a href="{{ route('manageAdmin') }}" class="nav-link">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <p>
                                    Gestion d'administrateurs
                                </p>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a href="{{ route('profile') }}" class="nav-link">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <p>
                               Profil
                            </p>
                        </a>
                    </li>
                        <li class="nav-item">
                            <a href="{{ route('adminIndex') }}" class="nav-link">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p>
                                    Messages
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-exchange-alt" aria-hidden="true"></i>
                                <p>
                                    Transactions
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href=" {{ route('depositTransaction') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dépots</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href=" {{ route('buyTransaction') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Achat de livres</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $books->count() }}</h3>

                                    <p>Livres enregistrés</p>
                                </div>
                                <div class="icon">
                                    <i class="nav-icon fas fa-book"></i>
                                </div>
                                <a href="{{ route('books.index') }}" class="small-box-footer">Plus d'info <i
                                        class="fas fa-arrow-circle-right"></i>
                                    </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $articles->count() }}</h3>

                                    <p>Articles</p>
                                </div>
                                <div class="icon">
                                    <i class=" nav-icon fas fa-newspaper"></i>
                                </div>
                                <a href="{{ route('articles.index') }}" class="small-box-footer">Plus d'info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{ $users->count() }}</h3>
                                    <p>Utilisateurs</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">Plus d'info <i
                                        class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $messages->count() }}</h3>

                                    <p>messages</p>
                                </div>
                                <div class="icon">
                                    <i class="nav-icon fas fa-envelope"></i>
                                </div>
                                <a href="{{ route('adminIndex') }}" class="small-box-footer">Plus d'info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold text-uppercase">Utilisateurs
                                ({{ count($users) }}) </h3>
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
                        <div class="card-body p-0 table-responsive">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 20%" class="text-center">
                                            NOMS
                                        </th>
                                        <th style="width: 20%" class="text-center">
                                            PRENOM(S)
                                        </th>
                                        <th style="width: 20%" class="text-center">
                                            Emails
                                        </th>
                                        <th style="width: 20%" class="text-center">
                                            Date d'inscription
                                        </th>
                                        <th style="width: 20%" class="text-center">
                                            Solde
                                        </th>
                                        <th style="width: 20%" class="text-center">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                @forelse ($users as $user)
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                {{ $user->firstname }}
                                            </td>
                                            <td class="text-center">
                                                {{ $user->lastname }}
                                            </td>
                                            <td class="text-center">
                                                {{ $user->email }}
                                            </td>
                                            <th style="width: 20%" class="text-center">
                                                {{ date('d-M-Y', strtotime($user->created_at)) }}
                                            </th>
                                            <td class="text-center">
                                                {{ $user->account->amount }} Fcfa
                                            </td>
                                            <td class="text-center">
                                               @if ($user->status == true)
                                               <a href="{{ route('desactivate',$user->id) }}">
                                                <button type="submit" class="btn btn-danger">
                                                    Désactiver
                                                </button>
                                            </a>
                                               @else
                                               <a href="{{ route('activate',$user->id) }}">
                                                    <button type="submit" class="btn btn-success">
                                                        Activer
                                                    </button>
                                                </a>
                                               @endif
                                            </td>
                                            <td class="text-center">
                                               <a href="{{ route('removeManager',$user->id) }}">
                                                <button type="submit" class="btn btn-danger">
                                                    Supprimer
                                                </button>
                                               </a>
                                            </td>
                                        @empty
                                            <div class="alert alert-warning col-md-12 col-xs-12" role="alert">
                                                <p class='font-weight-bolder text-center '>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                    </svg>
                                                    Aucun utilisateur enregistré
                                                </p>
                                            </div>
                                        </tr>
                                    </tbody>
                                @endforelse
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <p class="font-weight-bold text-center">Tous droits réservés. Copyright © 2021-2022 StudyUp by <a
                    href="https://smt-group.net/" class="text-decoration-none" target="_blank">Smart Touch Group</a>
            </p>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
</script>
</body>

</html>
