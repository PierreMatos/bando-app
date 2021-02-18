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
            'order' => 1,
            'name' => "BEM BONDA",
            'description' => '“Bem Bonda“, o disco da Criatura, é um resgate da ancestralidade linguística beiroa, uma expressão mutável, dependente das gentes e dos lugares, que dentro do mundo dos significados nos lembra não só que “já chega”, como também que, “como se não bastasse”, “um mal nunca vem só”.',
            'link' => 'http://criaturamusic.com/bembonda',
            'asset' => '/storage/uploads/perfil3.png',
            'type_id' => 1,
            'created_at' => $createdDate->modify('-10 minutes')
        ]);

        DB::table('posts')->insert([
            'id' => 2,
            'order' => 2,
            'name' => "PEDRA-PÃO",
            'description' => '“A Pedra-Pão é uma Criatura comestível que podes comer ou guardar. A obra foi trabalhada pelo artista plástico Diogo Vaz Cavaleiro, que com o apoio da Fundação GDA …”.',
            'link' => 'http://criaturamusic.com/pedrapao',
            'asset' => '/storage/uploads/pao.jpg',
            'type_id' => 1,
            'created_at' => $createdDate->modify('-15 minutes')
        ]);

        DB::table('posts')->insert([
            'order' => 14,
            'name' => "BEM BONDA",
            'description' => '03 Lobbysómem',
            'link' => '/storage/music/03_lobbysomem.wav',
            'asset' => '/storage/uploads/perfil3.png',
            'type_id' => 2,
            'created_at' => $createdDate->modify('-31 minutes')
        ]);

        DB::table('posts')->insert([
            'order' => 7,
            'name' => "BEM BONDA",
            'description' => '04 - A Festa do Medo do Gaiteiro',
            'link' => '/storage/music/04 - A Festa do Medo do Gaiteiro.mp3',
            'asset' => '/storage/uploads/perfil3.png',
            'type_id' => 2,
            'created_at' => $createdDate->modify('-36 minutes')
        ]);
        

        DB::table('posts')->insert([
            'order' => 11,
            'name' => "BEM BONDA",
            'description' => '09 - A Noiva',
            'link' => '/storage/music/09 - A Noiva.mp3',
            'asset' => '/storage/uploads/perfil3.png',
            'type_id' => 2,
            'created_at' => $createdDate->modify('-36 minutes')
        ]);

        DB::table('posts')->insert([
            'order' => 3,
            'name' => "BEM BONDA",
            'description' => '02 Bem Bonda',
            'link' => '/storage/music/02_bembonda.wav',
            'asset' => '/storage/uploads/perfil3.png',
            'type_id' => 2,
            'created_at' => $createdDate->modify('-36 minutes')
        ]);

        DB::table('posts')->insert([
            'order' => 4,
            'name' => "Edgar",
            'description' => 'Voz, piano, teclados e adufe',
            'link' => 'www.criaturamusic.com/edgar',
            'asset' => '/storage/uploads/edgar.jpg',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')

        ]);

        DB::table('posts')->insert([
            'order' => 8,
            'name' => "Ricardo",
            'description' => 'Gaita de foles, flauta transversal, ocarina e palheta beiroa',
            'link' => 'www.criaturamusic.com/ricardo',
            'asset' => '/storage/uploads/ricardo.jpg',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'order' => 19,
            'name' => "Fábio Cantinho",
            'description' => 'bateria ',
            'link' => 'www.criaturamusic.com/fabio',
            'asset' => '/storage/uploads/cantinho.png',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'order' => 10,
            'name' => "Iúri Oliveira",
            'description' => 'percussões e Mbira',
            'link' => 'www.criaturamusic.com/iuri',
            'asset' => '/storage/uploads/iuri.png',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'order' => 5,
            'name' => "Cláudio Gomes",
            'description' => 'trompete',
            'link' => 'www.criaturamusic.com/ricardo',
            'asset' => '/storage/uploads/claudio.jpg',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'order' => 12,
            'name' => "Acácio Barbosa",
            'description' => 'guitarra portuguesa',
            'link' => 'www.criaturamusic.com/acacio',
            'asset' => '/storage/uploads/acacio.png',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'order' => 13,
            'name' => "Gil Dionísio",
            'description' => 'voz e violino',
            'link' => 'www.criaturamusic.com/acacio',
            'asset' => '/storage/uploads/dionisio.jpg',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'order' => 6,
            'name' => "Palinhe",
            'description' => 'baixo eléctrico',
            'link' => 'www.criaturamusic.com/palinhe',
            'asset' => '/storage/uploads/palinhe.jpg',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'order' => 15,
            'name' => "João Aguiar",
            'description' => 'guitarra eléctrica',
            'link' => 'www.criaturamusic.com/aguiar',
            'asset' => '/storage/uploads/aguiar.png',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'order' => 16,
            'name' => "Alexandre Bernardo",
            'description' => 'bandolim, guitarra acústica, cavaquinho',
            'link' => 'www.criaturamusic.com/alex',
            'asset' => '/storage/uploads/alex.jpg',
            'type_id' => 7,
            'created_at' => $createdDate->modify('-20 minutes')
        ]);

        DB::table('posts')->insert([
            'order' => 17,
            'name' => "BEM BONDA",
            'description' => 'Mobile & Desktop',
            'link' => 'www.criaturamusic.com/aw1',
            'asset' => '/storage/uploads/capa5.png',
            'type_id' => 3,
            'created_at' => $createdDate->modify('-30 minutes')

        ]);

        DB::table('posts')->insert([
            'order' => 18,
            'name' => "BEM BONDA",
            'description' => 'Mobile & Desktop',
            'link' => 'www.criaturamusic.com/aw2',
            'asset' => '/storage/uploads/TITULO_PNG.png',
            'type_id' => 3
        ]);

        DB::table('posts')->insert([
            'order' => 9,
            'name' => "in Publico",
            'description' => '"A Criatura transformou pedras em pães e fez um disco para 2021"',
            'link' => 'www.publico.pt/noticia',
            'asset' => '',
            'type_id' => 5
        ]);      

        DB::table('posts')->insert([
            'order' => 20,
            'name' => "Anunciação",
            'description' => "<p>Quem tem mãe tem tudo e pai também<br>
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
            'link' => '/letra/anunciacao',
            'asset' => '',
            'type_id' => 6,
            'track_id' => 1
        ]);     

    }
}
