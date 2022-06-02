<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudyUp | Dashboard</title>
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">

    <!-- lien pour le summernote -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__spin" src="{{ asset('dist/img/loader.png')}}" alt="loader" height="60" width="60">
        </div>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="mx-3">
                    <img src="{{asset('dist/img/avatar.jpg')}}" width="40px" height="40px" alt="">
                </li>
                <li class=" mt-2 mx-1">
                    <h6 class="font-weight-bold">{{(Auth()->user()->firstname)}}</h6>
                </li>
                <li class="mx-3 mt-1">
                    <a href="/deconnexion"><button type="button" class="btn btn-secondary btn-sm ">Deconnexion</button></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>

        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('dist/img/logo.png') }}" alt="Study" class="brand-image img-circle elevation-3" style="color:white">
                <span class="brand-text font-weight-bolder">StudyUp</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
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
                                    <a href=" {{ asset('categories') }}" class="nav-link">
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
                            <a href="#" class="nav-link">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p>
                                    Gestion Notifications
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <main id="main">
            <div class=" ">
                @yield('contenu')
            </div>
        </main>

        <footer class="main-footer">
        <p class="font-weight-bold text-center">&copy;Copyright - SMART TOUCH GROUP - 2021</p>
        </footer>
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>

    <script src="{{asset('js/main.js')}}"></script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <!--pour uploader la photo ne pas supprimer -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('dist/js/adminlte.js')}}"></script>
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
</body>

</html>