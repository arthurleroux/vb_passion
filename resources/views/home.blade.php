@extends('layouts.app')

@section('content')
    <div id="carouselExampleControls" class="carousel slide slider-home-header" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item slide-voiture-1 active">
                <div class="slide-center container">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="//res.cloudinary.com/hrscywv4p/image/upload/c_limit,fl_lossy,h_1440,w_720,f_auto,q_auto/v1/1501348/Sans_titre_wxvdsh.png" alt="" title="" class="crop-default" data-description="">
                        </div>
                        <div class="col-lg-6">
                            <h1>Le Rallye des Anglaises</h1>
                            <h4 class="s-component-content s-font-heading">
                                <ul>
                                    <li style="text-align: justify; font-size: 100%;">Voitures de marque anglaises</li>
                                    <li style="font-size: 100%; text-align: justify;">Départ du Touquet</li>
                                    <li style="text-align: justify; font-size: 100%;">Art de vivre à la française ...</li>
                                </ul>
                                <div>&nbsp;</div>
                                <div>&nbsp;</div>
                                <div>&nbsp;</div>
                                <div>&nbsp;</div>
                            </h4>
                            <a href="http://www.vbpassion.com/le-rallye-des-anglaises" data-component="button" target="_self" class="btn btn-primary">Inscription</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item slide-voiture-2">
                <div class="slide-center container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1>Rallyes Evénements</h1>
                            <h4>Collection & Prestige</h4>
                            <a href="http://www.vbpassion.com/le-rallye-des-anglaises" data-component="button" target="_self" class="btn btn-primary">Inscription</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <div class="s-first-section-arrow css-1yk3s2f"><div class="shape1"></div><div class="shape2"></div></div>
    </div>
<div class="container">
    <section id="welcome" class="section-content text-center">
        <h2>
            Bienvenue chez VB Passion
        </h2>
        <h4>
            Vivez et partagez votre passion !
        </h4>
        <p>Découvrez VB PASSION, expert en rallye de voitures anciennes. VB Passion est spécialisé dans la création de rallyes de voitures anciennes et de tous types d'événements liés à l'automobile, rallye de régularité, rallye promenade, roulage circuit. Notre agence, pour la préparation de rallye de voitures anciennes est situé en région parisienne, aux portes de Paris. Nous organisons des rallyes de voitures anciennes dans la France entière.</p>
        <p class="welcome-p-last">Contactez nous pour en apprendre d'avantage.</p>
        <div class="row">
            <div class="col-lg-4">
                <img src="/img/img-voiture1.webp" alt="img voiture 1" class="img-fluid">
                <p><strong>Le prochain rendez vous à ne pas manquer.</strong></p>
            </div>
            <div class="col-lg-4">
                <img src="/img/img-voiture2.webp" alt="img voiture 2" class="img-fluid">
                <p><strong>Rallye à la carte, Un rallye à votre image ! </strong></p>
            </div>
            <div class="col-lg-4">
                <img src="/img/img-voiture3.webp" alt="img voiture 3" class="img-fluid">
                <p><strong>Contact</strong></p>
            </div>
        </div>
    </section>
</div>
@endsection
