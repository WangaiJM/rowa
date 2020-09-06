@extends('layouts.app')

@section('content')
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading text-uppercase">Rowa Insurance Agency</div>
            <div class="masthead-subheading">Your advice partner</div>
                @guest
                    <a class="btn btn-primary btn-lg text-uppercase" href="{{ route('login') }}">Login</a>
                @else
                    <a href="{{ route('clients.index') }}" class="btn btn-primary btn-lg text-uppercase"> Individuals</a>
                    <a class="btn btn-success btn-lg text-uppercase" href="{{ route('companies.index') }}">Company</a>
                @endguest
           
        </div>
    </header>
@endsection

