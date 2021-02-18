<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criaturas')->insert([
            'slug' => "claudiogomes",
            'name' => "Claudio Gomes",
            'description' => 'Trompete / Vozes',
            'bio' => 'bio',
            'file' => '',
            'image' => '/storage/uploads/claudio.jpg',
            'link' => 'https://www.instagram.com/funkaclau/',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "paulogomes",
            'name' => "Paulo Gomes",
            'description' => 'Baixo eléctrico',
            'bio' => 'bio',
            'file' => '',
            'image' => '/storage/uploads/palinhe.jpg',
            'link' => 'https://twitter.com/4funkystrings',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "ricardocoelho",
            'name' => "Ricardo Coelho",
            'description' => 'Gaita de foles, flauta transversal, ocarina e palheta beiroa',
            'bio' => 'bio',
            'file' => '',
            'image' => '/storage/uploads/ricardo.jpg',
            'link' => 'www.ricardocoelho.net',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "iurioliveira",
            'name' => "Iúri Oliveira",
            'description' => 'Percussões e Mbira',
            'bio' => 'bio',
            'file' => '',
            'image' => '/storage/uploads/iuri.png',
            'link' => 'https://linktr.ee/iurioliveira',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "iurioliveira",
            'name' => "Acácio Barbosa",
            'description' => 'Guitarra portuguesa',
            'bio' => 'bio',
            'file' => '',
            'image' => '/storage/uploads/acacio.png',
            'link' => 'https://www.instagram.com/acacio_p_barbosa/',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "gildionisio",
            'name' => "Gil Dionísio",
            'description' => 'Voz e violino',
            'bio' => 'bio',
            'file' => '',
            'image' => '/storage/uploads/dionisio.jpg',
            'link' => 'https://www.instagram.com/gil.dionisio/',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "edgarvalente",
            'name' => "Edgar Valente",
            'description' => 'Voz, piano, teclados e adufe',
            'bio' => 'bio',
            'file' => '',
            'image' => '/storage/uploads/edgar.jpg',
            'link' => 'https://www.instagram.com/edgarovalente/',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "joaoaguiar",
            'name' => "João Aguiar",
            'description' => 'Guitarra eléctrica',
            'bio' => 'bio',
            'file' => '',
            'image' => '/storage/uploads/aguiar.png',
            'link' => 'https://www.instagram.com/joaoaguitar/',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "alexandrebernardo",
            'name' => "Alexandre Bernardo",
            'description' => 'Bandolim, guitarra acústica, cavaquinho',
            'bio' => 'bio',
            'file' => '',
            'image' => '/storage/uploads/alex.jpg',
            'link' => 'https://www.instagram.com/a_bernardo/',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "fabiocantinho",
            'name' => "Fábio Cantinho",
            'description' => 'Bateria',
            'bio' => 'bio',
            'file' => '',
            'image' => '/storage/uploads/cantinho.png',
            'link' => 'https://www.instagram.com/fabiocantinho/',
        ]);
    }
}
