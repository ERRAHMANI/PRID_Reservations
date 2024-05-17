<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Tronquer la table
        DB::table('users')->truncate();

        // Réactiver les contraintes de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        // Define data
        $users = [
            [
                'login' => 'johnsmith',
                'firstname' => 'John',
                'lastname' => 'Smith',
                'email' => 'john.smith@example.com',
                'password' => 'password123',
                'langue' => 'en',
                'role' => 'admin',
            ],
            [
                'login' => 'janedoe',
                'firstname' => 'Jane',
                'lastname' => 'Doe',
                'email' => 'jane.doe@example.com',
                'password' => 'password123',
                'langue' => 'en',
                'role' => 'member',
            ],
            [
                'login' => 'peterparker',
                'firstname' => 'Peter',
                'lastname' => 'Parker',
                'email' => 'peter.parker@example.com',
                'password' => 'spiderman123',
                'langue' => 'en',
                'role' => 'admin',
            ],
            [
                'login' => 'maryjane',
                'firstname' => 'Mary',
                'lastname' => 'Jane',
                'email' => 'mary.jane@example.com',
                'password' => 'password123',
                'langue' => 'en',
                'role' => 'member',
            ],
            [
                'login' => 'brucewayne',
                'firstname' => 'Bruce',
                'lastname' => 'Wayne',
                'email' => 'bruce.wayne@example.com',
                'password' => 'batman123',
                'langue' => 'en',
                'role' => 'admin',
            ],
            [
                'login' => 'clarkkent',
                'firstname' => 'Clark',
                'lastname' => 'Kent',
                'email' => 'clark.kent@example.com',
                'password' => 'superman123',
                'langue' => 'en',
                'role' => 'member',
            ],
            [
                'login' => 'dianaprince',
                'firstname' => 'Diana',
                'lastname' => 'Prince',
                'email' => 'diana.prince@example.com',
                'password' => 'wonderwoman123',
                'langue' => 'en',
                'role' => 'admin',
            ],
            [
                'login' => 'steverogers',
                'firstname' => 'Steve',
                'lastname' => 'Rogers',
                'email' => 'steve.rogers@example.com',
                'password' => 'captain123',
                'langue' => 'en',
                'role' => 'member',
            ],
            [
                'login' => 'tonystark',
                'firstname' => 'Tony',
                'lastname' => 'Stark',
                'email' => 'tony.stark@example.com',
                'password' => 'ironman123',
                'langue' => 'en',
                'role' => 'admin',
            ],
            [
                'login' => 'natasharomanoff',
                'firstname' => 'Natasha',
                'lastname' => 'Romanoff',
                'email' => 'natasha.romanoff@example.com',
                'password' => 'blackwidow123',
                'langue' => 'en',
                'role' => 'member',
            ],
        ];

        foreach ($users as &$user) {
            $user['password'] = Hash::make($user['password']);
        }

        // Insert data into the table
        DB::table('users')->insert($users);
    }
}
