<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Asset Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asset', 'Asset:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('asset', ['class' => 'custom-file-input']) !!}
            {!! Form::label('asset', 'Choose file', ['class' => 'custom-file-label']) !!}
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
    {!! Form::label('duração', 'Duração:') !!}
    {!! Form::text('duração', null, ['class' => 'form-control']) !!}
</div>

<!-- Album Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('album_id', 'Album Id:') !!}
    {!! Form::select('album_id', ['1' => 'Album1', '2' => 'Album2'], null, ['class' => 'form-control custom-select']) !!}
</div>
