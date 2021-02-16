<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'id' => 1,
            'slug' => "bembonda",
            'name' => "Bem Bonda",
            'description' => '“Bem Bonda“, o disco da Criatura, é um resgate da ancestralidade linguística beiroa, uma expressão mutável, dependente das gentes e dos lugares, que dentro do mundo dos significados nos lembra não só que “já chega”, como também que, “como se não bastasse”, “um mal nunca vem só”.',
            'file' => 'http://criaturamusic.com/bembonda',
            'image' => '/storage/uploads/perfil3.png',
            'release_date' => Carbon::create('2021', '02', '05'),
        ]);
    }
}
