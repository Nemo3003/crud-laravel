<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Company Name') }}
            {{ Form::text('c_name', $company->c_name, ['class' => 'form-control' . ($errors->has('c_name') ? ' is-invalid' : ''), 'placeholder' => 'C Name']) }}
            {!! $errors->first('c_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>