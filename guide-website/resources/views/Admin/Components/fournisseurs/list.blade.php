@extends('Admin.layouts.app')

@section('title','Liste des Fournisseurs')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">Liste des Fournisseurs</h5>
            @if($fournisseurs->count()>0)
            <div class="table-responsive text-nowrap">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Télephone</th>
                            <th>Fax</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($fournisseurs as $fournisseur)
                        <tr>
                            <td><strong>{{ $fournisseur->name }}</strong></td>
                            <td>{{ $fournisseur->email }}</td>
                            <td>
                                {{ $fournisseur->phone }}
                            </td>
                            <td>{{ $fournisseur->fax }}</td>
                            <td>
                                <form method="post" action="{{ route('admin.UpdateStatus',$fournisseur->id) }}">
                                    @csrf
                                    @method('put')
                                    @if($fournisseur->status)
                                    <button class="btn btn-danger btn-sm" type="submmit" title="">Désactiver</button>
                                    @else
                                    <button class="btn btn-success btn-sm" type="submmit" title="">Activer</button>

                                    @endif

                                </form>

                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                    <caption class="ms-4">
                        {{ $fournisseurs->links('pagination::bootstrap-4') }}
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
