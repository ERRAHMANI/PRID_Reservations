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

        // Réactiver les contraintes de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
                
        // Define data
        $shows = [
            [
                'slug' => 'paris-magic-night',
                'title' => 'Paris Magic Night',
                'description' => 'An enchanting night of magic and wonder in the heart of Paris.',
                'poster_url' => 'http://example.com/posters/paris-magic-night.jpg',
                'location_id' => 1,
                'bookable' => true,
                'price' => 30.00,
            ],
            [
                'slug' => 'london-theatre-festival',
                'title' => 'London Theatre Festival',
                'description' => 'A celebration of the best theatre performances from around the world.',
                'poster_url' => 'http://example.com/posters/london-theatre-festival.jpg',
                'location_id' => 2,
                'bookable' => true,
                'price' => 45.00,
            ],
            [
                'slug' => 'berlin-electro-beats',
                'title' => 'Berlin Electro Beats',
                'description' => 'Experience the pulsating beats of Berlin\'s top electronic music artists.',
                'poster_url' => 'http://example.com/posters/berlin-electro-beats.jpg',
                'location_id' => 3,
                'bookable' => true,
                'price' => 50.00,
            ],
            [
                'slug' => 'broadway-musical-extravaganza',
                'title' => 'Broadway Musical Extravaganza',
                'description' => 'A stunning showcase of Broadway\'s most beloved musicals.',
                'poster_url' => 'http://example.com/posters/broadway-musical-extravaganza.jpg',
                'location_id' => 4,
                'bookable' => true,
                'price' => 150.00,
            ],
            [
                'slug' => 'tokyo-dance-fusion',
                'title' => 'Tokyo Dance Fusion',
                'description' => 'A dynamic fusion of traditional and modern dance styles in Tokyo.',
                'poster_url' => 'http://example.com/posters/tokyo-dance-fusion.jpg',
                'location_id' => 5,
                'bookable' => true,
                'price' => 70.00,
            ],
            [
                'slug' => 'sydney-opera-night',
                'title' => 'Sydney Opera Night',
                'description' => 'A grand night of opera performances at the iconic Sydney Opera House.',
                'poster_url' => 'http://example.com/posters/sydney-opera-night.jpg',
                'location_id' => 6,
                'bookable' => true,
                'price' => 120.00,
            ],
            [
                'slug' => 'toronto-film-festival',
                'title' => 'Toronto Film Festival',
                'description' => 'A premier film festival showcasing the best in international cinema.',
                'poster_url' => 'http://example.com/posters/toronto-film-festival.jpg',
                'location_id' => 7,
                'bookable' => true,
                'price' => 60.00,
            ],
            [
                'slug' => 'dubai-jazz-festival',
                'title' => 'Dubai Jazz Festival',
                'description' => 'A vibrant festival celebrating the finest in jazz music from around the world.',
                'poster_url' => 'http://example.com/posters/dubai-jazz-festival.jpg',
                'location_id' => 8,
                'bookable' => true,
                'price' => 80.00,
            ],
            [
                'slug' => 'singapore-art-week',
                'title' => 'Singapore Art Week',
                'description' => 'An immersive week-long event celebrating contemporary art in Singapore.',
                'poster_url' => 'http://example.com/posters/singapore-art-week.jpg',
                'location_id' => 9,
                'bookable' => true,
                'price' => 40.00,
            ],
            [
                'slug' => 'moscow-ballet-gala',
                'title' => 'Moscow Ballet Gala',
                'description' => 'A prestigious gala featuring performances by world-renowned ballet dancers.',
                'poster_url' => 'http://example.com/posters/moscow-ballet-gala.jpg',
                'location_id' => 10,
                'bookable' => true,
                'price' => 100.00,
            ],
        ];

        // Insert data into the table
        DB::table('shows')->insert($shows);
    }
}
