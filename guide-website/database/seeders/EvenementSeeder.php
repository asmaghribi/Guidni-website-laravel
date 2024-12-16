<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $evenements = [
            [
                'name' => 'Music Festival',
                'date_evenement' => now()->addMonths(1),
                'ville_id' => 1, // Assurez-vous que l'ID de la ville existe
                'supplier_id' => 1, // Assurez-vous que l'ID du fournisseur existe
                'adresse' => 'Concert Hall, 123 Main Street',
                'description' => 'An exciting music festival featuring top artists.',
                'latitude' => '37.7749',
                'longitude' => '-122.4194',
                'prix_reservation' => 25.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',
            ],
            [
                'name' => 'Food Expo',
                'date_evenement' => now()->addMonths(2),
                'ville_id' => 2, // Assurez-vous que l'ID de la ville existe
                'supplier_id' => 2, // Assurez-vous que l'ID du fournisseur existe
                'adresse' => 'Exhibition Center, 456 Oak Avenue',
                'description' => 'A culinary experience showcasing a variety of cuisines.',
                'latitude' => '34.0522',
                'longitude' => '-118.2437',
                'prix_reservation' => 15.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Tech Conference',
                'date_evenement' => now()->addMonths(3),
                'ville_id' => 3, // Assurez-vous que l'ID de la ville existe
                'supplier_id' => 1, // Assurez-vous que l'ID du fournisseur existe
                'adresse' => 'Convention Center, 789 Elm Street',
                'description' => 'A conference featuring the latest in technology and innovation.',
                'latitude' => '40.7128',
                'longitude' => '-74.0060',
                'prix_reservation' => 30.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Art Exhibition',
                'date_evenement' => now()->addMonths(4),
                'ville_id' => 4, // Assurez-vous que l'ID de la ville existe
                'supplier_id' => 2, // Assurez-vous que l'ID du fournisseur existe
                'adresse' => 'Art Gallery, 987 Elm Street',
                'description' => 'An exhibition showcasing diverse artworks from local artists.',
                'latitude' => '41.8781',
                'longitude' => '-87.6298',
                'prix_reservation' => 20.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Fashion Show',
                'date_evenement' => now()->addMonths(5),
                'ville_id' => 1,
                'supplier_id' => 1,
                'adresse' => 'Fashion Center, 567 Pine Street',
                'description' => 'A glamorous fashion show featuring the latest trends.',
                'latitude' => '37.7749',
                'longitude' => '-122.4194',
                'prix_reservation' => 35.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Science Fair',
                'date_evenement' => now()->addMonths(6),
                'ville_id' => 2,
                'supplier_id' => 2,
                'adresse' => 'Science Museum, 678 Maple Avenue',
                'description' => 'An educational science fair showcasing experiments and innovations.',
                'latitude' => '34.0522',
                'longitude' => '-118.2437',
                'prix_reservation' => 10.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Film Festival',
                'date_evenement' => now()->addMonths(7),
                'ville_id' => 3,
                'supplier_id' => 1,
                'adresse' => 'Movie Theater, 789 Oak Street',
                'description' => 'A film festival featuring a diverse selection of international films.',
                'latitude' => '40.7128',
                'longitude' => '-74.0060',
                'prix_reservation' => 18.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Sports Tournament',
                'date_evenement' => now()->addMonths(8),
                'ville_id' => 4,
                'supplier_id' => 2,
                'adresse' => 'Sports Complex, 876 Elm Street',
                'description' => 'A competitive sports tournament with various disciplines.',
                'latitude' => '41.8781',
                'longitude' => '-87.6298',
                'prix_reservation' => 25.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Gastronomy Festival',
                'date_evenement' => now()->addMonths(9),
                'ville_id' => 1,
                'supplier_id' => 1,
                'adresse' => 'Culinary Center, 234 Pine Street',
                'description' => 'A celebration of gastronomy with renowned chefs and delicious cuisines.',
                'latitude' => '37.7749',
                'longitude' => '-122.4194',
                'prix_reservation' => 40.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Literature Expo',
                'date_evenement' => now()->addMonths(10),
                'ville_id' => 2,
                'supplier_id' => 2,
                'adresse' => 'Book Fair, 345 Maple Avenue',
                'description' => 'An exposition of literature featuring authors and book signings.',
                'latitude' => '34.0522',
                'longitude' => '-118.2437',
                'prix_reservation' => 15.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Environmental Summit',
                'date_evenement' => now()->addMonths(11),
                'ville_id' => 3,
                'supplier_id' => 1,
                'adresse' => 'Environmental Conference Center, 456 Oak Street',
                'description' => 'A summit addressing environmental issues with experts and activists.',
                'latitude' => '40.7128',
                'longitude' => '-74.0060',
                'prix_reservation' => 20.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Tech Expo',
                'date_evenement' => now()->addMonths(12),
                'ville_id' => 4,
                'supplier_id' => 2,
                'adresse' => 'Tech Convention Center, 567 Elm Street',
                'description' => 'An expo showcasing the latest in technology and innovations.',
                'latitude' => '41.8781',
                'longitude' => '-87.6298',
                'prix_reservation' => 30.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Health and Wellness Expo',
                'date_evenement' => now()->addMonths(13),
                'ville_id' => 1,
                'supplier_id' => 1,
                'adresse' => 'Wellness Center, 123 Pine Street',
                'description' => 'An expo promoting health and well-being with fitness experts and workshops.',
                'latitude' => '37.7749',
                'longitude' => '-122.4194',
                'prix_reservation' => 25.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Comedy Night',
                'date_evenement' => now()->addMonths(14),
                'ville_id' => 2,
                'supplier_id' => 2,
                'adresse' => 'Comedy Club, 456 Maple Avenue',
                'description' => 'A night of laughter with stand-up comedians and hilarious performances.',
                'latitude' => '34.0522',
                'longitude' => '-118.2437',
                'prix_reservation' => 20.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],

            [
                'name' => 'Business Summit',
                'date_evenement' => now()->addMonths(15),
                'ville_id' => 3,
                'supplier_id' => 1,
                'adresse' => 'Business Conference Center, 789 Oak Street',
                'description' => 'A summit focusing on business strategies, leadership, and networking.',
                'latitude' => '40.7128',
                'longitude' => '-74.0060',
                'prix_reservation' => 30.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Cultural Festival',
                'date_evenement' => now()->addMonths(16),
                'ville_id' => 4,
                'supplier_id' => 2,
                'adresse' => 'Cultural Center, 987 Elm Street',
                'description' => 'A festival celebrating diverse cultures with performances and exhibitions.',
                'latitude' => '41.8781',
                'longitude' => '-87.6298',
                'prix_reservation' => 15.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Tech Summit',
                'date_evenement' => now()->addMonths(17),
                'ville_id' => 1,
                'supplier_id' => 1,
                'adresse' => 'Tech Expo Center, 123 Pine Street',
                'description' => 'A summit bringing together tech enthusiasts and experts.',
                'latitude' => '37.7749',
                'longitude' => '-122.4194',
                'prix_reservation' => 35.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Fashion Week',
                'date_evenement' => now()->addMonths(18),
                'ville_id' => 2,
                'supplier_id' => 2,
                'adresse' => 'Fashion District, 456 Maple Avenue',
                'description' => 'A week-long celebration of fashion showcasing designer collections.',
                'latitude' => '34.0522',
                'longitude' => '-118.2437',
                'prix_reservation' => 40.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Outdoor Adventure Expo',
                'date_evenement' => now()->addMonths(19),
                'ville_id' => 3,
                'supplier_id' => 1,
                'adresse' => 'Adventure Park, 789 Oak Street',
                'description' => 'An expo for outdoor enthusiasts featuring gear, activities, and workshops.',
                'latitude' => '40.7128',
                'longitude' => '-74.0060',
                'prix_reservation' => 20.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],
            [
                'name' => 'Music Awards Night',
                'date_evenement' => now()->addMonths(20),
                'ville_id' => 4,
                'supplier_id' => 2,
                'adresse' => 'Music Hall, 987 Elm Street',
                'description' => 'A night honoring outstanding achievements in the music industry.',
                'latitude' => '41.8781',
                'longitude' => '-87.6298',
                'prix_reservation' => 25.00,
                'status' => true,
                'images'=>'https://www.dynamique-mag.com/wp-content/uploads/94d8155cb7f2702d2b914dbfb56699d5.jpg',

            ],


        ];

        DB::table('evenements')->insert($evenements);
    }
}
