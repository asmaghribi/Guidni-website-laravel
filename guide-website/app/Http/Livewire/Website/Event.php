<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;
use App\Models\Evenement;
class Event extends Component
{
    public $searchNom;
    public $searchPrix_min;
    public $searchPrix_max;
    public $searchVille;

    protected $queryString = ['searchNom', 'searchPrix_min','searchPrix_max', 'searchVille'];

    public function render()
    {
        $query = Evenement::query();

        $query->when($this->searchNom, function ($q) {
            return $q->where('name', 'like', '%' . $this->searchNom . '%');
        });

        $query->when($this->searchPrix_min, function ($q) {
            $q->where('prix_reservation', '>=', $this->searchPrix_min);
        });
        $query->when($this->searchPrix_max, function ($q) {
            $q->where('prix_reservation', '<=', $this->searchPrix_max);
        });

        $query->when($this->searchVille, function ($q) {
            return $q->where('ville_id', '=', $this->searchVille);
        });

        $events = $query->where('status', true)
                            ->orderBy('created_at', 'desc')
                            ->paginate(9);
        return view('livewire.website.event',compact('events'));
    }
}
