@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2 class=""> Properties </h2>
                    <div class="ml-auto">
                        <a href="{{ route('clients.index') }}" class="btn btn-outline-info ml-auto">All Clients</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="card p-3">
                        <div class="col-md-12">
                            <h2 class="text-center">{{$client->name}}</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="email">Email: </label>
                                <strong>{{ $client->email}}</strong>
                            </div>
                            <div class="col-md-4">
                                <label for="ID">ID: </label>
                                <strong>{{ $client->id_no}}</strong>
                            </div>
                            <div class="col-md-4">
                                <label for="Date of Birth">Date of Birth: </label>
                                <strong>{{ $client->dob}}</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="contact">Contacts: </label>
                                <strong>{{ $client->contacts}}</strong>
                            </div>
                            <div class="col-md-4">
                                <label for="kra_pin">KRA PIN: </label>
                                <strong>{{ $client->kra_pin}}</strong>
                            </div>
                            <div class="col-md-4">
                                <label for="Date of Birth">Address: </label>
                                <strong>P.O Box {{ $client->box_code}} - {{$client->postal_code}} {{ $client->town }}</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 d-flex">
                               
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('clients.plots.create', $client) }}" class="btn btn-info">Add Plot</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('clients.motors.create', $client) }}" class="btn btn-info">Add Vehicle</a>
                            </div>
                        </div>
                    </div>

                    <hr>
                    @include('layouts.message')
                    <p>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#motor" aria-expanded="false" aria-controls="motor">Motor vehicles</button>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#plot" aria-expanded="false" aria-controls="plot">Plots</button>
                    </p>
                    <div id="motor">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Registration Number</th>
                                    <th>Log Book Number</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client->motors as $motor)
                                    <tr>
                                        <td><a href="{{ route('clients.motors.show', [$client, $motor]) }}">{{ $motor->id }}</a></td>
                                        <td><a href="{{ route('clients.motors.show', [$client, $motor]) }}">{{ $motor->registration }}</a></td>
                                        <td><a href="{{ route('clients.motors.show', [$client, $motor]) }}">{{ $motor->log_book_no }}</a></td>
                                        <td><a href="{{ route('clients.motors.show', [$client, $motor]) }}">{{ $motor->make }}</a></td>
                                        <td><a href="{{ route('clients.motors.show', [$client, $motor]) }}">{{ $motor->model }}</a></td>
                                        <th>
                                            <div class="d-flex">
                                                <a href="{{ route('clients.motors.show', [$client, $motor]) }}" class="btn btn-primary mr-1">View</a>
                                                <a href="{{ route('clients.motors.edit', [$client, $motor]) }}" class="btn btn-success mr-1">Edit</a>
                                                <form action="{{ route('clients.motors.destroy', [$client, $motor])}}" method="post" class="">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"> Delete </button>
                                                </form>
                                            </div>
                                        </th>
                                    </tr>
                                    {{-- <div class="d-flex justify-content-center">
                                        {{ $client->motors->links() }}
                                    </div> --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="plot">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Plot Number</th>
                                    <th>Location</th>
                                    <th>value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client->plots as $plot)
                                    <tr>
                                        <td><a href="{{ route('clients.plots.show', [$client, $plot]) }}">{{ $plot->id }}</a></td>
                                        <td><a href="{{ route('clients.plots.show', [$client, $plot]) }}">{{ $plot->plot_no }}</a></td>
                                        <td><a href="{{ route('clients.plots.show', [$client, $plot]) }}">{{ $plot->location }}</a></td>
                                        <td><a href="{{ route('clients.plots.show', [$client, $plot]) }}">{{ $plot->value }}</a></td>
                                        <th>
                                            <div class="d-flex">
                                                <a href="{{ route('clients.plots.show', [$client, $plot]) }}" class="btn btn-primary mr-1">View</a>
                                                <a href="{{ route('clients.plots.edit', [$client, $plot]) }}" class="btn btn-success mr-1">Edit</a>
                                                <form action="{{ route('clients.plots.destroy', [$client, $plot])}}" method="post" class="">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"> Delete </button>
                                                </form>
                                            </div>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
