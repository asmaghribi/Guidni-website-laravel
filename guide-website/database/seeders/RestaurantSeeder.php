<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
            [
                'name' => 'Fine Dining Place',
                'ville_id' => 1, // Assurez-vous que l'ID de la ville existe
                'supplier_id' => 1, // Assurez-vous que l'ID du fournisseur existe
                'adresse' => '123 Main Street',
                'description' => 'An upscale restaurant offering fine dining experience.',
                'latitude' => '37.7749',
                'longitude' => '-122.4194',
                'prix_table' => 50.00,
                'status' => true,
            ],
            [
                'name' => 'Family Bistro',
                'ville_id' => 2, // Assurez-vous que l'ID de la ville existe
                'supplier_id' => 2, // Assurez-vous que l'ID du fournisseur existe
                'adresse' => '456 Oak Avenue',
                'description' => 'A family-friendly restaurant with a diverse menu.',
                'latitude' => '34.0522',
                'longitude' => '-118.2437',
                'prix_table' => 30.00,
                'status' => true,
            ],
            [
                'name' => 'Cafe on the Corner',
                'ville_id' => 3, // Assurez-vous que l'ID de la ville existe
                'supplier_id' => 2, // Assurez-vous que l'ID du fournisseur existe
                'adresse' => '789 Elm Street',
                'description' => 'A cozy cafe serving delicious coffee and pastries.',
                'latitude' => '40.7128',
                'longitude' => '-74.0060',
                'prix_table' => 20.00,
                'status' => true,
            ],
        ];

        DB::table('restaurants')->insert($restaurants);
    }
}
