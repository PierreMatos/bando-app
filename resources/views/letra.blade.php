
<?php
use Carbon\Carbon;
?>
@extends('layouts.header')
@section('content')

    {{-- <audio id="{{$track->id}}">
      @if(pathinfo(url('assets/tracks/'.$track->file), PATHINFO_EXTENSION) == "wav")
        <source src="{{url('assets/tracks/'.$track->file)}}" type="audio/wav">
      @endif
      @if(pathinfo(url('assets/tracks/'.$track->file), PATHINFO_EXTENSION) == "mp3")
        <source src="{{url('assets/tracks/'.$track->file)}}" type="audio/mp3">
      @endif
    </audio> --}}

<div class="container bg-white">
    <div class="row header-album">
        <div class="col-12 col-md-3 pt-3 text-center order-md-2 order-1">
            <img class="card-img-top" src="{{$album->image}}" alt="{{ $album->name }}" />
            <span>2021</span>
        </div>
        <div class="col-12 col-md-9 pt-5 order-md-2 order-1">
            <h4>{{$track->name}}</h4>
            <h5>{{$album->name}}</h5>
            <span>CRIATURA</span>
            <label class="letra">Letra</label>
              <a href="/album/{{$album->slug}}" target="_blank">Ver Álbum</a>
            {{-- <audio class="musicplayer" controls></audio> --}}

            <div class="w100">
              <audio controls>
                <source src="{{url('assets/tracks/'.$track->file)}}" type="audio/wav">
                Your browser does not support the audio element.
                </audio>
            </div>

        </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-3 mt-3"></div>
      <div class="col-12 col-md-9 mt-3 letra-show">
         {!!$track->lyric!!}
      </div>
    </div>


    
    @php
    $model = $track;

    if (isset($approved) and $approved == true) {
        // $comments = $model->approvedComments;
    } else {
        $comments = $model->comments;
    }
@endphp

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



    <div class="row standout">
      @foreach($related as $relatedTrack)
        <div class="col-md-3">
         {{-- TODO Change id to SLUG --}}
          <a href="{{$relatedTrack->slug}}">
            <img class="card-img-top" src="{{$album->image}}" alt="{{ $relatedTrack->name }}" />
            <h5>{{$relatedTrack->name}}</h5>
            <h4>{{$album->name}}</h4>
            <span>CRIATURA</span>
          </a>
        </div>
      @endforeach
    </div>


    <footer class="row">
      @include('layouts.footer')
    </footer>

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
