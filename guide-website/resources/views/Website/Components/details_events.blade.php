@extends('Website.layouts.app')
@section('title','Restaurants')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('Assets/Websites/images/bg_1.jpg') }}); height: 1002px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center" style="height: 1002px;">
            <div class="col-md-9  pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Acceuil <i class="fa fa-chevron-right"></i></a></span> <span>Événements<i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">{{ $event->name }}</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section services-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center fadeInUp ftco-animated">
                <div class="w-100">
                    <span class="subheading">{{ $event->prix_reservation }} TND</span>
                    <h2 class="mb-4">{{ $event->name }}</h2>
                    <p>{{ $event->adresse }}</p>
                    <p>
                        {{ $event->description }}
                    </p>
                    @php
                    Carbon\Carbon::setLocale('fr');
                @endphp
                    <p>
                        Le {{ Carbon\Carbon::parse($event->date_evenement)->isoFormat('dddd DD MMMM YYYY', 'Do MMMM YYYY') }}
                    </p>
                    <form action="{{ route('user.reserver-event',$event->id) }}" method="POST">
                        @csrf


                    <button class="btn btn-primary" type="submit" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Participer
                    </button>
                </form>
                    </p>

                </div>
            </div>
            <div class="col-md-6">

                <img src="{{ asset($event->images ?? 'http://placehold.it/600x600') }}" class="img-fluid">

            </div>
        </div>
    </div>
</section>
@endsection
