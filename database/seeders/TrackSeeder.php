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
            'slug' => "anunciacao",
            'name' => "Anunciação",
            'duration' => '04:34',
            'lyric' => "<p>Quem tem mãe tem tudo e pai também<br>
            Quem não tem também tudo pode ter<br>
            Mas quem tem pode vadiar 'plo tempo<br>
            E voltar sempre a casa p’ra comer<br>
            E voltar sempre a casa p’ra crescer</p>
    
            <p>Ó mãe! Deixa lá cheirar o tacho<br>
            Ó pai! Olha que eu não sei fazer<br>
            Vá! Que é p’ra ver se eu me despacho<br>
            Que só tenho a vida inteira pr’a viver!<br>
            Sou novo tenho mais o que fazer...</p>
    
            <p>
            Quem tem mãe tem tudo e nada tem<br>
            E quem tem pai tem tudo e nada tem também<br>
            Mas quem não tem não é menos que os outros<br>
            Que por terem pensam ser alguém<br>
            Tendo ou não tendo são sempre ninguém!</p>
    
            <p>
            Ai mãe! Já deixei queimar o tacho<br>
            Ai pai! Não fiz como deve ser<br>
            Vá! que eu um dia logo acho<br>
            Que tinha a vida inteira p’ra viver!<br>
            E ouço o que estavas a dizer...</p>",
            'file' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 02,
            'slug' => 'bembonda',
            'name' => "Bem Bonda",
            'duration' => '08:13',
            'lyric' => 'letras',
            'file' => 'storage',
            'album_id' => 1

        ]);
        
    
        DB::table('track')->insert([
            'order' => 03,
            'slug' => "lobbysomem",
            'name' => "Lobbysómem",
            'duration' => '06:08',
            'lyric' => 'letras',
            'file' => 'storage',
            'album_id' => 1

        ]);
    
        DB::table('track')->insert([
            'order' => 04,
            'slug' => "afestadomedodogaiteiro",
            'name' => "A Festa do Medo do Gaiteiro",
            'duration' => '03:51',
            'lyric' => 'letras',
            'file' => 'storage',
            'album_id' => 1

        ]);
    
        DB::table('track')->insert([
            'order' => 05,
            'slug' => "dapraxe",
            'name' => "Da Praxe",
            'duration' => '09:23',
            'lyric' => 'letras',
            'file' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 06,
            'slug' => "opadeirpparte1",
            'name' => "O Padeiro - Parte 1",
            'duration' => '06:45',
            'lyric' => 'letras',
            'file' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 07,
            'slug' => "opadeirpparte2",
            'name' => "O Padeiro - Parte 2",
            'duration' => '05:21',
            'lyric' => 'letras',
            'file' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 8,
            'slug' => " onamoro",
            'name' => " O Namoro",
            'duration' => '00:59',
            'lyric' => 'letras',
            'file' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 9,
            'slug' => "anoiva",
            'name' => "A Noiva",
            'duration' => '07:41',
            'lyric' => 'letras',
            'file' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 10,
            'slug' => "oencanto",
            'name' => "O Encanto",
            'duration' => '00:59',
            'lyric' => 'letras',
            'file' => 'storage',
            'album_id' => 1
        ]);
    
        DB::table('track')->insert([
            'order' => 11,
            'slug' => "amae",
            'name' => "À Mãe",
            'duration' => '03:17',
            'lyric' => 'letras',
            'file' => 'storage',
            'album_id' => 1
        ]);

    }
}
