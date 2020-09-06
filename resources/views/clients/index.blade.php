@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2 class="">Clients </h2>
                    <div class="ml-auto">
                        <form action="{{ route('clients.index') }}" class="form-inline" method="GET">
                            @csrf
                            <input type="text" placeholder="Enter ID No" class="form-control mr-1" name="id_no" value="{{ isset($value) ? $value : '' }}">
                            <button class="btn btn-info mr-3" type="submit">Search</button>
                            <a href="{{ route('clients.create') }}" class="btn btn-outline-info ml-auto">Add Client</a>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    @include('layouts.message')
                  <table class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>ID No</th>
                              <th>Email</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($clients as $client)
                                <tr>
                                    <td><a href="{{ route('clients.show', $client)}}">{{ $client->id }}</a></td>
                                    <td><a href="{{ route('clients.show', $client)}}">{{ $client->name }}</a></td>
                                    <td><a href="{{ route('clients.show', $client)}}">{{ $client->id_no }}</a></td>
                                    <td><a href="{{ route('clients.show', $client)}}">{{ $client->email }}</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('clients.show', $client)}}" class="btn btn-outline-primary mr-1">View</a>
                                            <a href="{{ route('clients.edit', $client) }}" class="btn btn-outline-success mr-1"> Edit</a>
                                            <form action="{{ route('clients.destroy', $client)}}" method="post" class="">
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
                  
                    <div class="d-flex justify-content-center">
                        {{ $clients->appends($value)->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
