<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('suc_name') }}
            {{ Form::text('suc_name', $sucursale->suc_name, ['class' => 'form-control' . ($errors->has('suc_name') ? ' is-invalid' : ''), 'placeholder' => 'Suc Name']) }}
            {!! $errors->first('suc_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('empresas_id') }}
            {{ Form::text('empresas_id', $sucursale->empresas_id, ['class' => 'form-control' . ($errors->has('empresas_id') ? ' is-invalid' : ''), 'placeholder' => 'Empresas Id']) }}
            {!! $errors->first('empresas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>