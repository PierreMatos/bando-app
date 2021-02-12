<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $track->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $track->description }}</p>
</div>

<!-- Link Field -->
<div class="col-sm-12">
    {!! Form::label('link', 'Link:') !!}
    <p>{{ $track->link }}</p>
</div>

<!-- Asset Field -->
<div class="col-sm-12">
    {!! Form::label('asset', 'Asset:') !!}
    <p>{{ $track->asset }}</p>
</div>

<!-- Lyric Field -->
<div class="col-sm-12">
    {!! Form::label('lyric', 'Lyric:') !!}
    <p>{{ $track->lyric }}</p>
</div>

<!-- Order Field -->
<div class="col-sm-12">
    {!! Form::label('order', 'Order:') !!}
    <p>{{ $track->order }}</p>
</div>

<!-- Duração Field -->
<div class="col-sm-12">
    {!! Form::label('duração', 'Duração:') !!}
    <p>{{ $track->duração }}</p>
</div>

<!-- Album Id Field -->
<div class="col-sm-12">
    {!! Form::label('album_id', 'Album Id:') !!}
    <p>{{ $track->album_id }}</p>
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

