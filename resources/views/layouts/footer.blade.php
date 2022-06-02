
<footer class="auth-footer text-center pt-5 pb-2">
    <div class="container-fluid d-flex justify-content-around align-items-center mt-1">
        <div class="little_desc col-md-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('dist/img/smt-logo.png') }}" alt="smarttouch_logo">
                <div class="ml-2">
                    <span class="h4 font-weight-bold text-smt-tertiary smt-sm-h4">Smart Touch Group</span>
                </div>
            </div>
            <p class="text-muted text-justify mt-2 font-size-14">Smart Touch Group est une une entreprise de droit burkinabé de technologie avancée proposant des services innovants, futuristes, intelligents à ses client.</p>
            <div class="text-left">
                <a href="#" class="h2 mr-4"><i class="fab fa-facebook"></i></a>
                <a href="#" class="h2 text-smt-primary"><i class="fab fa-twitter"></i></a>
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
              <a class="nav-link font-weight-bold" href="{{ route('login.auth') }}">Se connecter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ route('register.auth') }}">Créer un compte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="https://www.smt-group.net">L'entreprise</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="#">Politique de confidentialité</a>
            </li>
        </ul>
    </div>
    <div class="mt-5">
        <p class="font-weight-bold">&copy;Copyright - SMARTTOUCHGROUP - 2021</p>
    </div>
</footer>
