<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Show;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Tronquer la table
        DB::table('shows')->truncate();

        // Insérer des données dans la table artists
        // Vos instructions d'insertion de données ici

        // Réactiver les contraintes de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
                
        //Define data
        $shows = [
            [
                'slug' => 'show-1',
                'title' => 'Show 1',
                'description' => 'Description for Show 1',
                'poster_url' => 'http://example.com/posters/show1.jpg',
                'location_id' => 1,
                'bookable' => true,
                'price' => 20.00,
            ],
            [
                'slug' => 'show-2',
                'title' => 'Show 2',
                'description' => 'Description for Show 2',
                'poster_url' => 'http://example.com/posters/show2.jpg',
                'location_id' => 2,
                'bookable' => true,
                'price' => 25.00,
            ],
            [
                'slug' => 'show-3',
                'title' => 'Show 3',
                'description' => 'Description for Show 3',
                'poster_url' => 'http://example.com/posters/show3.jpg',
                'location_id' => 3,
                'bookable' => true,
                'price' => 255.00,
            ],
            [
                'slug' => 'show-4',
                'title' => 'Show 4',
                'description' => 'Description for Show 4',
                'poster_url' => 'http://example.com/posters/show4.jpg',
                'location_id' => 4,
                'bookable' => true,
                'price' => 205.00,
            ],
            [
                'slug' => 'show-5',
                'title' => 'Show 5',
                'description' => 'Description for Show 5',
                'poster_url' => 'http://example.com/posters/show5.jpg',
                'location_id' => 5,
                'bookable' => true,
                'price' => 25.00,
            ],
            [
                'slug' => 'show-6',
                'title' => 'Show 6',
                'description' => 'Description for Show 6',
                'poster_url' => 'http://example.com/posters/show6.jpg',
                'location_id' => 6,
                'bookable' => true,
                'price' => 254.00,
            ],
            [
                'slug' => 'show-7',
                'title' => 'Show 7',
                'description' => 'Description for Show 7',
                'poster_url' => 'http://example.com/posters/show7.jpg',
                'location_id' => 7,
                'bookable' => true,
                'price' => 251.00,
            ],
            [
                'slug' => 'show-8',
                'title' => 'Show 8',
                'description' => 'Description for Show 8',
                'poster_url' => 'http://example.com/posters/show8.jpg',
                'location_id' => 8,
                'bookable' => true,
                'price' => 25.045,
            ],
            [
                'slug' => 'show-9',
                'title' => 'Show 9',
                'description' => 'Description for Show 9',
                'poster_url' => 'http://example.com/posters/show9.jpg',
                'location_id' => 9,
                'bookable' => true,
                'price' => 225.00,
            ],
            [
                'slug' => 'show-10',
                'title' => 'Show 10',
                'description' => 'Description for Show 10',
                'poster_url' => 'http://example.com/posters/show10.jpg',
                'location_id' => 10,
                'bookable' => true,
                'price' => 5.00,
            ],
        ];
        
        //Insert data in the table
        DB::table('shows')->insert($shows);
    }
}
