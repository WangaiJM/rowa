@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2>Edit Employee Information</h2>
                    <div class="ml-auto">
                        <a href="{{ route('companies.show', $company) }}" class="btn btn-outline-info ml-auto">Company</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('companies.workers.update', [$company, $worker]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('workers.form', ['buttonText' => 'Edit Employee'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
