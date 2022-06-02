@extends('layouts.layout')
@section('content')


<section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Les Questions les plus Fréquents</h2>
            <p>
                Smart Touch Group vous propose des produits futuristes dans le but de faciliter 
                votre quotidien en vous proposant des gadgets intelligents et commandés via téléphone 
                portable, objets connectés à travers la domotique et l’intelligence artificielle. Nous 
                sommes dans le domaine de l’intelligence artificielle, la domotique, la transformation digitale, 
                les énergies renouvelables et la cybersécurité.
                Nous vous accompagnons dans tous les secteurs : santé, agriculture, élevage, commerce etc… Irrigation
                automatisée et téléguidée depuis votre domicile, des caméras haut de gamme avec human tracking et détection faciale.
            </p>
        </div>

        <div class="faq-list">
            @foreach($faqs as $faq)
                <ul>              
                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">{{ $faq->titre }}<i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                {{ $faq->contenu }}
                            </p>
                        </div>
                    </li>
                </ul>
            @endforeach
        </div>

    </div>
</section>



@endsection