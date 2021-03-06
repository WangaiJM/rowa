@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2>New Vehicle </h2>
                    <div class="ml-auto">
                        <a href="{{ route('clients.show', $client) }}" class="btn btn-outline-info ml-auto">Clients Properties</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('clients.plots.update', [$client, $plot]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('plots.form', ['buttonText' => 'Edit Vehicle'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
