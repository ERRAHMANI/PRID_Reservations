<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Empty the table first
        Role::truncate();        
        //Define data
        $roles = [
            ['role' => 'Admin'],
            ['role' => 'Member'],
            // Ajoutez d'autres données selon vos besoins
        ];
        
        //Insert data in the table
        DB::table('roles')->insert($roles);
    }
}
