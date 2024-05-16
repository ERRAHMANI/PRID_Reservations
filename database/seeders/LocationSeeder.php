<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Location;


class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Tronquer la table
        DB::table('locations')->truncate();

        // Insérer des données dans la table artists
        // Vos instructions d'insertion de données ici

        // Réactiver les contraintes de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
                
         //Define data
         $locations = [
             [
                 'slug' => 'location-1',
                 'designation' => 'Location 1',
                 'address' => '123 Main Street',
                 'locality_id' => 1,
                 'website' => 'http://www.example.com/location1',
                 'phone' => '123-456-7890',
             ],
             [
                 'slug' => 'location-2',
                 'designation' => 'Location 2',
                 'address' => '456 Elm Street',
                 'locality_id' => 2,
                 'website' => 'http://www.example.com/location2',
                 'phone' => '456-789-0123',
             ],
             [
                'slug' => 'location-3',
                'designation' => 'Location 3',
                'address' => '456 Elm Street',
                'locality_id' => 2,
                'website' => 'http://www.example.com/location2',
                'phone' => '456-789-0123',
            ],
            [
                'slug' => 'location-4',
                'designation' => 'Location 4',
                'address' => '456 Elm Street',
                'locality_id' => 2,
                'website' => 'http://www.example.com/location2',
                'phone' => '456-789-0123',
            ],
            [
                'slug' => 'location-5',
                'designation' => 'Location 5',
                'address' => '456 Elm Street',
                'locality_id' => 2,
                'website' => 'http://www.example.com/location2',
                'phone' => '456-789-0123',
            ],
            [
                'slug' => 'location-26',
                'designation' => 'Location 6',
                'address' => '456 Elm Street',
                'locality_id' => 2,
                'website' => 'http://www.example.com/location2',
                'phone' => '456-789-0123',
            ],
            [
                'slug' => 'location-7',
                'designation' => 'Location 7',
                'address' => '456 Elm Street',
                'locality_id' => 2,
                'website' => 'http://www.example.com/location2',
                'phone' => '456-789-0123',
            ],
            [
                'slug' => 'location-8',
                'designation' => 'Location 8',
                'address' => '456 Elm Street',
                'locality_id' => 2,
                'website' => 'http://www.example.com/location2',
                'phone' => '456-789-0123',
            ],
            [
                'slug' => 'location-9',
                'designation' => 'Location 9',
                'address' => '456 Elm Street',
                'locality_id' => 2,
                'website' => 'http://www.example.com/location2',
                'phone' => '456-789-0123',
            ],
            [
                'slug' => 'location-10',
                'designation' => 'Location 10',
                'address' => '456 Elm Street',
                'locality_id' => 2,
                'website' => 'http://www.example.com/location2',
                'phone' => '456-789-0123',
            ],
         ];
         
         DB::table('locations')->insert($locations);
    }
}
