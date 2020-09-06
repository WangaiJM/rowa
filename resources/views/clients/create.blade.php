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
                    <form action="{{ route('clients.store') }}" method="POST">
                        @include('clients.form', ['buttonText' => 'Add Client'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
