@extends('Website.layouts.app')
@section('title','Hotels')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('Assets/Websites/images/bg_1.jpg') }}); height: 1002px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center" style="height: 1002px;">
            <div class="col-md-9  pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Acceuil <i class="fa fa-chevron-right"></i></a></span> <span>Hotels<i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">{{ $hotel->name }}</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section services-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center fadeInUp ftco-animated">
                <div class="w-100">
                    <span class="subheading">{{ $hotel->prix_chambre }} TND / Chambre</span>
                    <h2 class="mb-4">{{ $hotel->name }}</h2>
                    <p>{{ $hotel->adresse }}</p>
                    <p>
                        {{ $hotel->description }}
                    </p>
                    <p>-{{$hotel->piscine ? 'Avec':'Sans'  }} Psicine</p>
                    <p>-{{$hotel->plage ? 'Avec':'Sans'  }} Plage</p>
                    <p>-{{$hotel->vue_mere ? 'Avec':'Sans'  }} Vue Mere</p>

                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Reserver
                    </button>
                    </p>
                    <div class="collapse border-0" id="collapseExample">
                        <div class="card card-body ">
                            <form action="{{ route('user.reserver-hotel',$hotel->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="number" name="nombre_chambre" min="1" class="form-control" placeholder="Nombre des Chambres" required>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label for="">Du</label>
                                        <input type="date" name="date_arrive" class="form-control" title="Jour" required min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">

                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label for="">Au</label>
                                        <input type="date" name="date_migration" class="form-control" title="Jour" required min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">

                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary mt-2 ms-5 ">Valider</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <img src="{{ asset($hotel->images ?? 'http://placehold.it/600x600') }}" class="img-fluid">

            </div>
        </div>
    </div>
</section>
@endsection
