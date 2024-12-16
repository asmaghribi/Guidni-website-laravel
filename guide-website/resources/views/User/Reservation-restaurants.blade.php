@extends('Website.layouts.app')
@section('title','Reservations')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('Assets/Websites/images/bg_1.jpg') }}); height: 1002px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center" style="height: 1002px;">
            <div class="col-md-9 ftco-animate pb-5 text-center fadeInUp ftco-animated">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Acceuil <i class="fa fa-chevron-right"></i></a></span> <span>Espace Utilisateur<i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Mes Reservation Restaurants</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section ftco-no-pt">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Mes Reservations
                    </div>
                    @if($reservations->count()>0)
                    <div class="card-body">
                        <table class="table table-hover mt-3">

                            <tbody>
                                @foreach($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->date }}</td>
                                    <td>{{ $reservation->heure }}</td>
                                    <td>
                                        @if(!is_null($reservation->restaurant))

                                        {{ $reservation->nombre }} Tables au <a href="">{{ Str::limit($reservation->restaurant->name, 50, '...') }}</a>
                                        @else
                                        ----
                                        @endif

                                    </td>
                                    <td>
                                        {{ $reservation->prix }} TND
                                    </td>
                                    <td>
                                        @if($reservation->status=='pending')
                                        <span class="badge badge-info">En Attente</span>
                                        @endif
                                        @if($reservation->status=='confirmed')
                                        <span class="badge badge-success">Confirmé</span>
                                        @endif
                                        @if($reservation->status=='rejected')
                                        <span class="badge badge-danger">Annulé</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="row justify-content-center">
                            {{ $reservations->links('pagination::bootstrap-4') }}
                        </div>

                    </div>
                    @else
                    <div class="card-body">
                        <p class="card-text">Aucune Reservation Marqué </p>
                    </div>
                    @endif

                </div>
            </div>
        </div>


    </div>
</section>
@endsection
