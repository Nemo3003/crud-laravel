@extends('layouts.app')

@section('template_title')
    {{ $employee->name ?? 'Show Employee' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Employee</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Emp Fname:</strong>
                            {{ $employee->emp_fname }}
                        </div>
                        <div class="form-group">
                            <strong>Emp Lname:</strong>
                            {{ $employee->emp_lname }}
                        </div>
                        <div class="form-group">
                            <strong>Emp Dob:</strong>
                            {{ $employee->emp_dob }}
                        </div>
                        <div class="form-group">
                            <strong>Salary:</strong>
                            {{ $employee->salary }}
                        </div>
                        <div class="form-group">
                            <strong>Branches Id:</strong>
                            {{ $employee->branches_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
