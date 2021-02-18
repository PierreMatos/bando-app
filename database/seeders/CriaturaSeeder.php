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
            'bio' => 'Nascido a 19/02/91, iniciou os seus estudos musicais com dez anos de idade na
            Banda Filarmónica dos bombeiros voluntários de Aljezur com 10 anos de idade.
            Por volta dos 13 anos iniciou os estudos na Academia de Música de Lagos, com o
            instrumento trompete. Aos 17 estudou no curso profissional de instrumentos de
            sopro e percussão, na ESPAMOL em lagoa. Em 2010 ingressou na Orquestra de
            Jazz de Lagos, actual Orquestra de Jazz do Algarve, onde participou no projecto
            durante 5 anos.
            Na actualidade Cláudio participa nos seguintes projecto: Os Compotas, Criatura,
            Cambada Pistowski, Carapaus Afrobeat, El Trance del Mimo.',
            'file' => '',
            'image' => '/storage/uploads/claudio.jpg',
            'link' => 'https://www.instagram.com/funkaclau/',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "paulogomes",
            'name' => "Paulo Gomes",
            'description' => 'Baixo eléctrico',
            'bio' => 'Paulo Lourenço, nascido em 27 de Junho de 1984, em Portimão.
            Os primeiros passos na música foram dados quando entrou no conservatório aos
            14 anos, onde o instrumento que praticou foi piano, durante 2 anos. Interessou-se
            pela guitarra aos 15 anos por influência do irmão mais velho, mas aos 17 agarrouse ao baixo e nunca mais o largou.
            Além da guitarra, do baixo e dos teclados, também é proficiente no trombone.
            Academicamente, estudou Music & Technology em Cardiff (UK) 2005 – 2009,
            onde estudou entre outras, Music Productions Techniques, Sound Design, Music
            Production, Musical Analisys, and Audio Engineering.
            Tem o Curso de formador de Música para Crianças (Meloteca), e adicionalmente
            o Curso de Formador Profissional (CAP).
            Quando voltou de Inglaterra, lecionou aulas de música durante 6 anos, durante os
            quais paralelamente formou bandas como Os Compotas e Criatura.
            Trabalhou na rádio Cardiff (produtor de rádio, edição, pós- produção áudio e
            composição musical) e como Técnico de Som ao vivo para bandas como –
            Fredrick Stanley Star (UK), Serpentine (UK), Beatriz Pessoa (POR), Pás de
            Problème (POR).
            Participou na recolha de Áudio e Vídeo para a plataforma Mural Sonoro, entre
            2014 e 2017, e simultaneamente fez parte integrante da equipa Som Direto, onde
            elaborou recolha de áudio e redação crítica de espetáculos ao vivo.
            Técnico residente nos estúdios Pimenta Preta.
            Faz parte do Conselho Direito da ContraMaré, associação cultural de Portimão,
            do qual é Vice-Presidente.
            Instrumentos que toca: Baixo, Teclados, Guitarra, Trombone. Teve bandas como:
            Trashcan, Sabrosas Funk, My Kicks in ’66, Atuais: Os Compotas, Los Negros,
            Criatura.
            Atualmente, além de fazer parte das bandas acima referidas, tem também
            trabalhado na parte técnica, participando na produção de discos de grupos como:
            Criatura, Beto Kalulu, Los Negros, Pás de Probleme, Cows Caos, Royal Bermuda
            e Diabo na Cruz.',
            'file' => '',
            'image' => '/storage/uploads/palinhe.jpg',
            'link' => 'https://twitter.com/4funkystrings',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "ricardocoelho",
            'name' => "Ricardo Coelho",
            'description' => 'Gaita de foles, flauta transversal, ocarina e palheta beiroa',
            'bio' => 'Ricardo Coelho, nascido em 1979, em Vila Nova de Gaia. Iniciou aulas privadas
            de piano clássico com 11 anos de idade e aos 19 começa com a sua autoaprendizagem em Gaita-de-foles, tendo sido acompanhado mais tarde pela
            professora galega, Maria Xosé López Villar.
            Participou como gaiteiro e flautista nos grupos “Arrefole” de 2000 a 2005,
            “Bailebúrdia” 2005 a 2009, “Lúmen” de 2005 a 2007, “Trovas de Amigo” de
            2008 a 2009 , “Míscaros” 2008 a 2012 e “Pé na Terra” de 2005 a 2015.
            Actualmente, participa nos grupos,“Criatura”, “Karrossel”, “Zingamocho” e
            recentemente “Eiró“. Conta 7 álbuns editados entre 2006 e 2015 e inúmeras
            participações em discos como convidado.
            Paralelamente dá aulas de Gaita-de-foles desde 2004, na região norte e centro de
            Portugal. Em 2015 entra para Academia de Artes de Chaves como docente no
            curso de Música Tradicional a lecionar
            Gaita-de-foles e na Escola de Música Tradicional do Larouco. Fundou e dirige
            o projecto Gaiteirus.com, que tem como propósito o estudo e divulgação da
            Gaita-de-Foles em Portugal. É a primeira plataforma de e-learning em Portugal a
            disponibilizar aulas deste instrumento, já com 3 anos de existência. Entre 2014 e
            2015 trabalhou no enRed’Arte - projecto de desenvolvimento comunitário
            através da arte na serra do Marão, Aboboreira e Meia Via. Com um trabalho
            plural e basilar coordenou o eixo da recolha do património imaterial, foi formador
            e apoiou a programação e produção do projecto. O seu interesse pelo trabalho
            com comunidade levou-o aprofundar os seus conhecimentos no Curso de
            Formadores Musicais da Casa da Música em 2015. Em 2017 trabalhou no
            projecto Jardins do Barroco, com dois grupos de música tradicional dos
            concelhos de Baião e Amarante, através da empresa Onda Amarela. ',
            'file' => '',
            'image' => '/storage/uploads/ricardo.jpg',
            'link' => 'www.ricardocoelho.net',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "iurioliveira",
            'name' => "Iúri Oliveira",
            'description' => 'Percussões e Mbira',
            'bio' => 'Iúri Oliveira, 29 anos, percussionista de origens Angolanas que trabalha como
            músico profissional dentro de vários estilos como Latin Jazz, Afro-Cubano,
            Música Brasileira, Fado, Fusão, Étnico, entre outros. Dedicou.se aos estúdios
            com bastantes mestres, oriundos de Cubam Angola, Brasil, e Argentina. Estudou
            Música Latina e Música Brasileira em Londres na The Rhythm Studio | London
            School Of Popular Music e mais tarde na Hollanda para cursos intensivos de
            World Music e Música Étnica.
            Em 2013, Iúri foi Finalista e Vencedor da Menção Honrosa na área da Percussão
            na 5a Edição do Festival de Percussão e Bateria de Lavra.
            Trabalha e trabalhou com bastantes nomes sonantes tais como, Sara Tavares,
            Rui Veloso, Paulo de Carvalho, Lura, Karyna Gomes, Selma Uamusse, Ana
            Laíns, Aline Frazão, Gil do Carmo, Téte Alhinho e Criatura.
            Atualmente trabalha como Sideman Artist e como artista de estúdio e tour em
            vários projetos e vários artistas nacionais e internacionais. A sua interpretação da 
            música, a sua entrega e abordagem é feita com diversos setups e instrumentos que
            lhe dão a liberdade de construir uma atmosfera perfeita. O seu Universo musical é
            inspirado e criado através da elegância, paixão, cor e vocabulário com um
            propósito maior de servir a música. ',
            'file' => '',
            'image' => '/storage/uploads/iuri.png',
            'link' => 'https://linktr.ee/iurioliveira',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "acaciobarbosa",
            'name' => "Acácio Barbosa",
            'description' => 'Guitarra portuguesa',
            'bio' => "Acácio Barbosa nasceu a 5 de Julho 1989. Vila Real foi o berço onde cresceu,
            ainda que tenha sido em Faro que nasceu. Desde cedo que se mostrou com um
            talento fora do normal para a música. Iniciou-se nas primeiras aulas de guitarra
            aos 9 anos de idade, mas foi como autodidata que se deu melhor.
            Foi quando estudava no Curso de Aeronáutica da Universidade da Beira Interior
            e em paralelo começou a frequentar Tuna Orquestra Académica Já'Bubi &
            Tokuskopus que o seu talento se salientou, sendo que sempre que era necessário
            tocar um instrumento que ninguém sabia, Acácio se oferecia e rapidamente o
            aprendia. Em poucos anos, já dominava o cavaquinho, bandolim, contrabaixo,
            acordeão, pandeireta saxofone e guitarra elétrica, tendo-se tornado como o oficial
            ensaiador e representante da Tuna. 
            Essa mesma capacidade multistumentista, fez com que mais tarde o amigo Edgar
            Valente o desafia- se a aprender guitarra portuguesa para integrar a Criatura. Uma
            vez mais Acácio não hesitou e em cerca de 3 meses estava apto para as gravações
            de estúdio. O que não esperava era que a paixão por este instrumento
            ultrapassaria qualquer outro até então. O fado de Alfama chamou-o para que se
            mudasse para Lisboa, e para trocar a vida de engenheiro aeronáutico por músico a
            tempo inteiro. Numa odisseia entusiasmante de apenas 3 anos, Acácio é já visto
            hoje como um dos tocadores de guitarra portuguesa mais promissores da sua
            geração. Por entre as quelhas em que formou o seu duo Port do Soul com o
            guitarrista Warren Cahill, é hoje também assíduo tocador em míticas casas de
            fados como o S. Miguel de Alfama ou a Baiuca.",
            'file' => '',
            'image' => '/storage/uploads/acacio.png',
            'link' => 'https://www.instagram.com/acacio_p_barbosa/',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "gildionisio",
            'name' => "Gil Dionísio",
            'description' => 'Voz e violino',
            'bio' => 'Gil Dionísio é um artista residente em Lisboa com um trabalho que se estende da
            música às artes perfomativas, do texto à cantiga. Nos últimos anos tem estado
            altamente envolvido na divulgação, movimentação e apoio a uma geração de
            novos artistas, bandas e performers lisboetas. Além dos projectos a solo e das
            várias bandas, trabalha também com teatro onde tem vindo a desenvolver várias 
            técnicas de pesquisa e criação que tem resultado nos mais diversos contextos de
            formação, habitualmente ao lado da actriz Sara Ribeiro: das conversas a
            workshops e aulas.
            Em 2016 cria, com Sara Ribeiro, a agência Sentimiento Fuerte e a escola Casa
            Coração, este último um espaço de pesquisa e treino sobre as artes perfomativas.
            Em 2017 cria com os Pás de Problème a Exotic Underground, uma editora de
            música que vem dar espaço a uma conjunto de bandas e músicos que cresceram
            no underground lisboeta (Cows Caos, Royal Bermuda, Power Mega Zord).
            Também em 2017 (em Novembro), cria a OLYMPO Records para expor o seu
            trabalho mais experimental. Aí residem projectos como TRIPA, o duo com a
            violoncelista JOANA GUERRA, NEIGHBOURS e ainda os álbuns para violino a
            solo. Em Setembro deste mesmo ano dá início ao GRUPO DE TEATRO DA
            CREW HASSAN com Sara Ribeiro: um grupo criado com performers do centro de
            Lisboa com interesse numa procura e criação de um pensamento colateral, de
            uma marginalidade consciente, enquanto artista num mundo real.
            Enquanto artista conta com um percurso que já passou pelo jazz de Carlos
            Barreto, o movimento de Madalena Vitorino ou o teatro de João Garcia Miguel.
            Destaca-se ainda a recente tour a solo no Japão e a ida em 2015, também a solo,
            ao IMAXINAGONS - Festival de Jazz de Vigo e ao Festival Serralves em Festa.
            Em 2017, junto da Companhia João Garcia Miguel, juntou-se à produção do
            Baile do Engate: festas dedicadas ao corpo e às artes performativas.
            Na música tem surgido com diferentes bandas e também a solo em muitas das
            casas e festivais em Portugal e um pouco por todo o mundo. Destacam-se bandas
            como os excêntricos PÁS DE PROBLÈME, o duo com a violoncelista JOANA
            GUERRA, os poetas LOS NEGROS ou a re-tradicional CRIATURA onde
            participa também o grupo coral de Cante Alentejano da casa do povo de
            Serpa.
            Gil Dionísio surge como um artista altamente prolífero: músico multidisciplinar e
            criador nos mais diversos contextos, do som à imagem, do texto ao movimento e
            ainda com um forte trabalho sobre a arte e a infância, com destaque para as
            criações sobre filosofia para crianças com Maria Gil e Rita Pedro, começado em
            2015, sob o olhar atento do filósofo José Gil.',
            'file' => '',
            'image' => '/storage/uploads/dionisio.jpg',
            'link' => 'https://www.instagram.com/gil.dionisio/',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "edgarvalente",
            'name' => "Edgar Valente",
            'description' => 'Voz, piano, teclados e adufe',
            'bio' => 'Edgar Valente é músico, performer, professor e terapeuta da voz e conector de
            diferentes mundos artísticos, humanos e cósmicos.
            Nasceu em 1992 na cidade da Covilhã. A voz e a música foram o primeiro
            veículo de expansão de uma talento inato. Aos 6 iniciou o Conservatório e aos 16
            deu continuidade aos estudos por si próprio. Também aos 6 iniciou a escolaridade
            obrigatória e aos 18, aquando estudava no Curso de Ciências da Comunicação da
            UBI, desistiu do ensino público e seguiu os estudos de uma forma bastante mais
            livre e intuitiva. Desde então o seu trajecto tem sido feito pelo ingresso em
            escolas artísticas alternativas, salientando o SOU - Movimento e Arte onde
            conclui o Curso de Artes Performativas e dois anos mais tarde se veio a tornar
            professor de voz. A par, foi desenvolvendo e gerindo autónoma e
            independentemente os seus projetos musicais.
            Em 2014 foi-lhe atribuída a Bolsa Jovens Criadores da Câmara Municipal de
            Serpa, no âmbito de uma residência artística com duração de 7 meses no
            Musibéria. Aí iniciou o processo de fecundação e gestação da Criatura. O disco
            de estreia “Aurora”, acabou coincidentemente por ser lançado a 5 de Fevereiro
            de 2016, dia em que cumpriu o seu 24o aniversário. Após vários anos de criação,
            palcos, conexões e vicências nas passagens por Serpa, Algarve, Lisboa e América
            do Sul, regressou em 2017 à sua terra natal para desenvolver mais projectos de
            cariz cultural no Interior.
            Neste momento foca-se essencialmente em levar avante o “Bem Bonda”, segundo
            disco da Criatura, bem como na banda de funk que integra: Os Compotas.
            Orienta e facilita ainda retiros direcionados à criação, à expressão artística e à voz
            como veículo à auto-cura. Colabora ainda ativamente com artistas como Mariana
            Root, Peña Kalimotxo, Sickonce, Diogo de Carvalho ou Luiz Gabriel Lopes
            (Graveola), este último com quem aprofunda cada vez mais cria cada vez mais a
            ponte entre a Música Popular Portuguesa e a Música Popular Brasileira. Também
            com Gil Dionísio e Sara Ribeiro, integram o colectivo Sentimiento Fuerte, teia
            enlaçadora que move e comove as ruas e subtérreos Lisboetas.
            Nas horas vagas, é ainda um assíduo visitante e amigo de grupos de música
            tradicional, como o Grupo Coral e Etnográfico da Casa do Povo de Serpa, as
            Adufeiras de Monsanto, as Adufeiras do Paúl ou o Grupo de Percussão de
            Valhelhas. ',
            'file' => '',
            'image' => '/storage/uploads/edgar.jpg',
            'link' => 'https://www.instagram.com/edgarovalente/',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "joaoaguiar",
            'name' => "João Aguiar",
            'description' => 'Guitarra eléctrica',
            'bio' => 'João Aguiar nasceu em Lisboa, no dia 2 de Agosto de 1989.
            Os primeiros passos na música foram dados aos 16 anos (em 2002) na guitarra
            acústica. A grande influenciadora foi a mãe do mesmo – graças ao tocar também o
            mesmo instrumento e possuir uma vasta coleção de CD’s e de vinys, lá em casa
            existia sempre música.
            Após a descoberta deste novo amor, seguiram-se as bandas, sendo que a primeira
            foi Eden’s Gate (2004 - 2006). No entanto, por motivos de necessidade, o
            instrumento que tocava seria o baixo – abraçou este instrumento, e aprendeu-o
            durante estes dois anos.
            No ensino secundário teve outra banda, os FUNKtastic, e desta surgiram as
            primeiras presenças em palcos maiores (2006 - 2009).
            Simultaneamente, ajudou a fundar o trio Freakybeat (2008 - 2012), banda que
            inovava pelo seu estilo peculiar acústico.
            Atualmente, (2012 – até ao presente) e também fundador, faz parte da banda funk
            “Os Compotas” e “Criatura”.',
            'file' => '',
            'image' => '/storage/uploads/aguiar.png',
            'link' => 'https://www.instagram.com/joaoaguitar/',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "alexandrebernardo",
            'name' => "Alexandre Bernardo",
            'description' => 'Bandolim, guitarra acústica, cavaquinho',
            'bio' => "Alexandre Bernardo nasceu a 8 de Julho de 1980.
            Aprendeu viola, guitarra, cavaquinho, bandolim, adufe, bombo, bateria, piano
            como autodidacta.
            Ex-bandas: Octopus In The Fisherman's Style, Guernica Havoc. E também Moki
            (com um EP editado)
            Musico convidado de: Mallu Magalhaes, Filipe Catto, Banda do Mar, Cicero,
            Mariano Marovatto, César Lacerda, Wado
            Actuais projectos: Laia, Urge, Ligadura, Los Negros, Criatura",
            'file' => '',
            'image' => '/storage/uploads/alex.jpg',
            'link' => 'https://www.instagram.com/a_bernardo/',
        ]);

        DB::table('criaturas')->insert([
            'slug' => "fabiocantinho",
            'name' => "Fábio Cantinho",
            'description' => 'Bateria',
            'bio' => 'Nasce a 31 de agosto de 1991, um rico menino que desde muito cedo que
            demonstrou um enorme interesse pela música, ao começar a tocar no sofá e em
            tachos e alguidares no quintal da sua casa, “acompanhando” as músicas dum
            culto evangélico que decorria aos domingos à tarde.
            Aos 5 anos, o seu pai resolve comprar uma bateria “verdadeira” e o Fábio começa
            a ter aulas privadas de bateria no seu próprio quarto. Teve cerca de 5 professores
            até à sua adolescência, entre os quais se destacam Beto Kalulu, Paulão e Tuniko
            Goulart.
            Acabou por, mais tarde, resolver frequentar o curso profissional de instrumentista,
            na vertente de percussão clássica, na ESPAMOL (Lagoa – Algarve) com parceria
            com a Academia de Música de Lagos, tendo Vasco Ramalho como professor de
            percussão. Seguiu depois para o Ensino Superior na Universidade de Évora, na
            qual fez provas de acesso para Percussão, chegando a frequentar o ano 0 (zero) na
            mesma vertente, mas dois anos mais tarde resolve fazer as mesmas provas para
            Bateria Jazz, frequentando a licenciatura até ao presente com o Prof. Dr. Eduardo
            Lopes. 
            Entre todo este processo académico, participou em diversos masterclasses e
            workshops com variados bateristas e percussionistas de renome nacional e
            internacional, entre os quais: Vasco Ramalho, Eduardo Lopes, Ludwig Albert,
            Dave Samuels, Carlos Miguel, Alexandre Alves, Vicky Marques, André Silva,
            Cleverson Silva e Ivo Costa.
            Em 2012 começa a fazer parte da banda de funk Os Compotas , e dois anos mais
            tarde, da Criatura, ambas até ao presente.
            Paralelamente a tudo acima descrito, faz parte do grupo de louvor (tocando
            bateria) de uma igreja evangélica desde os 10 anos (2001), e tem participado
            como músico, em vários eventos de carácter cristão do Algarve e nacionais.',
            'file' => '',
            'image' => '/storage/uploads/cantinho.png',
            'link' => 'https://www.instagram.com/fabiocantinho/',
        ]);

    }
}
