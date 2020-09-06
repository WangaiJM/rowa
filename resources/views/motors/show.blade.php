@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2 class="">{{ $client->name }} </h2>
                    <div class="ml-auto">
                        <a href="{{ route('clients.show', $client) }}" class="btn btn-outline-info ml-auto">Go Back</a>
                    </div>
                </div>
                <hr>
                <div class="card">
                    
                    <div class="card-body">
                        <div class="card-header">
                            <h3>{{ $motor->registration }}</h3>
                        </div>
                        @include('layouts.message')
                        <div class="card p-3">
                            <div class="col-md-12 text-center">
                                <h3> Car Details </h3>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Log Book: </label>
                                    <strong>{{ $motor->log_book_no }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Chassis: </label>
                                    <strong>{{ $motor->chassis }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Make: </label>
                                    <strong>{{ $motor->make }}</strong>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Model: </label>
                                    <strong>{{ $motor->model }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Type: </label>
                                    <strong>{{ $motor->type }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Body: </label>
                                    <strong>{{ $motor->body }}</strong>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Fuel: </label>
                                    <strong>{{ $motor->fuel }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Main Year: </label>
                                    <strong>{{ $motor->main_year }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Rating: </label>
                                    <strong>{{ $motor->rating }}</strong>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Engine Number: </label>
                                    <strong>{{ $motor->engine_no }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Color: </label>
                                    <strong>{{ $motor->color }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Registration Date: </label>
                                    <strong>{{ $motor->registration_date }}</strong>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Gross Weight: </label>
                                    <strong>{{ $motor->gross_weight }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Previous Owners: </label>
                                    <strong>{{ $motor->number_of_previous_owners }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Passengers: </label>
                                    <strong>{{ $motor->passengers }}</strong>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Tare Weight: </label>
                                    <strong>{{ $motor->tare_weight }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Tax Class: </label>
                                    <strong>{{ $motor->tax_class }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Axies: </label>
                                    <strong>{{ $motor->axies }}</strong>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Load Capacity: </label>
                                    <strong>{{ $motor->load_capacity }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Previous Registration Country: </label>
                                    <strong>{{ $motor->previou_reg_country }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Previous Registration: </label>
                                    <strong>{{ $motor->previous_registration }}</strong>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Duty: </label>
                                    <strong>{{ $motor->duty }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Paid: </label>
                                    <strong>{{ $motor->paid }}</strong>
                                </div>
                            </div>
                            <hr>
    
                            <div class="row">
                                <div class="col-md-4 d-flex">
                                    <a href="{{ route('clients.motors.edit', [$client, $motor]) }}" class="btn btn-outline-primary"> Edit Car</a>
                                    
                                </div>
                                <div class="col-md-4">
                                    <form action="{{ route('clients.motors.destroy', [$client, $motor])}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"> Delete Car</button>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('clients.motors.insurance.create', [$client, $motor]) }}" class="btn btn-outline-info">Add Insurance</a>
                                </div>
                            </div>
                        </div>
                        <hr>

                        @foreach ($motor->insurances as $insurance)
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-md-12 text-center">
                                        <h3> Insurance Details </h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Bought On: </label>
                                            <strong>{{ $insurance->added_on }}</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Expires On: </label>
                                            <strong>{{ $insurance->expires_on }}</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Amount: </label>
                                            <strong>Ksh. {{ $insurance->amount }}</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Premium: </label>
                                            <strong>{{ $insurance->premium }}</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Balance: </label>
                                            <strong>{{ $insurance->balance }}</strong>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <a href="{{ route('clients.motors.insurance.edit', [$client, $motor, $insurance]) }}" class="btn btn-outline-primary"> Edit Insurance</a>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <form action="{{ route('clients.motors.insurance.destroy', [$client, $motor, $insurance])}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"> Delete Insurance</button>
                                            </form>
                                        </div>
                                        <!-- <div class="col-md-4">
                                            <a href="" class="btn btn-info">View Insurance</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>

               
            </div>
        </div>
    </div>
</div>
@endsection
