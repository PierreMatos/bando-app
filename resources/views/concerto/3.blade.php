
<?php
use Carbon\Carbon;
?>
@extends('layouts.header')
@section('content')
@include('alertmessage')




<div class="container bg-white">


      <div class="container">

        <div class="row header-album">
          <div class="mt-3 text-center order-md-1 order-2">
                  <img class="img-fluid" src="/storage/uploads/criatura-02.jpg" alt="concerto" />
          </div>
          <div class="col-12 col-md-9 mt-5 order-md-2 order-1">
            <h1>{{$post->name}}</h1>
            <!-- <h5>Convite em 1ª mão para o Bando</h5> -->
            <label class="album">Concerto</label>

            {{-- <div class="form-pao-pedra d-block mt-5">
              <form method="POST" action="/concerto">
                <div class="form-row align-items-center">
                  <div class="col-auto">
                @csrf
                  <input placeholder="Nome" type="text" name="nome" id="nome" class="form-control-lg" required />
                </div>
                <div class="col-auto">
                  <button type="submit" class="h3">Reservar Bilhete</button>
                </div>
                </div>
              </form>
            </div> --}}

            <a class="h3" href="{{$post->link}}" target="_blank">+ INFO</a>
            
          </div>
      </div>

          <div class="info-album" style="text-align:left;">
          
          <br>
          <p>
          {{$post->description}}
            </p>
          
          
           
      
    {{-- @comments(['model' => $post]) --}}


<?php
$model = $post;

if (isset($approved) and $approved == true) {
    $comments = $model->approvedComments;
} else {
    $comments = $model->comments;
}
?>

@if($comments->count() < 1)
<div class="alert alert-warning">@lang('comments::comments.there_are_no_comments')</div>
@endif

<div>
@php
    $comments = $comments->sortBy('created_at');

    if (isset($perPage)) {
        $page = request()->query('page', 1) - 1;

        $parentComments = $comments->where('child_id', '');

        $slicedParentComments = $parentComments->slice($page * $perPage, $perPage);

        $m = Config::get('comments.model'); // This has to be done like this, otherwise it will complain.
        $modelKeyName = (new $m)->getKeyName(); // This defaults to 'id' if not changed.

        $slicedParentCommentsIds = $slicedParentComments->pluck($modelKeyName)->toArray();

        // Remove parent Comments from comments.
        $comments = $comments->where('child_id', '!=', '');

        $grouped_comments = new \Illuminate\Pagination\LengthAwarePaginator(
            $slicedParentComments->merge($comments)->groupBy('child_id'),
            $parentComments->count(),
            $perPage
        );

        $grouped_comments->withPath(request()->url());
    } else {
        $grouped_comments = $comments->groupBy('child_id');
    }
@endphp
@foreach($grouped_comments as $comment_id => $comments)
    {{-- Process parent nodes --}}
    @if($comment_id == '')
        @foreach($comments as $comment)
            @include('comments::_comment', [
                'comment' => $comment,
                'grouped_comments' => $grouped_comments,
                'maxIndentationLevel' => $maxIndentationLevel ?? 3
            ])
        @endforeach
    @endif
@endforeach
</div>

@isset ($perPage)
{{ $grouped_comments->links() }}
@endisset

@auth
@include('comments::_form')
@elseif(Config::get('comments.guest_commenting') == true)
@include('comments::_form', [
    'guest_commenting' => true
])
@else
<div class="card">
    <div class="card-body">
        <h5 class="card-title">@lang('comments::comments.authentication_required')</h5>
        <p class="card-text">@lang('comments::comments.you_must_login_to_post_a_comment')</p>
        <a href="{{ route('login') }}" class="btn btn-primary">@lang('comments::comments.log_in')</a>
    </div>
</div>
@endauth


          
          </div>
          {{-- <div class="footer-pao">
            <img src="storage/uploads/footer-pedra-pao.jpg" class="img-fluid"/>
          </div> --}}

</div>


          </div>
    </div>
</div>


@endsection
