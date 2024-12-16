@extends('Admin.layouts.app')

@section('title','Espace Admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">Villes</h5>
            @if($villes->count()>0)
            <div class="table-responsive text-nowrap">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Ville</th>
                            <th>Hotel</th>
                            <th>Restaurant</th>
                            <th>Evenements</th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($villes as $ville)
                        <tr>
                            <td><strong>{{ $ville->name }}</strong></td>
                            <td>{{ $ville->hotels->count() }}</td>
                            <td>
                                {{ $ville->restaurants->count() }}
                            </td>
                            <td>{{ $ville->evenements->count() }}</td>

                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            @else

            <div class="card-body">
                <span> <i class='bx bx-search-alt'></i> Données Non Disponibles ...</span>

            </div>

            @endif

        </div>
    </div>
</div>

@endsection
