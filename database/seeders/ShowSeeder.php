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
        Show::truncate();        
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
        ];
        
        //Insert data in the table
        DB::table('shows')->insert($shows);
    }
}
