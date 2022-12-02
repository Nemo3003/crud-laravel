<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('emp_fname') }}
            {{ Form::text('emp_fname', $empleado->emp_fname, ['class' => 'form-control' . ($errors->has('emp_fname') ? ' is-invalid' : ''), 'placeholder' => 'Emp Fname']) }}
            {!! $errors->first('emp_fname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('emp_lname') }}
            {{ Form::text('emp_lname', $empleado->emp_lname, ['class' => 'form-control' . ($errors->has('emp_lname') ? ' is-invalid' : ''), 'placeholder' => 'Emp Lname']) }}
            {!! $errors->first('emp_lname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('emp_dob') }}
            {{ Form::text('emp_dob', $empleado->emp_dob, ['class' => 'form-control' . ($errors->has('emp_dob') ? ' is-invalid' : ''), 'placeholder' => 'Emp Dob']) }}
            {!! $errors->first('emp_dob', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salary') }}
            {{ Form::text('salary', $empleado->salary, ['class' => 'form-control' . ($errors->has('salary') ? ' is-invalid' : ''), 'placeholder' => 'Salary']) }}
            {!! $errors->first('salary', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sucursales_id') }}
            {{ Form::text('sucursales_id', $empleado->sucursales_id, ['class' => 'form-control' . ($errors->has('sucursales_id') ? ' is-invalid' : ''), 'placeholder' => 'Sucursales Id']) }}
            {!! $errors->first('sucursales_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>