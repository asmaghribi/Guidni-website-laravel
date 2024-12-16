@extends('Supplier.layouts.app')

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
                    @if($reservation->status=='pending')
                    <tr class="bg-info text-white">
                    @endif
                    @if($reservation->status=='confirmed')
                    <tr class="bg-success text-white">
                    @endif
                    @if($reservation->status=='rejected')
                    <tr class="bg-danger text-white">
                    @endif

                        <td>{{ $reservation->user->name }}</td>
                        <td>{{ $reservation->date_arrive }} au {{ $reservation->date_migration }}</td>
                        <td>{{ $reservation->nombre_chambre }} Chambres</td>

                        <td>
                            {{ $reservation->prix }} TND /Jour
                        </td>
                        <td class="d-flex">
                            @if($reservation->status=='pending')

                            <form action="{{ route('supplier.changerstatusreservations_Hotels',$reservation->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="status" value="confirmed">
                                <button type="submit" class=" btn btn-sm text-white border-white border" title="confirmer">
                                    <i class=" bx bx-check-double"></i>
                                </button>
                            </form>
                            <form action="{{ route('supplier.changerstatusreservations_Hotels',$reservation->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="status" value="rejected">
                                <button type="submit" class=" ms-1 btn btn-sm text-white border-white border" title="refuser">
                                    <i class="bx bx-block"></i>
                                </button>
                            </form>
                            @endif
                            @if($reservation->status=='confirmed')
                            <form action="{{ route('supplier.changerstatusreservations_Hotels',$reservation->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="status" value="pending">
                                <button type="submit" class="btn btn-sm text-white border-white border" title="annuler">
                                    <i class=" bx bx-check"></i>
                                </button>
                            </form>
                            <form action="{{ route('supplier.changerstatusreservations_Hotels',$reservation->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="status" value="rejected">
                                <button type="submit" class=" ms-1 btn btn-sm text-white border-white border" title="refuser">
                                    <i class="bx bx-block"></i>
                                </button>
                            </form>
                            @endif
                            @if($reservation->status=='rejected')
                            <form action="{{ route('supplier.changerstatusreservations_Hotels',$reservation->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="status" value="pending">
                                <button type="submit" class="btn btn-sm text-white border-white border" title="annuler">
                                    <i class=" bx bx-check"></i>
                                </button>
                            </form>
                            <form action="{{ route('supplier.changerstatusreservations_Hotels',$reservation->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="status" value="confirmed">
                                <button type="submit" class=" ms-1 btn btn-sm text-white border-white border" title="confirmer">
                                    <i class=" bx bx-check-double"></i>
                                </button>
                            </form>
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



