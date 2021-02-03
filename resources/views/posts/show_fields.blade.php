<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $post->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $post->description }}</p>
</div>

<!-- Link Field -->
<div class="col-sm-12">
    {!! Form::label('link', 'Link:') !!}
    <p>{{ $post->link }}</p>
</div>

<!-- Asset Field -->
<div class="col-sm-12">
    {!! Form::label('asset', 'Asset:') !!}
    <p>{{ $post->asset }}</p>
</div>

<!-- Lyric Field -->
<div class="col-sm-12">
    {!! Form::label('lyric', 'Lyric:') !!}
    <p>{{ $post->lyric }}</p>
</div>

<!-- Type Id Field -->
<div class="col-sm-12">
    {!! Form::label('type_id', 'Type Id:') !!}
    <p>{{ $post->type_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $post->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $post->updated_at }}</p>
</div>

