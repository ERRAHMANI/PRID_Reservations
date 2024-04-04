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
         //Empty the table first
        Location::truncate();        
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
         ];
         
         DB::table('locations')->insert($locations);
    }
}
