<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('empr_name') }}
            {{ Form::text('empr_name', $empresa->empr_name, ['class' => 'form-control' . ($errors->has('empr_name') ? ' is-invalid' : ''), 'placeholder' => 'Empr Name']) }}
            {!! $errors->first('empr_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>