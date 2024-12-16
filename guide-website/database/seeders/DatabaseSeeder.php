<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\UserSeeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\HotelSeeder;
use Database\Seeders\VilleSeeder;
use Database\Seeders\SupplierSeeder;
use Database\Seeders\EvenementSeeder;
use Database\Seeders\RestaurantSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(VilleSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(HotelSeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(EvenementSeeder::class);
        $this->call(AdminSeeder::class);

    }
}
