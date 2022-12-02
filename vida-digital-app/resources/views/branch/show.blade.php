@extends('layouts.app')

@section('template_title')
    {{ $branch->name ?? 'Show Branch' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Branch</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('branches.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>B Name:</strong>
                            {{ $branch->b_name }}
                        </div>
                        <div class="form-group">
                            <strong>Companies Id:</strong>
                            {{ $branch->companies_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
