<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Representation;

class RepresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Tronquer la table
        DB::table('representations')->truncate();

        // Insérer des données dans la table artists
        // Vos instructions d'insertion de données ici

        // Réactiver les contraintes de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
                
        //Define data
        $representations = [
            ['show_id' => 1, 'when' => '2024-04-01 20:00:00', 'location_id' => 1],
            ['show_id' => 2, 'when' => '2024-04-02 19:30:00', 'location_id' => 2],
            ['show_id' => 3, 'when' => '2024-04-03 18:00:00', 'location_id' => 3],
            ['show_id' => 4, 'when' => '2024-04-04 20:00:00', 'location_id' => 4],
            ['show_id' => 5, 'when' => '2024-04-05 19:00:00', 'location_id' => 5],
            ['show_id' => 6, 'when' => '2024-04-06 21:00:00', 'location_id' => 6],
            ['show_id' => 7, 'when' => '2024-04-07 20:30:00', 'location_id' => 7],
            ['show_id' => 8, 'when' => '2024-04-08 18:30:00', 'location_id' => 8],
            ['show_id' => 9, 'when' => '2024-04-09 19:45:00', 'location_id' => 9],
            ['show_id' => 10, 'when' => '2024-04-10 17:00:00', 'location_id' => 10],
        ];
        
        //Insert data in the table
        DB::table('representations')->insert($representations);
    }
}
