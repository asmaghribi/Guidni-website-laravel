@extends('Website.layouts.app')
@section('title','Espace Utilsateur')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('Assets/Websites/images/bg_1.jpg') }}); height: 1002px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center" style="height: 1002px;">
            <div class="col-md-9  pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Acceuil <i class="fa fa-chevron-right"></i></a></span> <span>Espace Utilisateurs<i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">{{ Auth::guard('web')->user()->name }}</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-1">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif
            </div>
        </div>
        <div class="row mt-2 mb-3 bg-light p-3">


            <form class="form" method="post" action="{{ route('user.updateInfo') }}" class="bg-light p-5 contact-form">
                @csrf
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="form-group">
                            <label>Nom<span>*</span></label>
                            <input name="name" type="text" placeholder="Entrez votre Nom " value="{{ Auth::guard('web')->user()->name }}" class=" form-control @error('name')  is-invalid @enderror ">
                            @error('name')
                            <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label>Email<span>*</span></label>
                            <input name="email" type="email" placeholder="Entrez votre adresse email" value="{{ Auth::guard('web')->user()->email }}" class=" form-control @error('email')  is-invalid @enderror ">
                            @error('email')
                            <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label>Téléphone<span>*</span></label>
                            <input name="phone" type="tel" placeholder="Entrez votre numéro de téléphone" value="{{ Auth::guard('web')->user()->phone }}" class="form-control @error('phone')  is-invalid @enderror ">
                            @error('phone')
                            <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label>Adresse<span>*</span></label>
                            <textarea class="form-control @error('adresse')  is-invalid @enderror" name="adresse" style="resize: none">{{ Auth::guard('web')->user()->adresse }}</textarea>
                            @error('adresse')
                            <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>




                </div>
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="form-group button">
                            <a onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" class="btn btn-primary " style="cursor: pointer">Déconnexion</a>
                        </div>
                    </div>
                    <div class="col-auto ">
                        <button type="submit" class="btn btn-success"> Mettre à Jour</button>
                    </div>
                </div>
            </form>







        </div>
        <div class="row pb-4">

            <div class="col-md-4 heading-section text-center ftco-animate">
                <div class="card">
                    <div class="card-header">
                        <span class="subheading">Reservations Restaurants</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('user.mes_reservations_restaurant') }}">{{ Auth::guard('web')->user()->reservationRestaurants->count() }} Réservations</a>

                    </div>
                </div>

            </div>

            <div class="col-md-4 heading-section text-center ftco-animate">
                <div class="card">
                    <div class="card-header">
                        <span class="subheading">Reservations Hotels</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('user.mes_reservations_hotel') }}">{{ Auth::guard('web')->user()->reservationHotels->count() }} Réservations</a>

                    </div>
                </div>

            </div>

            <div class="col-md-4 heading-section text-center ftco-animate">
                <div class="card">
                    <div class="card-header">
                        <span class="subheading">Reservations Evenements</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('user.mes_reservations_evenement') }}">{{ Auth::guard('web')->user()->reservationEvenements->count() }} Réservations</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="row mt-2 mb-3 ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Sécurité
                    </div>
                </div>
                <div class="card-body bg-light">

                    <form method="post" action="{{ route('user.updatepassword') }}">
                        @csrf
                        <div class="row bg-light">
                            <div class="col-md-6">
                                <label for="Mot">Mot de Passe</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="Conifrmer ">Confirmer Mot de Passe</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Changer Mot de Passe</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
