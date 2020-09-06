@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2>Edit Employee Insurance</h2>
                    <div class="ml-auto">
                        <a href="{{ route('companies.workers.show', [$company, $worker]) }}" class="btn btn-outline-info ml-auto">Go Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('companies.workers.workerinsurance.update', [$company, $worker, $workerinsurance]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('worker_insurance.form', ['buttonText' => 'Edit Insurance'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
