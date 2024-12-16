@extends('Admin.layouts.app')

@section('title','Reservations-Restaurants')

@section('content')
<div class="row pb-4 ">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Liste des Reservations Restaurants
        </div>
        @if($reservations->count()>0)
        <div class="card-body">
            <table class="table table-hover mt-3">

                <tbody>
                    @foreach($reservations as $reservation)
                   <tr>

                        <td>{{ $reservation->user->name }}</td>
                        <td>{{ $reservation->date }}</td>
                        <td>{{ $reservation->heure }}</td>
                        <td>
                            @if(!is_null($reservation->restaurant))

                            {{ $reservation->nombre }} Tables au {{ Str::limit($reservation->restaurant->name, 50, '...') }}
                            @else
                            ----
                            @endif

                        </td>
                        <td>
                            {{ $reservation->prix }} TND
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

@endsection



