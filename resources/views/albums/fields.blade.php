<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
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


<!-- Data Lancamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_lancamento', 'Data Lancamento:') !!}
    {!! Form::text('data_lancamento', null, ['class' => 'form-control','id'=>'data_lancamento']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#data_lancamento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush