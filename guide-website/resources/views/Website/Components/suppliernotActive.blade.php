@extends('Website.layouts.app')
@section('title','Verification Compte')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('Assets/Websites/images/bg_1.jpg') }}); height: 1002px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center" style="height: 1002px;">
            <div class="col-md-9 ftco-animate pb-5 text-center fadeInUp ftco-animated">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Acceuil <i class="fa fa-chevron-right"></i></a></span> <span>Verification Compte<i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Verification Compte</h1>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section contact-section ftco-no-pt">
    <div class="container">
        <div class="col-lg-12 mt-5">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @else
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>L'activation se fera après le traitement de votre dossier par l'administrateur.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif



        </div>
        <div class="row mt-5 bg-light p-3">


                <form class="form" method="post" action="" class="bg-light p-5 contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Email<span>*</span></label>
                                <input name="email" type="email" placeholder="Entrez votre adresse email"  value="{{ Auth::guard('supplier')->user()->email }}" class=" form-control @error('email')  is-invalid @enderror " disabled>
                                @error('email')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Téléphone<span>*</span></label>
                                <input name="phone" type="tel" placeholder="Entrez votre numéro de téléphone" value="{{ Auth::guard('supplier')->user()->phone }}" class="form-control @error('phone')  is-invalid @enderror " disabled>
                                @error('phone')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Fax<span>*</span></label>
                                <input name="fax" type="text" placeholder="Entrez votre Fax" value="{{ Auth::guard('supplier')->user()->fax }}" class="form-control @error('fax')  is-invalid @enderror " disabled>
                                @error('fax')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Nom<span>*</span></label>
                                <input name="name" type="text" placeholder="Entrez votre Nom " value="{{ Auth::guard('supplier')->user()->name }}" class=" form-control @error('name')  is-invalid @enderror " disabled>
                                @error('name')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="form-group button">
                                <a onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"  class="btn btn-primary py-3 px-4" style="cursor: pointer">Déconnexion</a>
                            </div>
                        </div>
                    </div>
                </form>







        </div>
    </div>
</section>
@endsection
