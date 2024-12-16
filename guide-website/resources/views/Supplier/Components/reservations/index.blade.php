@extends('Supplier.layouts.app')

@section('title','Reservations')

@section('content')
<div class="row pb-4 justify-content-between align-content-center h-100">

    <div class="col-md-4 heading-section text-center ftco-animate">
        <div class="card">
            <div class="card-header">
                <h1 >Reservations Restaurants</h1>
            </div>
            <div class="card-body">
                <a href="{{ route('supplier.reservations.restaurants') }}">{{ Auth::guard('supplier')->user()->reservationRestaurants->count() }} Réservations</a>

            </div>
            <div class="card-footer">
                <a href="{{ route('supplier.reservations.restaurants') }}" class="btn btn-primary text-white"> Consulter</a>
            </div>
        </div>

    </div>

    <div class="col-md-4 heading-section text-center ftco-animate">
        <div class="card">
            <div class="card-header">
                <h1 >Reservations Hotels</h1>
            </div>
            <div class="card-body">
                <a href="{{ route('supplier.reservations.hotels') }}">{{ Auth::guard('supplier')->user()->reservationHotels->count() }} Réservations</a>

            </div>
            <div class="card-footer">
                <a  href="{{ route('supplier.reservations.hotels') }}" class="btn btn-primary text-white"> Consulter</a>
            </div>
        </div>

    </div>

    <div class="col-md-4 heading-section text-center ftco-animate">
        <div class="card">
            <div class="card-header">
                <h1>Reservations Evenements</h1>
            </div>
            <div class="card-body">
                <a href="{{ route('supplier.reservations.evenements') }}">{{ Auth::guard('supplier')->user()->reservationEvenements->count() }} Réservations</a>
            </div>
            <div class="card-footer">
                <a href="{{ route('supplier.reservations.evenements') }}" class="btn btn-primary text-white"> Consulter</a>
            </div>
        </div>

    </div>
</div>

@endsection



