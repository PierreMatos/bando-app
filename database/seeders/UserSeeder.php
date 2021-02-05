<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@criatura.com',
            'password' => Hash::make('bandalheira'),
        ]);
        
        DB::table('users')->insert([
            'name' => "user1",
            'email' => 'lisetevalente@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
