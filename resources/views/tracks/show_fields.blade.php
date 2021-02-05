<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $track->id }}</p>
</div>

<!-- Order Field -->
<div class="col-sm-12">
    {!! Form::label('order', 'Order:') !!}
    <p>{{ $track->order }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $track->name }}</p>
</div>

<!-- Duration Field -->
<div class="col-sm-12">
    {!! Form::label('duration', 'Duration:') !!}
    <p>{{ $track->duration }}</p>
</div>

<!-- Lyric Field -->
<div class="col-sm-12">
    {!! Form::label('lyric', 'Lyric:') !!}
    <p>{{ $track->lyric }}</p>
</div>

<!-- Link Field -->
<div class="col-sm-12">
    {!! Form::label('link', 'Link:') !!}
    <p>{{ $track->link }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $track->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $track->updated_at }}</p>
</div>

