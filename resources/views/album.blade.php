
<?php
use Carbon\Carbon;
?>
@extends('layouts.header')
@section('content')

<div class="container bg-white">
    <div class="row header-album">
        <div class="col-12 col-md-3 mt-3">
            <div>
                <img class="card-img-top" src="{{$album->image}}" alt="{{ $album->name }}" />
            </div>

        </div>
        <div class="col-12 col-md-9 mt-3">
          <label class="album">album</label>
          <h4>{{$album->name}}</h4>
          <span>em lançamento exlusivo</span><br>
          <a href="{{$album->file}}" target="_blank">Download aqui</a>
        </div>
    </div>


    <table class="table table-album" style="margin-top:25px">
      <tbody>
        @foreach ($tracks as $track)
            <audio id="{{$track->id}}">
              @if(pathinfo($track->file, PATHINFO_EXTENSION) == "wav")
                <source src="{{$track->file}}" type="audio/wav">
              @endif
              @if(pathinfo($track->file, PATHINFO_EXTENSION) == "mp3")
                <source src="{{$track->file}}" type="audio/mp3">
              @endif
            </audio>

            <tr class="track-bg">
              <th>
                <button id="btnplay{{$track->id}}" class="btn-play" onclick="playmusic({{$track->id}})"><img src="/storage/css/play.png" /></button>
                <button id="btnpause{{$track->id}}" class="btn-pause" onclick="pausemusic({{$track->id}})"><img src="/storage/css/pause.png" /></button>
              </th>
              <td>{{$track->name}}</td>
              <td>{{$track->duration}}</td>
              <td><label class="letra">Letra</label></td>
            </tr>
        @endforeach
      </tbody>
    </table>

    <div class="info-album" style="text-align:center;">
                <h4>BEM BONDA</h4>
                <h4>2021</h4>

                <p>“Bem Bonda”, o novo disco da Criatura, chega dia 5 Fevereiro de 2021 ao grande público, exatamente no mesmo dia em que há 5 anos atrás veio à luz o primeiro álbum, “Aurora” (2016).</p>
                <p>"Bem Bonda" é um resgate da ancestralidade linguística beiroa, uma expressão mutável, dependente das gentes e dos lugares, que dentro do mundo dos significados nos lembra não só que “já chega”, como também que, “como se não bastasse”, “um mal nunca vem só”. Uma obra onde o ímpeto da intervenção cultural, espiritual e social surge tanto através da palavra, como através do som, ou no incentivo à ação, como a batermos o pé por um mundo onde possamos continuar a sentir e a deixar que se sinta, antes que seja tarde demais.</p>
    <p>O disco, por sua vez, é apresentado como “uma ode intervencionista à alternativa de evolução, à necessidade de mudança, à urgência de imaginarmos novos caminhos, sem esquecermos de onde vimos, da memória e da identidade da cultura que nos faz ser as criaturas que somos.”
    </p>

    <p>Gravado entre Março 2019 e Outubro de 2020 nos estúdios Namouche, Haus e Camaleão, Bem Bonda tem dez temas, um das quais repartido em duas (Padeiro - parte 1 e 2) e conta com a formação actual da banda: de A a Z, Acácio Barbosa (guitarra portuguesa), Alexandre Bernardo (bandolim, guitarra acústica, cavaquinho), Cláudio Gomes (trompete), Edgar Valente (voz, piano, teclados e adufe), Fábio Cantinho (bateria), Gil Dionísio (voz e violino), Iúri Oliveira (percussões e Mbira), João Aguiar (guitarra eléctrica), Paulo Lourenço (baixo eléctrico) e Ricardo Coelho (gaita de foles, flauta transversal, ocarina e palheta). Além da participação especial de um músico que já fez parte do grupo, Yaw Tembe (trompete), e do Coro dos Anjos (do bairro dos Anjos, em Lisboa), grupo coral artivista que integra vários jovens compositores e cantores amigos e amigas da Criatura, que se somam nas vozes do bando.
    </p>
     <h4>
     a Criatura: </h4>

     Acácio Barbosa - guitarra portuguesa<br>
     Alexandre Bernardo - bandolim, guitarra acústica, cavaquinho<br>
     Cláudio Gomes - trompete<br>
     Edgar Valente - voz, piano, teclados e adufe <br>
     Fábio Cantinho - bateria <br>
     Gil Dionísio - voz e violino <br>
     Iúri Oliveira - percussões e Mbira<br>
     João Aguiar - guitarra eléctrica<br>
     Paulo Lourenço - baixo eléctrico<br>
     Ricardo Coelho - gaita de foles, flauta transversal, ocarina e palheta beiroa<br>

     <h4>o Coro dos Anjos: </h4>
     <p>
       Anaïs Thinon, André Morais, Andrea Vertessen, Anne Sealand, António Rivotti, Beatriz Nande, Bruno Mimoso, Catarina Monteiro, Daniel Vasconcelos Melim, Diogo Vaz Cavaleiro, Dora Vicente, Gabriel Pepe, Irene Miranda, Joana Veiga, José Eduardo Amadeu, Katsiaryna Drozhzha, Hugo Santos, Mafalda Carvalho, Maria Henriques, Miguel Proença, Pedro Delgado, Rita Caldeira, Sara Mercier, Teresa Conceição, Tiago Jesus, Vasco Ribeiro, Yuri Wentink

     </p>

     <p>
       Gravado entre Março 2019 e Outubro de 2020 nos estúdios Namouche, Haus e Camaleão<br>
       por Paulo Lourenço, Bernardo Pastor, Quim Monte, Pedro Ferreira e Francisco Duque<br>
       Produzido por Paulo Lourenço, Edgar Valente e Gil Dionísio<br>
       Misturado e masterizado por: António Pinheiro da Silva <br>
       Artwork: Catherina Cardoso, João Catarino e Diogo Vaz Cavaleiro<br>
       Edição e distribuição digital: Omnichord Records<br>
       Apoios: Fundação GDA e Câmara Municipal do Fundão<br>
     </p>
              </div>
</div>

@endsection
<script>
document.addEventListener('play', function(e){
    var audios = document.getElementsByTagName('audio');
    for(var i = 0, len = audios.length; i < len;i++){
        if(audios[i] != e.target){
            audios[i].pause();
        }
    }
}, true);

function playmusic(idmusic){
  document.getElementById(idmusic).play();
  refbtnplay = "btnplay" + idmusic;
  refbtnpause = "btnpause" + idmusic;


  var listpause = document.getElementsByClassName("btn-pause");
  var listplay = document.getElementsByClassName("btn-play");
  var i,x;

  for(i=0;i<listpause.length; i++)
  {
    if(listpause[i].id == refbtnpause){
      listpause[i].style.display = "block";
    }else{
        listpause[i].style.display = "none";
    }
  }

  for(x=0;x<listplay.length; x++)
  {
    if(listplay[x].id == refbtnplay){
      listplay[x].style.display = "none";
    }else{
        listplay[x].style.display = "block";
    }
  }



}

function pausemusic(idmusic){
  document.getElementById(idmusic).pause();
  refbtnplay = "btnplay" + idmusic;
  refbtnpause = "btnpause" + idmusic;

  document.getElementById(refbtnplay).style.display = "block";
  document.getElementById(refbtnpause).style.display = "none"
}

</script>
