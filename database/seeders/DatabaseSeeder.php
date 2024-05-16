<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            LocalitySeeder::class,
            TypeSeeder::class,
            ArtistSeeder::class,
            ArtistTypeSeeder::class,
            LocationSeeder::class,
            ShowSeeder::class,
            ArtistTypeShowSeeder::class,
            RepresentationSeeder::class,
            RepresentationUserSeeder::class,
            RoleSeeder::class,
            RoleUserSeeder::class,
        ]);
    }
}
