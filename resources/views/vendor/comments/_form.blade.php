<div class="row">
    <div class="card-body text-center mr-2 ml-2">
        @if($errors->has('commentable_type'))
            <div class="alert alert-dark" role="alert">
                {{ $errors->first('commentable_type') }}
            </div>
        @endif
        @if($errors->has('commentable_id'))
            <div class="alert alert-dark" role="alert">
                {{ $errors->first('commentable_id') }}
            </div>
        @endif
        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            @honeypot
            <input type="hidden" name="commentable_type" value="\{{ get_class($model) }}" />
            <input type="hidden" name="commentable_id" value="{{ $model->getKey() }}" />

            {{-- Guest commenting --}}
            @if(isset($guest_commenting) and $guest_commenting == true)
                <div class="form-group">
                    <label for="message">@lang('comments::comments.enter_your_name_here')</label>
                    <input type="text" class="form-control @if($errors->has('guest_name')) is-invalid @endif" name="guest_name" />
                    @error('guest_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="message">@lang('comments::comments.enter_your_email_here')</label>
                    <input type="email" class="form-control @if($errors->has('guest_email')) is-invalid @endif" name="guest_email" />
                    @error('guest_email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            @endif

            <div class="container ">
              <div class="row mb-4">
                <label for="message"><strong>@lang('comments::comments.enter_your_message_here')</strong></label>
                <textarea class="form-control  form-control-lg @if($errors->has('message')) is-invalid @endif" name="message" rows="3" cols="75"></textarea>
                <div class="invalid-feedback">
                    @lang('comments::comments.your_message_is_required')
                </div>
                <button type="submit" class="btn btn-dark m-3">
                  Enviar
                </button>
              <!--  <small class="form-text text-muted">@lang('comments::comments.markdown_cheatsheet', ['url' => 'https://help.github.com/articles/basic-writing-and-formatting-syntax'])</small> -->
            </div>
          </div>


        </form>
<!--
        <h3>Txi</h3>
        <div id="controls">
            <button id="recordButton">Record</button>
            <button id="pauseButton" disabled>Pause</button>
            <button id="stopButton" disabled>Stop</button>
        </div>
        <h3>Recordings</h3>
        <ol id="recordingsList"></ol>
        <!-- inserting these scripts at the end to be able to use all the elements in the DOM -->

    </div>
</div>
<br />
