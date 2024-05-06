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
        Role_user::truncate();        
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
              // Ajoutez d'autres données selon vos besoins
          ];
          
          //Insert data in the table
          DB::table('role_user')->insert($roleUsers);
    }
}
