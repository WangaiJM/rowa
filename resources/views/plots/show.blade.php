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
                            <h3>{{ $plot->plot_name }}</h3>
                        </div>
                        @include('layouts.message')
                        <div class="card p-3">
                            <div class="col-md-12 text-center">
                                <h3> Plot Details </h3>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Plot Name: </label>
                                    <strong>{{ $plot->plot_name }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Plot Number: </label>
                                    <strong>{{ $plot->plot_no }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Location: </label>
                                    <strong>{{ $plot->location }}</strong>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Value: </label>
                                    <strong>{{ $plot->value }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <label>Size: </label>
                                    <strong>{{ $plot->size }}</strong>
                                </div>
                                <div class="col-md-4">

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 d-flex">
                                    <a href="{{ route('clients.plots.edit', [$client, $plot]) }}" class="btn btn-outline-primary"> Edit Plot</a>
                                    
                                </div>
                                <div class="col-md-4">
                                    <form action="{{ route('clients.plots.destroy', [$client, $plot])}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"> Delete Plot</button>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('clients.plots.plotinsurance.create', [$client, $plot]) }}" class="btn btn-outline-info">Add Insurance</a>
                                </div>
                            </div>
                        </div>
                        <hr>

                        @foreach ($plot->plotinsurances as $plotinsurance)
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-md-12 text-center">
                                        <h3> Plot Insurance Details </h3>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Fire and Buglary: </label>
                                            <strong>Ksh. {{ $plotinsurance->fire }}</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Floods: </label>
                                            <strong>Ksh. {{ $plotinsurance->floods }}</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Terrorism: </label>
                                            <strong>Ksh. {{ $plotinsurance->terrorism }}</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Premium: </label>
                                            <strong>{{ $plotinsurance->premium }}</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Bought On: </label>
                                            <strong>{{ $plotinsurance->added_on }}</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Expires On: </label>
                                            <strong>{{ $plotinsurance->expires_on }}</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Total: </label>
                                            <strong>{{ $plotinsurance->total }}</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Balance: </label>
                                            <strong>{{ $plotinsurance->balance }}</strong>
                                        </div>
                                    </div>
                                    <hr>
    
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <a href="{{ route('clients.plots.plotinsurance.edit', [$client, $plot, $plotinsurance]) }}" class="btn btn-outline-primary"> Edit Plot Insurance</a>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <form action="{{ route('clients.plots.plotinsurance.destroy', [$client, $plot, $plotinsurance])}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"> Delete Plot Insurance</button>
                                            </form>
                                        </div>
                                        {{-- <div class="col-md-4">
                                            <a href="{{ route('clients.plots.plotinsurance.show', [$client, $plot, $plotinsurance]) }}" class="btn btn-info">View Plot Insurance</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>

               
            </div>
        </div>
    </div>
</div>
@endsection
