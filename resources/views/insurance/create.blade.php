@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2>Insurance </h2>
                    <div class="ml-auto">
                        <a href="{{ route('clients.motors.show', [$client, $motor]) }}" class="btn btn-outline-info ml-auto">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('clients.motors.insurance.store', [$client, $motor]) }}" method="POST">
                        @include('insurance.form', ['buttonText' => 'Add Insurance'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
