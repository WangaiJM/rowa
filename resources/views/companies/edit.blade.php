@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2>New Company </h2>
                    <div class="ml-auto">
                        <a href="{{ route('companies.index') }}" class="btn btn-outline-info ml-auto">All Companies</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('companies.update', $company) }}" method="POST">
                        @method('PUT')
                        @include('companies.form', ['buttonText' => 'Update Company'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
