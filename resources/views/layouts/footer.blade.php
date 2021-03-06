
<footer class="auth-footer text-center pt-5 pb-2">
    <div class="container-fluid d-flex justify-content-around align-items-center mt-1">
        <div class="little_desc col-md-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('dist/img/smt-logo.png') }}" alt="smarttouch_logo">
                <div class="ml-2">
                    <span class="h4 font-weight-bold text-smt-tertiary smt-sm-h4">Smart Touch Group</span>
                </div>
            </div>
            <p class="text-muted text-justify mt-2 font-size-14">Smart Touch Group est une entreprise de droit burkinabé de technologie avancée proposant des services innovants, futuristes, intelligents à ses clients.</p>
            <div class="text-left">
                <a href="https://www.facebook.com/smartouchgroup" target="_blank" class="h2 "><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/smartouchgroup" target="_blank" class="h2 text-smt-primary"><i class="fab fa-twitter mx-2"></i></a>
                <a href="https://www.instagram.com/smartouchgroup1/" target="_blank" class="h2 text-smt-primary"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <ul class="nav flex-column  col-md-3">
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ route('a_propos') }}">À propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ route('blog.index') }}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ route('Faqs.index') }}">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ route('contacts') }}">Nous contacter</a>
            </li>
        </ul>
        <ul class="nav flex-column col-md-3">
            <li class="nav-item">
                <a class="nav-link font-weight-bold" href="{{ route('home') }}">Accueil</a>
              </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ route('login.auth') }}">Se connecter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ route('register.auth') }}">Créer un compte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" target='_blank' href="https://www.smt-group.net">L'entreprise</a>
            </li>
        </ul>
    </div>
    <div class="mt-5">
        <p class="font-weight-bold">Tous droits réservés. Copyright © 2021-2022 StudyUp by <a href="https://smt-group.net/" class="text-decoration-none" target="_blank">Smart Touch Group</a></p>
    </div>
</footer>
