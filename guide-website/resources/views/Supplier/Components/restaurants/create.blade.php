@extends('Supplier.layouts.app')

@section('title','Nouveau Restaurant')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <h5 class="card-header">Nouveau Restaurant</h5>
                </div>

            </div>
            <div class="row px-3">
                <form action="{{ route('supplier.restaurants.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <!-- Restaurant Name -->
                        <div class="col-md-6 mb-3">
                            <label for="ville_id" class="form-label">Ville</label>
                            <select class="form-control @error('ville_id') is-invalid @enderror" id="ville_id" name="ville_id" value="{{ old('ville_id') }}" required>
                                @foreach(App\Models\Ville::all() as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                @endforeach
                            </select>
                            @error('ville_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="prix_table" class="form-label">Prix/Table</label>
                            <input type="text" class="form-control @error('prix_table') is-invalid @enderror" id="prix_table" name="prix_table" value="{{ old('prix_table') }}" >
                            @error('prix_table')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="images" class="form-label">Image</label>
                            <input type="file" class="form-control @error('images') is-invalid @enderror" id="images" name="images" accept="image/*" >
                            @error('images')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="adresse" class="form-label">Adresse</label>
                            <textarea name="adresse" class="form-control @error('adresse') is-invalid @enderror" style="resize: none">{{ old('adresse') }}</textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" style="resize: none">{{ old('description') }}</textarea>
                        </div>


                    </div>

                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-2 mt-3">Ajouter</button>

                        </div>
                        <div class="col-auto">
                            <a href="{{ route('supplier.restaurants') }}" class="btn btn-warning mb-2 mt-3">Quitter</a>
                        </div>
                    </div>
                </form>
            </div>



        </div>
    </div>
</div>

@endsection
