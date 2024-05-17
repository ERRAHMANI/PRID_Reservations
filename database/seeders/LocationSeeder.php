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

        // Réactiver les contraintes de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
                
        // Define data
        $locations = [
            [
                'slug' => 'paris-center',
                'designation' => 'Paris Center',
                'address' => '10 Rue de Rivoli',
                'locality_id' => 1,
                'website' => 'http://www.pariscenter.com',
                'phone' => '01-23-45-67-89',
            ],
            [
                'slug' => 'london-downtown',
                'designation' => 'London Downtown',
                'address' => '20 Oxford Street',
                'locality_id' => 2,
                'website' => 'http://www.londondowntown.co.uk',
                'phone' => '+44-20-7946-0958',
            ],
            [
                'slug' => 'berlin-mitte',
                'designation' => 'Berlin Mitte',
                'address' => '15 Unter den Linden',
                'locality_id' => 3,
                'website' => 'http://www.berlinmitte.de',
                'phone' => '+49-30-123456',
            ],
            [
                'slug' => 'new-york-central',
                'designation' => 'New York Central',
                'address' => '500 5th Avenue',
                'locality_id' => 4,
                'website' => 'http://www.newyorkcentral.com',
                'phone' => '+1-212-555-7890',
            ],
            [
                'slug' => 'tokyo-shibuya',
                'designation' => 'Tokyo Shibuya',
                'address' => '1-2-3 Shibuya',
                'locality_id' => 5,
                'website' => 'http://www.tokyoshibuya.jp',
                'phone' => '+81-3-1234-5678',
            ],
            [
                'slug' => 'sydney-harbour',
                'designation' => 'Sydney Harbour',
                'address' => '7 Circular Quay',
                'locality_id' => 6,
                'website' => 'http://www.sydneyharbour.com.au',
                'phone' => '+61-2-1234-5678',
            ],
            [
                'slug' => 'toronto-downtown',
                'designation' => 'Toronto Downtown',
                'address' => '100 Queen Street',
                'locality_id' => 7,
                'website' => 'http://www.torontodowntown.ca',
                'phone' => '+1-416-555-1234',
            ],
            [
                'slug' => 'dubai-marina',
                'designation' => 'Dubai Marina',
                'address' => '200 Marina Walk',
                'locality_id' => 8,
                'website' => 'http://www.dubaimarina.ae',
                'phone' => '+971-4-567-1234',
            ],
            [
                'slug' => 'singapore-central',
                'designation' => 'Singapore Central',
                'address' => '30 Orchard Road',
                'locality_id' => 9,
                'website' => 'http://www.singaporecentral.sg',
                'phone' => '+65-1234-5678',
            ],
            [
                'slug' => 'moscow-red-square',
                'designation' => 'Moscow Red Square',
                'address' => '5 Red Square',
                'locality_id' => 10,
                'website' => 'http://www.moscowredsquare.ru',
                'phone' => '+7-495-123-4567',
            ],
        ];

        DB::table('locations')->insert($locations);
    }
}
