<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role_user;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          //Empty the table first
          DB::statement('SET FOREIGN_KEY_CHECKS=0');

          // Tronquer la table
          DB::table('role_user')->truncate();
  
          // Insérer des données dans la table artists
          // Vos instructions d'insertion de données ici
  
          // Réactiver les contraintes de clé étrangère
          DB::statement('SET FOREIGN_KEY_CHECKS=1');
                  
          //Define data
          $roleUsers = [
              [
                  'role_id' => 1,
                  'user_id' => 1,
              ],
              [
                  'role_id' => 2,
                  'user_id' => 2,
              ],
              [
                'role_id' => 1,
                'user_id' => 3,
            ],
            [
                'role_id' => 2,
                'user_id' => 4,
            ],
            [
                'role_id' => 1,
                'user_id' => 5,
            ],
            [
                'role_id' => 2,
                'user_id' => 6,
            ],
            [
                'role_id' => 1,
                'user_id' => 7,
            ],
            [
                'role_id' => 2,
                'user_id' => 8,
            ],
            [
                'role_id' => 1,
                'user_id' => 9,
            ],
            [
                'role_id' => 2,
                'user_id' => 10,
            ],
              // Ajoutez d'autres données selon vos besoins
          ];
          
          //Insert data in the table
          DB::table('role_user')->insert($roleUsers);
    }
}
