@extends('Admin.layouts.app')

@section('title','Liste des Clients')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">Liste des Clients</h5>
            @if($clients->count()>0)
            <div class="table-responsive text-nowrap">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Télephone</th>

                            <th>adresse</th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($clients as $client)
                        <tr>
                            <td><strong>{{ $client->name }}</strong></td>
                            <td>{{ $client->email }}</td>
                            <td>
                                {{ $client->phone }}
                            </td>
                           
                            <td>{{ Illuminate\Support\Str::limit($client->adresse, 50) }}</td>

                        </tr>
                        @endforeach


                    </tbody>
                    <caption class="ms-4">
                        {{ $clients->links('pagination::bootstrap-4') }}
                    </caption>
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
