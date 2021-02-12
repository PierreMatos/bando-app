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

<!-- Link Field -->
<div class="col-sm-12">
    {!! Form::label('link', 'Link:') !!}
    <p>{{ $album->link }}</p>
</div>

<!-- Asset Field -->
<div class="col-sm-12">
    {!! Form::label('asset', 'Asset:') !!}
    <p>{{ $album->asset }}</p>
</div>

<!-- Data Lancamento Field -->
<div class="col-sm-12">
    {!! Form::label('data_lancamento', 'Data Lancamento:') !!}
    <p>{{ $album->data_lancamento }}</p>
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

