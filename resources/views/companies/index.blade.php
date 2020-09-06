@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2 class="">Companies </h2>
                    <div class="ml-auto">
                        <form action="{{ route('companies.index') }}" class="form-inline" method="GET">
                            @csrf
                            <input type="text" placeholder="Enter Company Name" class="form-control mr-1" name="id_no" value="{{ isset($value) ? $value : '' }}">
                            <button class="btn btn-info mr-3" type="submit">Search</button>
                            <a href="{{ route('companies.create') }}" class="btn btn-outline-info ml-auto">Add Company</a>
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
                              <th>Contacts</th>
                              <th>Email</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($companies as $company)
                                <tr>
                                    <td><a href="{{ route('companies.show', $company)}}">{{ $company->id }}</a></td>
                                    <td><a href="{{ route('companies.show', $company)}}">{{ $company->name }}</a></td>
                                    <td><a href="{{ route('companies.show', $company)}}">{{ $company->contacts }}</a></td>
                                    <td><a href="{{ route('companies.show', $company)}}">{{ $company->email }}</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('companies.show', $company)}}" class="btn btn-outline-primary mr-1">View</a>
                                            <a href="{{ route('companies.edit', $company) }}" class="btn btn-outline-success mr-1"> Edit</a>
                                            <form action="{{ route('companies.destroy', $company)}}" method="post" class="">
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
                        {{ $companies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
