
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

</div>
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="headings d-flex justify-content-between align-items-center mb-3">
                <h5>Comentários (6)</h5>

            </div>
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center"> <img src="http://127.0.0.1:8000/storage/uploads/titulo.png" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary">james_olesenn</small> <small class="font-weight-bold">Hmm, This poster looks cool</small></span> </div> <small>2 days ago</small>
                </div>
                <div class="action d-flex justify-content-between mt-2 align-items-center">
                    <div class="reply px-4"> <small>Remove</small> <span class="dots"></span> <small>Reply</small> <span class="dots"></span> <small>Translate</small> </div>
                    <div class="icons align-items-center"> <i class="fa fa-star text-warning"></i> <i class="fa fa-check-circle-o check-icon"></i> </div>
                </div>
            </div>
            <div class="card p-3 mt-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center"> <img src="http://127.0.0.1:8000/storage/uploads/titulo.png" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary">olan_sams</small> <small class="font-weight-bold">Loving your work and profile! </small></span> </div> <small>3 days ago</small>
                </div>
                <div class="action d-flex justify-content-between mt-2 align-items-center">
                    <div class="reply px-4"> <small>Remove</small> <span class="dots"></span> <small>Reply</small> <span class="dots"></span> <small>Translate</small> </div>
                    <div class="icons align-items-center"> <i class="fa fa-check-circle-o check-icon text-primary"></i> </div>
                </div>
            </div>
            <div class="card p-3 mt-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center"> <img src="http://127.0.0.1:8000/storage/uploads/titulo.png" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary">rashida_jones</small> <small class="font-weight-bold">Really cool Which filter are you using? </small></span> </div> <small>3 days ago</small>
                </div>
                <div class="action d-flex justify-content-between mt-2 align-items-center">
                    <div class="reply px-4"> <small>Remove</small> <span class="dots"></span> <small>Reply</small> <span class="dots"></span> <small>Translate</small> </div>
                    <div class="icons align-items-center"> <i class="fa fa-user-plus text-muted"></i> <i class="fa fa-star-o text-muted"></i> <i class="fa fa-check-circle-o check-icon text-primary"></i> </div>
                </div>
            </div>
            <div class="card p-3 mt-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center"> <img src="http://127.0.0.1:8000/storage/uploads/titulo.png" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary">simona_rnasi</small> <small class="font-weight-bold text-primary">@macky_lones</small> <small class="font-weight-bold text-primary">@rashida_jones</small> <small class="font-weight-bold">Thanks </small></span> </div> <small>3 days ago</small>
                </div>
                <div class="action d-flex justify-content-between mt-2 align-items-center">
                    <div class="reply px-4"> <small>Remove</small> <span class="dots"></span> <small>Reply</small> <span class="dots"></span> <small>Translate</small> </div>
                    <div class="icons align-items-center"> <i class="fa fa-check-circle-o check-icon text-primary"></i> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
