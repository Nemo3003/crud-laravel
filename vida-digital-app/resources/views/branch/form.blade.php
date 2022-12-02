<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Branch Name') }}
            {{ Form::text('b_name', $branch->b_name, ['class' => 'form-control' . ($errors->has('b_name') ? ' is-invalid' : ''), 'placeholder' => 'B Name']) }}
            {!! $errors->first('b_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('companies_id') }}
            {{ Form::select('companies_id', $company ,$branch->companies_id, ['class' => 'form-control' . ($errors->has('companies_id') ? ' is-invalid' : ''), 'placeholder' => 'Companies Id']) }}
            {!! $errors->first('companies_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>