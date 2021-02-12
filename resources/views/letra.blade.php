
<?php
use Carbon\Carbon;
?>
@extends('layouts.header')
@section('content')

<div class="container bg-white">
    <div class="row header-album">
        <div class="col-12 col-md-3 mt-3">
            <div>
                <img class="card-img-top" src="{{$album->asset}}" alt="{{ $album->name }}" />
                <span>em lançamento exlusivo</span><br>
            </div>

        </div>
        <div class="col-12 col-md-9 mt-3">
          <label class="letra">letra</label>
          <h4>{{$track->name}}</h4>
          <h4>{{$album->name}}</h4>
          <span>CRIATURA</span>

          <a href="/album/{{$album->name}}" target="_blank">Ver Álbum</a>
        </div>
    </div>
    <div class="row letratxt">
      <p>Quem tem mãe tem tudo e pai também<br>
      Quem não tem também tudo pode ter<br>
      Mas quem tem pode vadiar 'plo tempo<br>
      E voltar sempre a casa p’ra comer<br>
      E voltar sempre a casa p’ra crescer</p>

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
