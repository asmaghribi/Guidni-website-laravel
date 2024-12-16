<?php

namespace App\Http\Livewire\Website;

use App\Models\Hotel as HotelModel;
use Livewire\Component;

class Hotel extends Component
{
    public $searchNom;
    public $searchPrix_min;
    public $searchPrix_max;
    public $searchVille;

    protected $queryString = ['searchNom', 'searchPrix_min','searchPrix_max', 'searchVille'];

    public function render()
    {
        $query = HotelModel::query();

        $query->when($this->searchNom, function ($q) {
            return $q->where('name', 'like', '%' . $this->searchNom . '%');
        });

        $query->when($this->searchPrix_min, function ($q) {
            $q->where('prix_chambre', '>=', $this->searchPrix_min);
        });
        $query->when($this->searchPrix_max, function ($q) {
            $q->where('prix_chambre', '<=', $this->searchPrix_max);
        });

        $query->when($this->searchVille, function ($q) {
            return $q->where('ville_id', '=', $this->searchVille);
        });

        $hotels = $query->where('status', true)
                            ->orderBy('created_at', 'desc')
                            ->paginate(9);

        return view('livewire.website.hotel',compact('hotels'));
    }
}
