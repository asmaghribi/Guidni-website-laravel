@extends('Website.layouts.app')
@section('title',"Se Connecter")
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('Assets/Websites/images/bg_1.jpg') }}); height: 1002px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center" style="height: 1002px;">
            <div class="col-md-9 ftco-animate pb-5 text-center fadeInUp ftco-animated">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Acceuil <i class="fa fa-chevron-right"></i></a></span> <span>Se Connecter<i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Se Connecter</h1>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section contact-section ftco-no-pt mt-5">
    <div class="container">
        <div class="row ">
            <div class="col-md-6  mx-auto">
                <form action="{{ route('login') }}" class="bg-light p-5 contact-form" method="POST">
                    @csrf

                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder=Email>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password"  name="password" class="form-control @error('password') is-invalid @enderror" placeholder="*******">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Se Connecter" class="btn btn-primary py-3 px-5">
                    </div>
                    <div class="row mt-5 justify-content-between">
                        <div class="col">
                            <a href="{{ route('register') }}">S'inscrire</a>
                        </div>
                        <div class="col text-right">
                            <a href="{{ route('supplier.login.show') }}">Fournisseur Services</a>
                        </div>
                    </div>
                </form>


            </div>





        </div>
    </div>
</section>


@endsection
