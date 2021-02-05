<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('track')->insert([
            'order' => 01,
            'name' => "Anunciação",
            'duration' => '04:34',
            'lyric' => 'letras',
            'link' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 02,
            'name' => "Bem Bonda",
            'duration' => '08:13',
            'lyric' => 'letras',
            'link' => 'storage',
            'album_id' => 1

        ]);
        
    
        DB::table('track')->insert([
            'order' => 03,
            'name' => "Lobbysómem",
            'duration' => '06:08',
            'lyric' => 'letras',
            'link' => 'storage',
            'album_id' => 1

        ]);
    
        DB::table('track')->insert([
            'order' => 04,
            'name' => "A Festa do Medo do Gaiteiro",
            'duration' => '03:51',
            'lyric' => 'letras',
            'link' => 'storage',
            'album_id' => 1

        ]);
    
        DB::table('track')->insert([
            'order' => 05,
            'name' => "Da Praxe",
            'duration' => '09:23',
            'lyric' => 'letras',
            'link' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 06,
            'name' => "O Padeiro - Parte 1",
            'duration' => '06:45',
            'lyric' => 'letras',
            'link' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 07,
            'name' => "O Padeiro - Parte 2",
            'duration' => '05:21',
            'lyric' => 'letras',
            'link' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 8,
            'name' => " O Namoro",
            'duration' => '00:59',
            'lyric' => 'letras',
            'link' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 9,
            'name' => "A Noiva",
            'duration' => '07:41',
            'lyric' => 'letras',
            'link' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 10,
            'name' => "O Encanto",
            'duration' => '00:59',
            'lyric' => 'letras',
            'link' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 11,
            'name' => "À Mãe",
            'duration' => '03:17',
            'lyric' => 'letras',
            'link' => 'storage',
            'album_id' => 1
        ]);

    }
}
