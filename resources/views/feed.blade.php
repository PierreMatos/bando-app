
<?php
use Carbon\Carbon;
?>
@extends('layouts.header')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card-deck">

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="card mr-0 card-warning" >
                  <label> mensagem para o bando </label>
                  <p>
                    o Bando é uma
                    zona em constante
                    atualização e
                    evolução, tal
                    como a Criatura.
                    Há muito mais a
                    caminho!
                  </p>
                </div>
            </div>

            @foreach($posts as $post)
                

           

            
                @if($post->type_id == 1)

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="card mr-0">
                        <img class="card-img-top" src="{{ $post->asset }}" alt="BEM BONDA">
                        <div class="card-body">
                            <div class="left70">
                              <h5 class="card-title">{{ $post->name }}</h5>
                              <span> em lançamento exclusivo</span>
                            </div>
                            <div class="right30">
                                <label class="album">Album</label>
                            </div>
                            <p class="card-text">{{ $post->description }}</p>
                        </div>

                        <div class="card-footer">
                          <div class="left">
                            <a href="{{ $post->link }}">Ver mais</a>
                          </div>
                          <div class="right">
                            <small class="text-muted">  {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</small>
                          </div>
                        </div>
                    </div>
                </div>

                @endif



                @if($post->type_id == 2)

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="card mr-0">
                        <img class="card-img-top" src="storage/uploads/perfil3.png" alt="BEM BONDA">
                        <div class="card-body">
                            <div class="w100">
                              <h5 class="card-title">{{$post->description}}</h5>
                              <h6 class="card-title">BEM BONDA - Criatura</h6>
                            </div>
                            <div class="w100">
                              <audio controls>
                                <source src="{{$post->link}}" type="audio/wav">
                                Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>

                        <div class="card-footer">
                          <div class="left">
                            released: fev 2021
                          </div>
                          <div class="right">
                            <small class="text-muted"> 1 day ago</small>
                          </div>
                        </div>
                    </div>
                </div>

                @endif


                @if($post->type_id == 7)

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="card mr-0">
                        <img class="card-img-top" src="{{ $post->asset }}" alt="{{ $post->name }}">
                        <div class="card-body">
                            <div class="left70">
                              <h5 class="card-title">{{ $post->name }}</h5>
                            </div>
                            <div class="right30">
                                <label class="criatura-label">Criatura</label>
                            </div>
                        </div>

                        <div class="card-footer">
                          <div class="left70">
                            {{ $post->description }}
                          </div>
                          <div class="right30">
                            <small class="text-muted"> 1 day ago</small>
                          </div>
                        </div>
                    </div>
                </div>

                @endif


                    {{-- <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                        <div class="card ml-0 mr-0">

                            <img class="card-img-top" src="{{ $post->asset }}" alt="{{ $post->name }}">

                            <div class="card-body">
                                <h5 class="card-title">{{ $post->name }}</h5>
                                <p class="card-text">{{ $post->description }}</p>
                            </div>

                            <label><img class="" src="http://127.0.0.1:8000/storage/css/type-{{ $post->type_id }}.png"></label>
                            <div class="card-footer">

                                <small class="text-muted"> {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</small>
                            </div>

                        </div>
                    </div> --}}
            @endforeach
        </div>
    </div>
</div>


<footer class="row">
    @include('layouts.footer')
</footer>
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
    </script>