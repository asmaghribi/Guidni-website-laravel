@extends('Website.layouts.app')
@section('title',"S'inscrire")
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('Assets/Websites/images/bg_1.jpg') }}); height: 1002px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center" style="height: 1002px;">
            <div class="col-md-9 ftco-animate pb-5 text-center fadeInUp ftco-animated">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Acceuil <i class="fa fa-chevron-right"></i></a></span> <span>S'inscrire<i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">S'inscrire</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section ftco-no-pt mt-5">
    <div class="container">
        <div class="row ">
            <div class="col-md-9  mx-auto">
                <form method="POST" action="{{ route('register') }}" class="bg-light p-5 contact-form">
                    @csrf

                    <div class="row mb-3">


                        <div class="col-md-6 mb-3">
                            <label for="">Nom & Prénom</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
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
                        <div class="col-md-6">
                            <label for="Conifrmer ">Télephone</label>
                            <input  type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-md-6 mt-5 text-right">

                          <a class="mt-5" href="{{ route('login') }}">J'ai un Compte</a>
                        </div>
                    </div>







                    <div class="row mb-0">
                        <div class="col-md-6 ">
                            <button type="submit" class="btn btn-primary">
                                S'inscrire
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
