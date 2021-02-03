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

<!-- Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_id', 'Type Id:') !!}
    {!! Form::select('type_id', ['1' => 'Imagem', '2' => 'Video', '3' => 'Letra'], null, ['class' => 'form-control custom-select']) !!}
</div>
