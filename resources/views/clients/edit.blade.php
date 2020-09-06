@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2>New Client </h2>
                    <div class="ml-auto">
                        <a href="{{ route('clients.index') }}" class="btn btn-outline-info ml-auto">All Clients</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('clients.update', $client) }}" method="POST">
                        @method('PUT')
                        @include('clients.form', ['buttonText' => 'Update Client'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
