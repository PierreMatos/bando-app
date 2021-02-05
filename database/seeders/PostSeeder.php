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
            'id' => 1,
            'name' => "BEM BONDA",
            'description' => '“Bem Bonda“, o disco da Criatura, é um resgate da ancestralidade linguística beiroa, uma expressão mutável, dependente das gentes e dos lugares, que dentro do mundo dos significados nos lembra não só que “já chega”, como também que, “como se não bastasse”, “um mal nunca vem só”.',
            'link' => 'http://criaturamusic.com/bembonda',
            'lyric' => '',
            'asset' => '/storage/uploads/perfil3.png',
            'type_id' => 1,
            'created_at' => $createdDate->modify('-10 minutes')
        ]);

        DB::table('posts')->insert([
            'id' => 2,
            'name' => "PEDRA-PÃO",
            'description' => '“A Pedra-Pão é uma Criatura comestível que podes comer ou guardar. A obra foi trabalhada pelo artista plástico Diogo Vaz Cavaleiro, que com o apoio da Fundação GDA …”.',
            'link' => 'http://criaturamusic.com/pedrapao',
            'lyric' => '',
            'asset' => '/storage/uploads/pao.jpg',
            'type_id' => 1,
            'created_at' => $createdDate->modify('-15 minutes')
        ]);

        DB::table('posts')->insert([
            'name' => "BEM BONDA",
            'description' => '03 Lobbysómem',
            'link' => '/storage/music/03_lobbysomem.wav',
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
            Que por terem pensam ser alguém
            Tendo ou não tendo são sempre ninguém!
            
            Ai mãe! Já deixei queimar o tacho
            Ai pai! Não fiz como deve ser
            Vá! que eu um dia logo acho
            Que tinha a vida inteira p’ra viver!
            E ouço o que estavas a dizer...",
            'asset' => '',
            'type_id' => 2,
            'created_at' => $createdDate->modify('-31 minutes')
        ]);
        DB::table('posts')->insert([
            'name' => "BEM BONDA",
            'description' => '02 Bem Bonda',
            'link' => '/storage/music/02_bembonda.wav',
            'lyric' => "",
            'asset' => '',
            'type_id' => 2,
            'created_at' => $createdDate->modify('-36 minutes')
        ]);

        DB::table('posts')->insert([
            'name' => "Edgar",
            'description' => 'Voz, piano, teclados e adufe',
            'link' => 'www.criaturamusic.com/edgar',
            'lyric' => '',
            'asset' => '/storage/uploads/edgar.jpg',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')

        ]);

        DB::table('posts')->insert([
            'name' => "Ricardo",
            'description' => 'Gaita de foles, flauta transversal, ocarina e palheta beiroa',
            'link' => 'www.criaturamusic.com/ricardo',
            'lyric' => '',
            'asset' => '/storage/uploads/ricardo.jpg',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'name' => "Fábio Cantinho",
            'description' => 'bateria ',
            'link' => 'www.criaturamusic.com/fabio',
            'lyric' => '',
            'asset' => '/storage/uploads/cantinho.png',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'name' => "Iúri Oliveira",
            'description' => 'percussões e Mbira',
            'link' => 'www.criaturamusic.com/iuri',
            'lyric' => '',
            'asset' => '/storage/uploads/iuri.png',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'name' => "Cláudio Gomes",
            'description' => 'trompete',
            'link' => 'www.criaturamusic.com/ricardo',
            'lyric' => '',
            'asset' => '/storage/uploads/claudio.jpg',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'name' => "Acácio Barbosa",
            'description' => 'guitarra portuguesa',
            'link' => 'www.criaturamusic.com/acacio',
            'lyric' => '',
            'asset' => '/storage/uploads/acacio.png',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'name' => "Gil Dionísio",
            'description' => 'voz e violino',
            'link' => 'www.criaturamusic.com/acacio',
            'lyric' => '',
            'asset' => '/storage/uploads/dionisio.jpg',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'name' => "Palinhe",
            'description' => 'baixo eléctrico',
            'link' => 'www.criaturamusic.com/palinhe',
            'lyric' => '',
            'asset' => '/storage/uploads/palinhe.jpg',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'name' => "João Aguiar",
            'description' => 'guitarra eléctrica',
            'link' => 'www.criaturamusic.com/aguiar',
            'lyric' => '',
            'asset' => '/storage/uploads/aguiar.png',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'name' => "Alexandre Bernardo",
            'description' => 'bandolim, guitarra acústica, cavaquinho',
            'link' => 'www.criaturamusic.com/alex',
            'lyric' => '',
            'asset' => '/storage/uploads/alex.jpg',
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
            'name' => "in Publico",
            'description' => '"A Criatura transformou pedras em pães e fez um disco para 2021"',
            'link' => 'www.publico.pt/noticia',
            'lyric' => '',
            'asset' => '',
            'type_id' => 5
        ]);      

    }
}
