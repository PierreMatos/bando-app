<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name' => "welcome to the bando",
            'description' => 'fiquem atento às nossas surpresas',
            'link' => 'www.bando.com/img1.mp4',
            'lyric' => '',
            'asset' => '',
            'type_id' => 1
        ]);
    }
}
