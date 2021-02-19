@inject('markdown', 'Parsedown')
@php
    // TODO: There should be a better place for this.
    $markdown->setSafeMode(true);
@endphp

<div class="col-12 mt-4 order-1" id="comment-{{ $comment->getKey() }}" >
  <div class="row">
      <div class="col-md-12 m-0 p-0">
          <div class="card pt-2 pl-2 pr-2">
            <div class="row m-4 p-0">
              <div class="col-2 col-md-1 avatar-comment m-0 p-0">
                 <img src="{{ url(Auth::user()->avatar) }}" class="img-fluid">
              </div>
              <div class="col-10 col-md-11 info-comment pb-4">
                  <small class="font-weight-bold">{{ $comment->commenter->name ?? $comment->guest_name }}</small> | <small> {{ $comment->created_at->diffForHumans() }}</small><br>
                  <span>{!! $markdown->line($comment->comment) !!}</span>
              </div>
              <div class="col-12 edit-comment border-top pt-1">
                  @can('reply-to-comment', $comment)
                      <button data-toggle="modal" data-target="#reply-modal-{{ $comment->getKey() }}" class="btn btn-sm btn-link text-uppercase right">@lang('comments::comments.reply')</button>
                  @endcan

                  @can('delete-comment', $comment)
                      <a href="{{ route('comments.destroy', $comment->getKey()) }}" onclick="event.preventDefault();document.getElementById('comment-delete-form-{{ $comment->getKey() }}').submit();" class="btn btn-sm btn-link text-danger text-uppercase"><img src="/storage/css/icon_trash.png" class="img-fluid m-1" width="20"/></a>
                      <form id="comment-delete-form-{{ $comment->getKey() }}" action="{{ route('comments.destroy', $comment->getKey()) }}" method="POST" style="display: none;">
                          @method('DELETE')
                          @csrf
                      </form>
                  @endcan
                  @can('edit-comment', $comment)
                      <button data-toggle="modal" data-target="#comment-modal-{{ $comment->getKey() }}" class="btn btn-sm btn-link text-uppercase">
                          <img src="/storage/css/icon_edit.png" class="img-fluid m-1" width="23"/>
                      </button>
                  @endcan
              </div>
            </div>
          </div>

        </div>
    </div>


        @can('edit-comment', $comment)
            <div class="modal fade" id="comment-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.update', $comment->getKey()) }}">
                            @method('PUT')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Editar comentário</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <img src="/storage/uploads/icon_close.png" width="31">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <textarea required class="form-control" name="message" rows="3">{{ $comment->comment }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sm text-uppercase">Atualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan

        @can('reply-to-comment', $comment)
            <div class="modal fade" id="reply-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.reply', $comment->getKey()) }}">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">@lang('comments::comments.reply_to_comment')</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <textarea required class="form-control" name="message" rows="3"></textarea>
                                    <small class="form-text text-muted">@lang('comments::comments.markdown_cheatsheet', ['url' => 'https://help.github.com/articles/basic-writing-and-formatting-syntax'])</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-outline-secondary text-uppercase" data-dismiss="modal">@lang('comments::comments.cancel')</button>
                                <button type="submit" class="btn btn-sm text-uppercase">@lang('comments::comments.reply')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan

        <br />{{-- Margin bottom --}}

        <?php
            if (!isset($indentationLevel)) {
                $indentationLevel = 1;
            } else {
                $indentationLevel++;
            }
        ?>

        {{-- Recursion for children --}}
        @if($grouped_comments->has($comment->getKey()) && $indentationLevel <= $maxIndentationLevel)
            {{-- TODO: Don't repeat code. Extract to a new file and include it. --}}
            @foreach($grouped_comments[$comment->getKey()] as $child)
                @include('comments::_comment', [
                    'comment' => $child,
                    'grouped_comments' => $grouped_comments
                ])
            @endforeach
        @endif

    </div>


{{-- Recursion for children --}}
@if($grouped_comments->has($comment->getKey()) && $indentationLevel > $maxIndentationLevel)
    {{-- TODO: Don't repeat code. Extract to a new file and include it. --}}
    @foreach($grouped_comments[$comment->getKey()] as $child)
        @include('comments::_comment', [
            'comment' => $child,
            'grouped_comments' => $grouped_comments
        ])
    @endforeach
@endif
