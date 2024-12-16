@extends('Admin.layouts.app')

@section('title','Reservations-Événements')

@section('content')
<div class="row pb-4 ">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Liste des Reservations Événements
            </div>
            @if($reservations->count()>0)
            <div class="card-body">
                <table class="table table-hover mt-3">

                    <tbody>
                        @foreach($reservations as $reservation)
                        <tr>

                            <td>{{ $reservation->user->name }}</td>


                            <td>
                                @if(!is_null($reservation->evenement))

                                {{ Str::limit($reservation->evenement->name, 50, '...') }} le {{ $reservation->evenement->date_evenement }}
                                @else
                                ----
                                @endif

                            </td>
                            <td>
                                {{ $reservation->prix }} TND
                            </td>
                            <td>
                                @if($reservation->status=='pending')
                                <span class="badge badge-primary bg-primary">En ettente</span>
                                @endif
                                @if($reservation->status=='confirmed')
                                <span class="badge badge-success bg-success">Confirmé</span>
                                @endif
                                @if($reservation->status=='rejected')
                                <span class="badge badge-danger bg-danger">Rejeté</span>
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

@endsection
