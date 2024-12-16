<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $villes = [
            ['name' => 'Tunis'],
            ['name' => 'Sfax'],
            ['name' => 'Sousse'],
            ['name' => 'Bizerte'],
            ['name' => 'Gabès'],
            ['name' => 'Nabeul'],
            ['name' => 'Kairouan'],
            ['name' => 'Gafsa'],
            ['name' => 'Ariana'],
            ['name' => 'Kasserine'],
            ['name' => 'Monastir'],
            ['name' => 'Tataouine'],
            ['name' => 'Médenine'],
            ['name' => 'Béja'],
            ['name' => 'Le Kef'],
            ['name' => 'Mahdia'],
            ['name' => 'La Manouba'],
            ['name' => 'Jendouba'],
            ['name' => 'Siliana'],
            ['name' => 'Tozeur'],
            ['name' => 'Kébili'],
            ['name' => 'Zaghouan'],
            ['name' => 'Ben Arous'],
        ];

        DB::table('villes')->insert($villes);
    }
}
