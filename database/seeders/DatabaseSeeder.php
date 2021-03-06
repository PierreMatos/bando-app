<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
            // GuestSeeder::class,
            // UserSeeder::class,
            // PostTypeSeeder::class,
            PostSeeder::class,
            TrackSeeder::class,
            AlbumSeeder::class,
        ]);
    }
}
