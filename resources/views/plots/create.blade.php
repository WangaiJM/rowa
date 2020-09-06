@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2>New Plot </h2>
                    <div class="ml-auto">
                        <a href="{{ route('clients.show', $client) }}" class="btn btn-outline-info ml-auto">Clients Properties</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('clients.plots.store', $client) }}" method="POST">
                        @csrf
                        @include('plots.form', ['buttonText' => 'Add A Plot'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
