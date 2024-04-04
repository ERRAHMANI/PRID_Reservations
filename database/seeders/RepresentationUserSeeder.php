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
    Representation_user::truncate();        
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
