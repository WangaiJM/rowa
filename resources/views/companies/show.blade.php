@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2 class=""> Properties </h2>
                    <div class="ml-auto">
                        <a href="{{ route('companies.index') }}" class="btn btn-outline-info ml-auto">All Companies</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="card p-3">
                        <div class="col-md-12">
                            <h2 class="text-center">{{$company->name}}</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="email">Email: </label>
                                <strong>{{ $company->email}}</strong>
                            </div>
                            <div class="col-md-4">
                                <label for="ID">Industry: </label>
                                <strong>{{ $company->industry}}</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="contact">Contacts: </label>
                                <strong>{{ $company->contacts}}</strong>
                            </div>
                            <div class="col-md-4">
                                <label for="kra_pin">KRA PIN: </label>
                                <strong>{{ $company->kra_pin}}</strong>
                            </div>
                            <div class="col-md-4">
                                <label for="Date of Birth">Address: </label>
                                <strong>P.O Box {{ $company->box_code}} - {{$company->postal_code}} {{ $company->town }}</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 d-flex">
                               
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('companies.workers.create', $company) }}" class="btn btn-info">Add Employees</a>
                            </div>
                            <div class="col-md-4">
                                <form action="#" class="form-inline" method="GET">
                                    @csrf
                                    <input type="text" placeholder="Enter ID No" class="form-control mr-1" name="id_no" value="{{ isset($value) ? $value : '' }}">
                                    <button class="btn btn-info mr-3" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <hr>
                    @include('layouts.message')
                    <div id="worker">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>ID Number</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($company->workers as $worker)
                                    <tr>
                                        <td><a href="{{ route('companies.workers.show', [$company, $worker]) }}">{{ $worker->name }}</a></td>
                                        <td><a href="{{ route('companies.workers.show', [$company, $worker]) }}">{{ $worker->id_no }}</a></td>
                                        <td><a href="{{ route('companies.workers.show', [$company, $worker]) }}">{{ $worker->email }}</a></td>
                                        <th>
                                            <div class="d-flex">
                                                <a href="{{ route('companies.workers.show', [$company, $worker]) }}" class="btn btn-primary mr-1">View</a>
                                                <a href="{{ route('companies.workers.edit', [$company, $worker]) }}" class="btn btn-success mr-1">Edit</a>
                                                <form action="{{ route('companies.workers.destroy', [$company, $worker])}}" method="post" class="">
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
