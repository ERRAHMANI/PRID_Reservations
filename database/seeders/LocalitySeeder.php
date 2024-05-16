<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Locality;



class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Tronquer la table
        DB::table('localities')->truncate();

        // Insérer des données dans la table artists
        // Vos instructions d'insertion de données ici

        // Réactiver les contraintes de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        

        // Define data
        $localities = [
            [
                'postal_code' => '75001',
                'locality' => 'Paris',
            ],
            [
                'postal_code' => '69001',
                'locality' => 'Lyon',
            ],
            [
                'postal_code' => '31000',
                'locality' => 'Toulouse',
            ],
            [
                'postal_code' => '44000',
                'locality' => 'Nantes',
            ],
            [
                'postal_code' => '33000',
                'locality' => 'Bordeaux',
            ],
            [
                'postal_code' => '13000',
                'locality' => 'Marseille',
            ],
            [
                'postal_code' => '59000',
                'locality' => 'Lille',
            ],
            [
                'postal_code' => '67000',
                'locality' => 'Strasbourg',
            ],
            [
                'postal_code' => '67000',
                'locality' => 'Nice',
            ],
            [
                'postal_code' => '75000',
                'locality' => 'Lyon',
            ],
        ];

        // Insert data in the table
        DB::table('localities')->insert($localities);
    }
}
