<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Models\Restaurant as RestaurantModel;
use Livewire\WithPagination;
class Restaurant extends Component
{
    public $searchNom;
    public $searchPrix_min;
    public $searchPrix_max;
    public $searchVille;

    protected $queryString = ['searchNom', 'searchPrix_min','searchPrix_max', 'searchVille'];

    public function render()
    {
        $query = RestaurantModel::query();

        $query->when($this->searchNom, function ($q) {
            return $q->where('name', 'like', '%' . $this->searchNom . '%');
        });

        $query->when($this->searchPrix_min, function ($q) {
            $q->where('prix_table', '>=', $this->searchPrix_min);
        });
        $query->when($this->searchPrix_max, function ($q) {
            $q->where('prix_table', '<=', $this->searchPrix_max);
        });

        $query->when($this->searchVille, function ($q) {
            return $q->where('ville_id', '=', $this->searchVille);
        });

        $restaurants = $query->where('status', true)
                            ->orderBy('created_at', 'desc')
                            ->paginate(9);


        return view('livewire.website.restaurant', compact('restaurants'));
    }




}
