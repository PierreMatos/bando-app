
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
  {{-- @comments(['model' => $criatura]) --}}


  
  <?php
  $model = $criatura;

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



  <footer class="row">
    @include('layouts.footer')
</footer>
</div>
@endsection
