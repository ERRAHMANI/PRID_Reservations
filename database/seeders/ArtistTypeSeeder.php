<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist_type;
use Illuminate\Support\Facades\DB;



class ArtistTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Tronquer la table
        DB::table('artist_type')->truncate();

        // Insérer des données dans la table artists
        // Vos instructions d'insertion de données ici

        // Réactiver les contraintes de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        //Define data
        $artistTypes = [
            ['artist_id' => 1, 'type_id' => 1],
            ['artist_id' => 2, 'type_id' => 2],
            ['artist_id' => 3, 'type_id' => 3],
            ['artist_id' => 4, 'type_id' => 4],
            ['artist_id' => 5, 'type_id' => 5],
            ['artist_id' => 6, 'type_id' => 6],
            ['artist_id' => 7, 'type_id' => 7],
            ['artist_id' => 8, 'type_id' => 8],
            ['artist_id' => 9, 'type_id' => 9],
            ['artist_id' => 10, 'type_id' => 10],
        ];
        
        //Insert data in the table
        DB::table('artist_type')->insert($artistTypes);
    }
}
