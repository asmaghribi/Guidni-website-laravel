<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = [
            [
                'name' => 'Supplier One',
                'phone' => '123456789',
                'email' => 'fournisseur@gmail.com',
                'password' => Hash::make('123456789'),
                'fax' => '987654321',
                'status' => true,
            ],
            [
                'name' => 'Supplier Two',
                'phone' => '987654321',
                'email' => 'fournisseur1@example.com',
                'password' => Hash::make('123456789'),
                'fax' => '123456789',
                'status' => true,
            ],
        ];

        DB::table('suppliers')->insert($suppliers);
    }
}
