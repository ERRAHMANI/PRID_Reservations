<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Representation_user;

class RepresentationUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Tronquer la table
        DB::table('representation_user')->truncate();

        // Insérer des données dans la table artists
        // Vos instructions d'insertion de données ici

        // Réactiver les contraintes de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
              
        //Define data
        $representationUsers = [
            [
                'representation_id' => 1,
                'user_id' => 1,
                'places' => 5,
            ],
            [
                'representation_id' => 1,
                'user_id' => 2,
                'places' => 3,
            ],
        ];
        
        //Insert data in the table
        DB::table('representation_user')->insert($representationUsers);
    }
}
