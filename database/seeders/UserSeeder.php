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
        //Empty the table first
        User::truncate();

        //Define data
        $users = [
            [
                'login'=>'bobe',
                'firstname'=>'Bob',
                'lastname'=>'Sull',
                'email'=>'bobe@sull.com',
                'password'=>'12345678',
                'langue'=>'fr',
                'role'=>'admin',
            ],
            [
                'login'=>'annae',
                'firstname'=>'Anna',
                'lastname'=>'Lyse',
                'email'=>'annae.lyse@sull.com',
                'password'=>'12345678',
                'langue'=>'en',
                'role'=>'member',
            ],
            [
                'login'=>'bobi',
                'firstname'=>'Bobi',
                'lastname'=>'Sulli',
                'email'=>'bobi@sull.com',
                'password'=>'123456789',
                'langue'=>'fr',
                'role'=>'admin',
            ],
            [
                'login'=>'annais',
                'firstname'=>'Annais',
                'lastname'=>'Lyses',
                'email'=>'annais.lyses@sull.com',
                'password'=>'12345678',
                'langue'=>'en',
                'role'=>'member',
            ],
            [
                'login'=>'bobou',
                'firstname'=>'Bobou',
                'lastname'=>'Sullou',
                'email'=>'bob@sull.com',
                'password'=>'12345678',
                'langue'=>'fr',
                'role'=>'admin',
            ],
            [
                'login'=>'anne',
                'firstname'=>'Anne',
                'lastname'=>'Lysa',
                'email'=>'anne.lyse@sull.com',
                'password'=>'12345678',
                'langue'=>'en',
                'role'=>'member',
            ],
            [
                'login'=>'boba',
                'firstname'=>'Boba',
                'lastname'=>'Sulla',
                'email'=>'boba@sull.com',
                'password'=>'12345678',
                'langue'=>'fr',
                'role'=>'admin',
            ],
            [
                'login'=>'ann',
                'firstname'=>'Ann',
                'lastname'=>'Lyse',
                'email'=>'ann.lyse@sull.com',
                'password'=>'12345678',
                'langue'=>'en',
                'role'=>'member',
            ],
            [
                'login'=>'bo',
                'firstname'=>'Bo',
                'lastname'=>'Sul',
                'email'=>'bo@sull.com',
                'password'=>'12345678',
                'langue'=>'fr',
                'role'=>'admin',
            ],
            [
                'login'=>'an',
                'firstname'=>'An',
                'lastname'=>'Ly',
                'email'=>'an.lyse@sull.com',
                'password'=>'12345678',
                'langue'=>'en',
                'role'=>'member',
            ],
        ];
        
        foreach($users as &$user) {
            $user['password'] = Hash::make($user['password']);
        }

        //Insert data in the table
        DB::table('users')->insert($users);        
    }
}
