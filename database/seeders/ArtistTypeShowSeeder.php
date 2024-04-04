<?php

namespace Database\Seeders;

use App\Models\Artist_type_show;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ArtistTypeShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Artist_type_show::truncate();
        
    //Define data
    $artistTypeShows = [
        ['artist_type_id' => 1, 'show_id' => 1],
        ['artist_type_id' => 2, 'show_id' => 2],
        ['artist_type_id' => 3, 'show_id' => 3],
        ['artist_type_id' => 4, 'show_id' => 4],
        ['artist_type_id' => 5, 'show_id' => 5],
        ['artist_type_id' => 6, 'show_id' => 6],
        ['artist_type_id' => 7, 'show_id' => 7],
        ['artist_type_id' => 8, 'show_id' => 8],
        ['artist_type_id' => 9, 'show_id' => 9],
        ['artist_type_id' => 10, 'show_id' => 10],
    ];
    DB::table('artist_type_show')->insert($artistTypeShows);

    }
    
    //Insert data in the table
}
