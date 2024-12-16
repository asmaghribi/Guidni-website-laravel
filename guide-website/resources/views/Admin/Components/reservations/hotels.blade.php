@extends('Admin.layouts.app')

@section('title','Reservations-Hotels')

@section('content')
<div class="row pb-4 ">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Liste des Reservations Hotels
        </div>
        @if($reservations->count()>0)
        <div class="card-body">
            <table class="table table-hover mt-3">

                <tbody>
                    @foreach($reservations as $reservation)
                   <tr>

                        <td>{{ $reservation->user->name }}</td>
                        <td>{{ $reservation->date_arrive }} Au {{ $reservation->date_migration }} </td>
                        <td>{{ $reservation->nombre_chambre }} Chambres</td>
                        <td>
                            @if(!is_null($reservation->hotel))

                             {{ Str::limit($reservation->hotel->name, 50, '...') }}
                            @else
                            ----
                            @endif

                        </td>
                        <td>
                            {{ $reservation->prix }} TND /Jour
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



