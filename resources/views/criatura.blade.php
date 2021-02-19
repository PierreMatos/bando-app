
@extends('layouts.header')
@section('content')

<div class="container">
  <div class="row  criatura-info">
    <div class="col-xs-12 col-md-6 p-4 order-md-1 order-2 bg-light">
      <p>
         {{$criatura->bio}}
        </p>

    </div>
    <div class="col-xs-12 col-md-6 p-3 info-criatura order-md-2 order-1">
      <img src="{{$criatura->image}}" class="img-fluid" />
      <h1 class="mt-2">{{$criatura->name}}</h1>
      <h2>{{$criatura->description}}</h2>
    </div>
  </div>
  @comments(['model' => $criatura])
</div>
@endsection
