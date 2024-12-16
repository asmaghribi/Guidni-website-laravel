@extends('Website.layouts.app')
@section('title','Hôtels')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('Assets/Websites/images/Hotels.jpg') }}); height: 1002px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center" style="height: 1002px;">
            <div class="col-md-9 ftco-animate pb-5 text-center fadeInUp ftco-animated">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Hôtels <i class="fa fa-chevron-right"></i></a></span> <span>Hôtels<i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Hôtels</h1>
            </div>
        </div>
    </div>
</section>

<livewire:website.hotel />


@endsection
