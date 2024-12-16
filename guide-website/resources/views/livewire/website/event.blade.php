<div>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1  ">
                        <form class="search-property-1">

                            <div class="row no-gutters">
                                <div class="col-md-4 d-flex">
                                    <div class="form-group p-4 border-0">
                                        <label for="#">Nom</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="fa fa-search"></span></div>
                                            <input wire:model.debounce.50ms="searchNom" type="text" class="form-control" placeholder="Recherche par text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex">
                                    <div class="form-group p-4">
                                        <label for="#">Prix</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="fa fa-dollar"></span></div>
                                            <div class="d-flex">
                                                <input wire:model.debounce.500ms="searchPrix_min" type="text" class="form-control" placeholder="Prix  Table  min">
                                                <input wire:model.debounce.500ms="searchPrix_max" type="text" class="form-control" placeholder="Prix  Table  max">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex">
                                    <div class="form-group p-4">
                                        <label for="#">Ville</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-map-marker"></span></div>
                                                <select wire:model="searchVille" class="form-control">
                                                    <option value="">Selectionner Ville</option>
                                                    @foreach(App\Models\Ville::all() as $ville)
                                                    <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach($events as $event)
                <div class="col-md-4 ">
                    <div class="project-wrap">
                        <a href="{{ route('eventByID',$event->id) }}" class="img" style="background-image: url({{ asset($event->images ?? 'http://placehold.it/200x200') }});">
                            <span class="price">{{ $event->prix_reservation }}TND </span>
                        </a>
                        <div class="text p-4">
                            <span class="days">{{ $event->ville->name }}</span>
                            <h3><a href="#">{{ $event->name }}</a></h3>
                            @php
                            Carbon\Carbon::setLocale('fr');
                        @endphp
                            <ul>
                                <li><span class="flaticon-shower"></span> Le {{ Carbon\Carbon::parse($event->date_evenement)->isoFormat('dddd DD MMMM YYYY', 'Do MMMM YYYY') }}
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-5 text-center">
                <div class="col-auto mx-auto">

                    {{ $events->links('pagination::bootstrap-4') }}

                </div>
            </div>
        </div>
    </section>

</div>
