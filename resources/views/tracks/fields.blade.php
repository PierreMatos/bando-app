<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', 'File:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('file', ['class' => 'custom-file-input']) !!}
            {!! Form::label('file', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>

<!-- Asset Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('image', ['class' => 'custom-file-input']) !!}
            {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Lyric Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('lyric', 'Lyric:') !!}
    {!! Form::textarea('lyric', null, ['class' => 'form-control']) !!}
</div>

<!-- Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order', 'Order:') !!}
    {!! Form::number('order', null, ['class' => 'form-control']) !!}
</div>

<!-- Duração Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', 'Duração:') !!}
    {!! Form::text('duration', null, ['class' => 'form-control']) !!}
</div>

<!-- Album Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('album_id', 'Album Id:') !!}
    {!! Form::select('album_id', ['1' => 'Album1', '2' => 'Album2'], null, ['class' => 'form-control custom-select']) !!}
</div>
