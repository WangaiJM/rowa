@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2 class="">{{ $company->name }} </h2>
                    <div class="ml-auto">
                        <a href="{{ route('companies.show', $company) }}" class="btn btn-outline-info ml-auto">Go Back</a>
                    </div>
                </div>
                <hr>
                <div class="card">
                    
                    <div class="card-body">
                        <div class="card-header">
                            <h3>{{ $worker->name }}</h3>
                        </div>
                        @include('layouts.message')
                        <div class="card p-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="email">Email: </label>
                                <strong>{{ $worker->email}}</strong>
                            </div>
                            <div class="col-md-4">
                                <label for="ID">ID: </label>
                                <strong>{{ $worker->id_no}}</strong>
                            </div>
                            <div class="col-md-4">
                                <label for="Date of Birth">Date of Birth: </label>
                                <strong>{{ $worker->dob}}</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="contact">Contacts: </label>
                                <strong>{{ $worker->contacts}}</strong>
                            </div>
                            <div class="col-md-4">
                                <label for="kra_pin">KRA PIN: </label>
                                <strong>{{ $worker->kra_pin}}</strong>
                            </div>
                            <div class="col-md-4">
                                <label for="Date of Birth">Address: </label>
                                <strong>P.O Box {{ $worker->box_code}} - {{$worker->postal_code}} {{ $worker->town }}</strong>
                            </div>
                        </div>
                            <hr>
    
                            <div class="row">
                                <div class="col-md-4 d-flex">
                                    <a href="{{ route('companies.workers.edit', [$company, $worker]) }}" class="btn btn-outline-primary"> Edit Employee Information</a>
                                    
                                </div>
                                <div class="col-md-4">
                                    <form action="{{ route('companies.workers.destroy', [$company, $worker])}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"> Delete Employee</button>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('companies.workers.workerinsurance.create', [$company, $worker]) }}" class="btn btn-outline-info">Add Insurance</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h2>Insurance Details</h2>
                        @include('layouts.message')
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Start Date</th>
                                    <th>Expiry Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($worker->workerinsurances as $workerinsurance)
                                        <tr>
                                            <td><a href="#!">{{ $workerinsurance->amount }}</a></td>
                                            <td><a href="#!">{{ $workerinsurance->added_on }}</a></td>
                                            <td><a href="#!">{{ $workerinsurance->expires_on }}</a></td>
                                            <td>
                                                <div class="d-flex">
                                                    <!-- <a href="#" class="btn btn-outline-primary mr-1">View</a> -->
                                                    <a href="{{ route('companies.workers.workerinsurance.edit', [$company, $worker, $workerinsurance]) }}" class="btn btn-outline-success mr-1"> Edit</a>
                                                    <form action="{{ route('companies.workers.workerinsurance.destroy', [$company, $worker, $workerinsurance])}}" method="post" class="">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"> Delete </button>
                                                    </form>
                                                </div>
                                            </td>
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
