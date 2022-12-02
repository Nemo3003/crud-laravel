@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Emp Fname:</strong>
                            {{ $empleado->emp_fname }}
                        </div>
                        <div class="form-group">
                            <strong>Emp Lname:</strong>
                            {{ $empleado->emp_lname }}
                        </div>
                        <div class="form-group">
                            <strong>Emp Dob:</strong>
                            {{ $empleado->emp_dob }}
                        </div>
                        <div class="form-group">
                            <strong>Salary:</strong>
                            {{ $empleado->salary }}
                        </div>
                        <div class="form-group">
                            <strong>Sucursales Id:</strong>
                            {{ $empleado->sucursales_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
