@extends('Website.layouts.app')
@section('title','Binvenue')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url({{ asset('Assets/Websites/images/32.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                <span class="subheading">Bienvenue Chez {{ config('app.name') }}</span>
                <h1 class="mb-4">Explorez un lieu enchanteur où la cuisine exquise.</h1>
                <p class="caps"> l'hébergement de luxe et des événements mémorables vous attendent</p>
            </div>
            <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                <span class="fa fa-play"></span>
            </a>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ftco-search d-flex justify-content-center">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap">
                            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Événements</a>

                                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Hôtel</a>
                                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Restaurant</a>


                            </div>
                        </div>
                        <div class="col-md-12 tab-wrap">

                            <div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                    <form action="{{ route('event') }}" class="search-property-1">
                                        <div class="row no-gutters">
                                            <div class="col-md-4 d-flex">
                                                <div class="form-group p-4 border-0">
                                                    <label for="#">Nom</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="fa fa-search"></span></div>
                                                        <input name="searchNom" type="text" class="form-control" placeholder="Recherche par text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Prix</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="fa fa-dollar"></span></div>
                                                        <div class="d-flex">
                                                            <input name="searchPrix_min" type="text" class="form-control" placeholder="Prix min">
                                                            <input name="searchPrix_max" type="text" class="form-control" placeholder="Prix max">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Ville</label>
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="fa fa-map-marker"></span></div>
                                                            <select name="searchVille" id="" class="form-control">
                                                                @foreach(App\Models\Ville::all() as $ville)
                                                                <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                                                @endforeach


                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group d-flex w-100 border-0">
                                                    <div class="form-field w-100 align-items-center d-flex">
                                                        <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                                    <form action="{{ route('hotel') }}" class="search-property-1">
                                        <div class="row no-gutters">
                                            <div class="col-md-4 d-flex">
                                                <div class="form-group p-4 border-0">
                                                    <label for="#">Nom</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="fa fa-search"></span></div>
                                                        <input name="searchNom" type="text" class="form-control" placeholder="Recherche par text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Ville</label>
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="fa fa-map-marker"></span></div>
                                                            <select name="searchVille" id="" class="form-control">
                                                                @foreach(App\Models\Ville::all() as $ville)
                                                                <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                                                @endforeach


                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Prix</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="fa fa-dollar"></span></div>
                                                        <div class="d-flex">
                                                            <input name="searchPrix_min" type="text" class="form-control" placeholder="Prix min">
                                                            <input name="searchPrix_max" type="text" class="form-control" placeholder="Prix max">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg d-flex">
                                                <div class="form-group d-flex w-100 border-0">
                                                    <div class="form-field w-100 align-items-center d-flex">
                                                        <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary p-0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                                    <form action="{{ route('restaurant') }}" class="search-property-1">
                                        <div class="row no-gutters">
                                            <div class="col-md-4 d-flex">
                                                <div class="form-group p-4 border-0">
                                                    <label for="#">Nom</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="fa fa-search"></span></div>
                                                        <input name="searchNom" type="text" class="form-control" placeholder="Recherche par text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Prix</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="fa fa-dollar"></span></div>
                                                        <div class="d-flex">
                                                            <input name="searchPrix_min" type="text" class="form-control" placeholder="Prix min">
                                                            <input name="searchPrix_max" type="text" class="form-control" placeholder="Prix max">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Ville</label>
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="fa fa-map-marker"></span></div>
                                                            <select name="searchVille" id="" class="form-control">
                                                                @foreach(App\Models\Ville::all() as $ville)
                                                                <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                                                @endforeach


                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-lg d-flex">
                                                <div class="form-group d-flex w-100 border-0">
                                                    <div class="form-field w-100 align-items-center d-flex">
                                                        <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary p-0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="ftco-section services-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                <div class="w-100">
                    <span class="subheading">Bienvenue dans le monde de {{ config('app.name') }}</span>
                    <h2 class="mb-4">Il est temps de commencer votre exploration</h2>
                    <p>Découvrez la simplicité de notre application qui facilite la recherche d'hôtels, de restaurants et d'événements pour une réservation sans tracas.</p>
                    <p>Explorez les fonctionnalités pratiques qui vous permettent de trouver rapidement l'endroit idéal pour votre séjour, vos repas ou vos événements spéciaux.</p>
                    <p><a href="#" class="btn btn-primary py-3 px-4">En savoir plus</a></p>

                </div>

            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 color-1 d-block img" style="background-image: url({{ asset('Assets/Websites/images/services-1.jpg') }});">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Restaurants</h3>
                                <p>Découvrez une variété de restaurants offrant une expérience culinaire exceptionnelle pour satisfaire vos papilles.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 color-2 d-block img" style="background-image: url({{ asset('Assets/Websites/images/services-2.jpg') }});">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Hôtels</h3>
                                <p>Trouvez l'hôtel idéal pour un séjour agréable, que ce soit pour affaires ou pour le plaisir, avec des services exceptionnels.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 color-3 d-block img" style="background-image:url({{ asset('Assets/Websites/images/services-3.jpg') }});">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Événements</h3>
                                <p>Participez à des événements passionnants et mémorables organisés par notre équipe d'experts en gestion d'événements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 color-4 d-block img" style="background-image:url({{ asset('Assets/Websites/images/services-4.jpg') }});">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Réservations</h3>
                                <p>Facilitez vos réservations pour des restaurants, des hôtels et des événements en quelques clics, sans tracas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="ftco-section img ftco-select-destination" style="background-image: url({{ asset('Assets/Websites/images/bg_3.jpg') }});">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">{{ config('app.name') }} offre des Hôtels</span>
                <h2 class="mb-4">Découvrir Maintenant</h2>
            </div>
        </div>
    </div>
    <div class="container container-2">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-destination owl-carousel ftco-animate">
                    @foreach($hotels as $hotel)

                    <div class="item">
                        <div class="project-destination">
                            <a href="{{ route('hotelbyid',$hotel->id) }}" class="img" style="background-image: url({{ asset($hotel->images ?? 'http://placehold.it/200x200') }});">
                                <div class="text">
                                    <h3>{{ $hotel->name }}</h3>
                                    <span>{{ $hotel->prix_chambre }} TND</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Restaurants</span>
                <h2 class="mb-4">Restaurants les plus récents</h2>
            </div>
        </div>
        <div class="row">
            @foreach($restaurants as $restaurant)
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{ route('restaurantbyid',$restaurant->id) }}" class="img" style="background-image: url({{ asset($restaurant->images ?? 'http://placehold.it/200x200') }});">
                        <span class="price">{{ $restaurant->prix_table }}TND/Table</span>
                    </a>
                    <div class="text p-4">
                        <span class="days">{{ $restaurant->ville->name }}</span>
                        <h3><a href="#">{{ $restaurant->name }}</a></h3>
                        <ul>
                            <li><span class="flaticon-shower"></span>{{ $restaurant->reservations->count() }} reservations</li>


                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="ftco-section ftco-about img" style="background-image:url({{ asset('Assets/Websites/images/bg_4.jpg') }});">
    <div class="overlay"></div>
    <div class="container py-md-5">
        <div class="row py-md-5">
            <div class="col-md d-flex align-items-center justify-content-center">
                <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-about ftco-no-pt img">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 about-intro">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url({{ asset('Assets/Websites/images/about-1.jpg') }});">
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-5 py-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <span class="subheading">À Propos de Nous</span>
                                <h2 class="mb-4">Rendez Votre Recherche Mémorable et Sécurisée Avec Nous</h2>
                                <p>Notre mission est de simplifier vos recherches et de vous aider à trouver les meilleurs restaurants, hôtels et événements pour rendre vos moments spéciaux encore plus spéciaux.</p>
                                <p><a href="#" class="btn btn-primary">Découvrir Nos Offres</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-bottom" style="background-image:url({{ asset('Assets/Websites/images/bg_1.jpg') }}) ;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">Tourist Feedback</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image:url({{ asset('Assets/Websites/images/person_1.jpg') }})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image:url({{ asset('Assets/Websites/images/person_2.jpg') }})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{ asset('Assets/Websites/images/person_3.jpg') }})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image:url({{ asset('Assets/Websites/images/person_1.jpg') }})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image:url({{ asset('Assets/Websites/images/person_2.jpg') }})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Nos Événements</span>

                <h2 class="mb-4">Événement récent</h2>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($events as $event)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end" style="width: 100%">
                    <a href="blog-single.html" class="block-20" style="background-image:url({{ asset($event->images ?? 'http://placehold.it/200x200') }});">
                    </a>
                    <div class="text" >
                        <div class="d-flex align-items-center mb-4 topp">
                            @php
                            Carbon\Carbon::setLocale('fr');
                            @endphp
                            <p>
                                <div class="one">
                                    <span class="day">{{ Carbon\Carbon::parse($event->date_evenement)->format('d') }}</span>

                                </div>
                                <div class="two">
                                    <span class="yr">&nbsp;&nbsp;&nbsp; {{ Carbon\Carbon::parse($event->date_evenement)->format('Y') }} &nbsp;</span>
                                    <span class="mos">&nbsp;&nbsp;&nbsp; {{ Carbon\Carbon::parse($event->date_evenement)->translatedFormat('F') }}</span>
                                </div>
                        </div>



                        <h3 class="heading"><a href="{{ route('eventByID',$event->id) }}">{{ $event->name }} au {{ $event->ville->name }} </a></h3>
                        <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                        <p><a href="{{ route('eventByID',$event->id) }}" class="btn btn-primary">Voir Détails</a></p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>

<section class="ftco-intro ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="img" style="background-image:url({{ asset('Assets/Websites/images/bg_2.jpg') }});">
                    <div class="overlay"></div>
                    <h2>Bienvenue chez {{ config('app.name') }}, votre partenaire pour des expériences exceptionnelles</h2>
                    <p>Nous sommes là pour rendre vos moments inoubliables. Un petit ruisseau nommé Duden coule près de notre endroit et le ravitaille en regelialia nécessaire. Explorez notre plateforme pour réserver des hôtels de qualité, découvrir des restaurants de renom et participer à des événements exceptionnels.</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Demander un Devis</a></p>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
