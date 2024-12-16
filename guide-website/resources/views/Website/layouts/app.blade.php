<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('Assets/Websites/css/animate.css') }}">
    <link href="{{ asset('Assets/Websites/css/ajax-loader.gif') }}">
    <link rel="stylesheet" href="{{ asset('Assets/Websites/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Assets/Websites/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Assets/Websites/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('Assets/Websites/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('Assets/Websites/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('Assets/Websites/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('Assets/Websites/css/style.css')}}">
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">{{ config('app.name') }}<span>{{ config('app.second_name') }}</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('index') }}" class="nav-link">Accueil</a></li>
                    <li class="nav-item {{ Request::is('A-Propos') ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">À propos</a></li>
                    <li class="nav-item {{ Request::is('Evenements*') ? 'active' : '' }}"><a href="{{ route('event') }}" class="nav-link">Événements</a></li>
                    <li class="nav-item {{ Request::is('Hotel*') ? 'active' : '' }}"><a href="{{ route('hotel') }}" class="nav-link">Hôtels</a></li>
                    <li class="nav-item {{ Request::is('Restaurant*') ? 'active' : '' }}"><a href="{{ route('restaurant') }}" class="nav-link">Restaurants</a></li>
                    <li class="nav-item {{ Request::is('Contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    @if(auth::guard('web')->user())
                    <li class="nav-item {{ Request::is('') | Request::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">{{ Auth::guard('web')->user()->name }}</a></li>

                    @else
                    <li class="nav-item {{ Request::is('login') | Request::is('register') ? 'active' : '' }}"><a href="{{ route('login') }}" class="nav-link">Connexion</a></li>

                    @endif
                </ul>

            </div>
        </div>
    </nav>
    <!-- END nav -->

 @yield('content')
 @livewireScripts
 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
    <footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image:url({{ asset('Assets/Websites/images/bg_3.jpg') }});">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md pt-5">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">À propos</h2>
                        <p>Notre mission est de simplifier vos recherches et de vous aider à trouver les meilleurs restaurants, hôtels et événements pour rendre vos moments spéciaux encore plus spéciaux.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Navigation</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('index') }}" class="py-2 d-block">Acceuil</a></li>
                            <li><a href="{{ route('about') }}" class="py-2 d-block">À propos</a></li>
                            <li><a href="{{ route('event') }}" class="py-2 d-block">Événements</a></li>
                            <li><a href="{{ route('hotel') }}" class="py-2 d-block">Hôtels</a></li>
                            <li><a href="{{ route('restaurant') }}" class="py-2 d-block">Restaurants</a></li>
                            <li><a href="{{ route('contact') }}" class="py-2 d-block">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Liens Utiles</h2>
                        <ul class="list-unstyled">
                            <li><a href="https://www.fth.com.tn/" class="py-2 d-block"> La Fédération Tunisienne de l'Hôtellerie</a></li>
                            <li><a href="http://www.ftrt.tn/" class="py-2 d-block">La Fédération Tunisienne des Restaurants Touristiques</a></li>


                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Vous avez des questions ?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> All rights reserved | {{ config('app.name') }} <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">Ayat </a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
   {{--  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
 --}}


    <script src="{{ asset('Assets/Websites/js/jquery.min.js')}}"></script>
    <script src="{{ asset('Assets/Websites/js/popper.min.js')}}"></script>
    <script src="{{ asset('Assets/Websites/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('Assets/Websites/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('Assets/Websites/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('Assets/Websites/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('Assets/Websites/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('Assets/Websites/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('Assets/Websites/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('Assets/Websites/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('Assets/Websites/js/scrollax.min.js')}}"></script>
    <script src="{{ asset('Assets/Websites/js/jquery-migrate-3.0.1.min.js')}}"></script>

{{--     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
 --}}   {{--  <script src="{{ asset('Assets/Websites/js/google-map.js')}}"></script> --}}
    <script src="{{ asset('Assets/Websites/js/main.js')}}"></script>

</body>
</html>
