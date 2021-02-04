<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

        $createdDate = Carbon::now();

        DB::table('posts')->insert([
            'name' => "BEM BONDA",
            'description' => '“Bem Bonda“, o disco da Criatura, é um resgate da ancestralidade linguística beiroa, uma expressão mutável, dependente das gentes e dos lugares, que dentro do mundo dos significados nos lembra não só que “já chega”, como também que, “como se não bastasse”, “um mal nunca vem só”.',
            'link' => 'www.criaturamusic.com/bembonda',
            'lyric' => '',
            'asset' => '/storage/uploads/perfil3.png',
            'type_id' => 1,
            'created_at' => $createdDate->modify('-10 minutes')
        ]);

        DB::table('posts')->insert([
            'name' => "Ricardo",
            'description' => 'Gaita de foles',
            'link' => 'www.criaturamusic.com/ricardo',
            'lyric' => '',
            'asset' => '/storage/uploads/foto9.png',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')

        ]);

        DB::table('posts')->insert([
            'name' => "BEM BONDA",
            'description' => 'Mobile & Desktop',
            'link' => 'www.criaturamusic.com/aw1',
            'lyric' => '',
            'asset' => '/storage/uploads/capa5.png',
            'type_id' => 3,
            'created_at' => $createdDate->modify('-30 minutes')

        ]);

        DB::table('posts')->insert([
            'name' => "BEM BONDA",
            'description' => 'Mobile & Desktop',
            'link' => 'www.criaturamusic.com/aw2',
            'lyric' => '',
            'asset' => '/storage/uploads/TITULO_PNG.png',
            'type_id' => 3
        ]);

        DB::table('posts')->insert([
            'name' => "Eduardo",
            'description' => 'Voz e guitarra',
            'link' => 'www.criaturamusic.com/eduardo',
            'lyric' => '',
            'asset' => '/storage/uploads/foto4.png',
            'type_id' => 7
        ]);

        DB::table('posts')->insert([
            'name' => "in Publico",
            'description' => '"A Criatura transformou pedras em pães e fez um disco para 2021"',
            'link' => 'www.publico.pt/noticia',
            'lyric' => '',
            'asset' => '',
            'type_id' => 5
        ]);

        DB::table('posts')->insert([
            'name' => "Eduardo",
            'description' => 'Baixo',
            'link' => 'www.criaturamusic.pt/eduardo',
            'lyric' => '',
            'asset' => '/storage/uploads/foto4.png',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-30 minutes')
        ]);

    }
}
