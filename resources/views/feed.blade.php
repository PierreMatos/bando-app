
<?php
use Carbon\Carbon;
?>
@extends('layouts.header')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card-deck">

            @foreach($posts as $post)
                <div class="col-3 pr-0">
                    <div class="card mr-0">

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
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection