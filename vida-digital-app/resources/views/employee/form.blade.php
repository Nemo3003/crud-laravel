<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('First Name') }}
            {{ Form::text('emp_fname', $employee->emp_fname, ['class' => 'form-control' . ($errors->has('emp_fname') ? ' is-invalid' : ''), 'placeholder' => 'Emp Fname']) }}
            {!! $errors->first('emp_fname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Last Name') }}
            {{ Form::text('emp_lname', $employee->emp_lname, ['class' => 'form-control' . ($errors->has('emp_lname') ? ' is-invalid' : ''), 'placeholder' => 'Emp Lname']) }}
            {!! $errors->first('emp_lname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Birthdate [YYYY-MM-DD]') }}
            {{ Form::text('emp_dob', $employee->emp_dob, ['class' => 'form-control' . ($errors->has('emp_dob') ? ' is-invalid' : ''), 'placeholder' => 'Emp Dob']) }}
            {!! $errors->first('emp_dob', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salary') }}
            {{ Form::text('salary', $employee->salary, ['class' => 'form-control' . ($errors->has('salary') ? ' is-invalid' : ''), 'placeholder' => 'Salary']) }}
            {!! $errors->first('salary', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('branches_id') }}
            {{ Form::select('branches_id', $branch, $employee->branches_id, ['class' => 'form-control' . ($errors->has('branches_id') ? ' is-invalid' : ''), 'placeholder' => 'Branches Id']) }}
            {!! $errors->first('branches_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>