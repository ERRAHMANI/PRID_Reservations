<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Type;

class TypeSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Tronquer la table
        DB::table('types')->truncate();

        // Insérer des données dans la table artists
        // Vos instructions d'insertion de données ici

        // Réactiver les contraintes de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        
        //Define data
       $types = [
            ['type'=>'rock'],
            ['type'=>'rap'],
            ['type'=>'r&b'],
            ['type'=>'pop'],
            ['type'=>'metal'],
            ['type'=>'hip-hop'],
            ['type'=>'electro'],
            ['type'=>'blues'],
            ['type'=>'reggae'],
            ['type'=>'classique'],
            ['type'=>'country'],
        ];
        
        //Insert data in the table
        DB::table('types')->insert($types);
    }
    
}
