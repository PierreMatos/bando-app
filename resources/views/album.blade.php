
<?php
use Carbon\Carbon;
?>
@extends('layouts.header')
@section('content')

<div class="container bg-white">
    <div class="row">
        <div class="col-3 ml-4 mt-5">
            <img class="card-img-top" src="{{$album->asset}}" alt="{{ $album->name }}">
        </div>
        <div class="col9 m-3">
            <div class="mt-5 font-weight-bold album-title align-middle">{{$album->name}}</div>
            <span class="text-danger">Lançamento exclusivo</span>
        </div>
    </div>

    @foreach ($tracks as $track)
        <div class="row">
            <div class="col-12 track-bg p-4 font-weight-bold">
                <div class="float-left ml-2"> 
                    <span> {{$track->order}}  -  </span>
                    <span> {{$track->name}} </span>
                </div>
                <div class="float-right">
                <span> {{$track->duration}} </span>
                <label class="ml-5"> Letra </label>
                </div>
            </div>
        </div>
    @endforeach

    <div class="info">
        BEM BONDA
2021

“Bem Bonda”, o novo disco da Criatura, chega dia 5 Fevereiro de 2021 ao grande público, exatamente no mesmo dia em que há 5 anos atrás veio à luz o primeiro álbum, “Aurora” (2016).

"Bem Bonda" é um resgate da ancestralidade linguística beiroa, uma expressão mutável, dependente das gentes e dos lugares, que dentro do mundo dos significados nos lembra não só que “já chega”, como também que, “como se não bastasse”, “um mal nunca vem só”. Uma obra onde o ímpeto da intervenção cultural, espiritual e social surge tanto através da palavra, como através do som, ou no incentivo à ação, como a batermos o pé por um mundo onde possamos continuar a sentir e a deixar que se sinta, antes que seja tarde demais.
 

O disco, por sua vez, é apresentado como “uma ode intervencionista à alternativa de evolução, à necessidade de mudança, à urgência de imaginarmos novos caminhos, sem esquecermos de onde vimos, da memória e da identidade da cultura que nos faz ser as criaturas que somos.”


Gravado entre Março 2019 e Outubro de 2020 nos estúdios Namouche, Haus e Camaleão, Bem Bonda tem dez temas, um das quais repartido em duas (Padeiro - parte 1 e 2) e conta com a formação actual da banda: de A a Z, Acácio Barbosa (guitarra portuguesa), Alexandre Bernardo (bandolim, guitarra acústica, cavaquinho), Cláudio Gomes (trompete), Edgar Valente (voz, piano, teclados e adufe), Fábio Cantinho (bateria), Gil Dionísio (voz e violino), Iúri Oliveira (percussões e Mbira), João Aguiar (guitarra eléctrica), Paulo Lourenço (baixo eléctrico) e Ricardo Coelho (gaita de foles, flauta transversal, ocarina e palheta). Além da participação especial de um músico que já fez parte do grupo, Yaw Tembe (trompete), e do Coro dos Anjos (do bairro dos Anjos, em Lisboa), grupo coral artivista que integra vários jovens compositores e cantores amigos e amigas da Criatura, que se somam nas vozes do bando.

a Criatura: 
 
Acácio Barbosa - guitarra portuguesa
Alexandre Bernardo - bandolim, guitarra acústica, cavaquinho
Cláudio Gomes - trompete
Edgar Valente - voz, piano, teclados e adufe 
Fábio Cantinho - bateria 
Gil Dionísio - voz e violino 
Iúri Oliveira - percussões e Mbira
João Aguiar - guitarra eléctrica
Paulo Lourenço - baixo eléctrico
Ricardo Coelho - gaita de foles, flauta transversal, ocarina e palheta beiroa
 
com a participação especial de Yaw Tembe no trompete na faixa Anunciação e
do Coro dos Anjos nas faixas Anunciação, Bem Bonda, O Padeiro - parte II e A Noiva
 

o Coro dos Anjos:
Anaïs Thinon, André Morais, Andrea Vertessen, Anne Sealand, António Rivotti, Beatriz Nande, Bruno Mimoso, Catarina Monteiro, Daniel Vasconcelos Melim, Diogo Vaz Cavaleiro, Dora Vicente, Gabriel Pepe, Irene Miranda, Joana Veiga, José Eduardo Amadeu, Katsiaryna Drozhzha, Hugo Santos, Mafalda Carvalho, Maria Henriques, Miguel Proença, Pedro Delgado, Rita Caldeira, Sara Mercier, Teresa Conceição, Tiago Jesus, Vasco Ribeiro, Yuri Wentink
 
Gravado entre Março 2019 e Outubro de 2020 nos estúdios Namouche, Haus e Camaleão
por Paulo Lourenço, Bernardo Pastor, Quim Monte, Pedro Ferreira e Francisco Duque
Produzido por Paulo Lourenço, Edgar Valente e Gil Dionísio
Misturado e masterizado por: António Pinheiro da Silva 
Artwork: Catherina Cardoso, João Catarino e Diogo Vaz Cavaleiro
Edição e distribuição digital: Omnichord Records
Apoios: Fundação GDA e Câmara Municipal do Fundão


® CRIATURA 2021 // @criatura.pt 
#criatura #acriatura #criaturapt #bembonda #bembonda2021 #auroradacriatura #anunciação #lobbysómem #festadomedodogaiteiro #dapraxe #padeiroparte1 #padeiroparte2 #namoro #anoiva #oencanto #àmãe #acáciobarbosa #aalexandrebernardo #cláudiogomes #edgarvalente #fábiocantinho #gildionísio #iúrioliveira #joãoaguiar #paulolourenço #ricardocoelho #corodosanjos #yawtembe #omnichordrecords #haus #soulsistar #fundaçãogda #municípiodofundão
    </div>
</div>

@endsection