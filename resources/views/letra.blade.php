
<?php
use Carbon\Carbon;
?>
@extends('layouts.header')
@section('content')

<div class="container bg-white">
    <div class="row header-album">
        <div class="col-12 col-md-3 pt-3 text-center">
              <audio id="{{$track->id}}">
              @if(pathinfo(url('assets/tracks'.$track->file), PATHINFO_EXTENSION) == "wav")
                <source src="{{url('assets/tracks/'.$track->file)}}" type="audio/wav">
              @endif
              @if(pathinfo($track->file, PATHINFO_EXTENSION) == "mp3")
                <source src="{{$track->file}}" type="audio/mp3">
              @endif
            </audio>
              <img class="card-img-top" src="{{$album->image}}" alt="{{ $album->name }}" />
            <span>em lançamento exclusivo</span>
            <a href="/album/{{$album->slug}}" target="_blank">Ver Álbum</a>
        </div>

        <div class="col-12 col-md-9 pt-5">
          <label class="letra">Letra</label>
          <h4>{{$track->name}}</h4>
          <h5>{{$album->name}}</h5>
          <span>CRIATURA</span>
          <audio class="musicplayer" controls>
            <source src={{url('assets/tracks/'.$track->file)}} type="audio/ogg">
            <source src={{url('assets/tracks/'.$track->file)}} type="audio/mpeg">
          Your browser does not support the audio element.
          </audio>
        </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-3 mt-3"></div>
      <div class="col-12 col-md-9 mt-3 letra-show">

        {!!$track->lyric!!}

      </div>


    </div>

    <div class="row standout">
      @foreach($related as $track)
        <div class="col-md-3">
         {{-- TODO Change id to SLUG --}}
          <a href="{{ $track->slug }}">
            <img class="card-img-top" src="{{$album->image}}" alt="{{ $track->name }}" />
            <h5>{{$track->name}}</h5>
            <h4>{{$album->name}}</h4>
            <span>CRIATURA</span>
          </a>
        </div>
      @endforeach
    </div>
</div>

@endsection
<script>
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
