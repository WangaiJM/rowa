@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2>Create Employee Insurance</h2>
                    <div class="ml-auto">
                    <a href="{{ route('companies.workers.show', [$company, $worker]) }}" class="btn btn-outline-info ml-auto">Go Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('companies.workers.workerinsurance.store', [$company, $worker]) }}" method="POST">
                        @csrf
                        @include('worker_insurance.form', ['buttonText' => 'Add Employee Insurance'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
