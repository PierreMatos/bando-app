<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $album->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $album->description }}</p>
</div>

<!-- File Field -->
<div class="col-sm-12">
    {!! Form::label('file', 'File:') !!}
    <p>{{ $album->file }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $album->image }}</p>
</div>

<!-- Release Date Field -->
<div class="col-sm-12">
    {!! Form::label('release_date', 'Release Date:') !!}
    <p>{{ $album->release_date }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $album->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $album->updated_at }}</p>
</div>

