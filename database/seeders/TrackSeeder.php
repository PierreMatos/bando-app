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
            'lyric' => "Quem tem mãe tem tudo e pai também
            Quem não tem também tudo pode ter
            Mas quem tem pode vadiar 'plo tempo
            E voltar sempre a casa p’ra comer
            E voltar sempre a casa p’ra crescer
            
            Ó mãe! Deixa lá cheirar o tacho
            Ó pai! Olha que eu não sei fazer
            Vá! Que é p’ra ver se eu me despacho
            Que só tenho a vida inteira pr’a viver!
            Sou novo tenho mais o que fazer...
            
            
            Quem tem mãe tem tudo e nada tem
            E quem tem pai tem tudo e nada tem também
            Mas quem não tem não é menos que os outros
            Que por terem pensam ser alguém<
            Tendo ou não tendo são sempre ninguém!
            
            
            Ai mãe! Já deixei queimar o tacho
            Ai pai! Não fiz como deve ser
            Vá! que eu um dia logo acho
            Que tinha a vida inteira p’ra viver!
            E ouço o que estavas a dizer...",
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
