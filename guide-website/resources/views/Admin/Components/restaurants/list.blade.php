@extends('Admin.layouts.app')

@section('title','Restaurants')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <h5 class="card-header">Liste des Restaurants</h5>
                </div>

            </div>

            @if($restaurants->count()>0)
            <div class="table-responsive text-nowrap">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Ville</th>
                            <th>Prix Table</th>
                            <th>Etat</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($restaurants as $restaurant)
                        <tr>
                            <td><strong>{{ $restaurant->name }}</strong></td>
                            <td>
                                @if(!is_null($restaurant->ville))
                                {{ $restaurant->ville->name }}
                                @else
                                ---
                                @endif
                            </td>
                            <td>
                                {{ $restaurant->prix_table }} TND
                            </td>
                            <td>
                                @if($restaurant->status)
                                <span class="badge bg-label-success me-1">publié</span>
                                @else
                                <span class="badge bg-label-danger me-1">en attente</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-sm btn-warning" title="edit"  href="{{ route('admin.restaurants.edit',$restaurant->id) }}"> <i class="bx bx-edit text-white"></i></a>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modaldelete{{$restaurant->id}}"><i class="bx bx-trash"></i> </button>
                                <div class="modal fade " id="modaldelete{{$restaurant->id}}" tabindex="-1" aria-modal="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modaldeleteTitle">Confirmation de Suppression</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <p class="text-danger">Êtes-vous sûr de vouloir supprimer ?</p>
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                    Annuler
                                                </button>
                                                <form  method="POST" action="{{ route('admin.restaurants.destroy',$restaurant->id) }}">
                                                    @csrf
                                                    @method('Delete')
                                                    <button type="submit" class="btn btn-danger" >
                                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;"></span>
                                                        Continuer</button>


                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        @endforeach


                    </tbody>
                    <caption class="ms-4">
                        {{ $restaurants->links('pagination::bootstrap-4') }}
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
