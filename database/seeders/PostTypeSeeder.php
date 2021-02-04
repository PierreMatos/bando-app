<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PostTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_types')->insert([
            'id' => 1,
            'name' => "Album",
            'description' => 'Categoria de albuns',
        ]);

        DB::table('post_types')->insert([
            'id' => 2,
            'name' => "Audio",
            'description' => 'Categoria de músicas',
        ]);

        DB::table('post_types')->insert([
            'id' => 3,
            'name' => "Artwork",
            'description' => 'Categoria de imagens',
        ]);

        DB::table('post_types')->insert([
            'id' => 4,
            'name' => "Video",
            'description' => 'Categoria de videos',
        ]);

        DB::table('post_types')->insert([
            'id' => 5,
            'name' => "News",
            'description' => 'Categoria de notícias',
        ]);

        DB::table('post_types')->insert([
            'id' => 6,
            'name' => "Letras",
            'description' => 'Categoria de letras',
        ]);

        DB::table('post_types')->insert([
            'id' => 7,
            'name' => "Criaturas",
            'description' => 'Elementos da banda',
        ]);
    }
}
