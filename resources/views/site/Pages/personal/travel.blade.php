@extends('site.layout.app')


@section('title')
    Rowa Insurance | Travel Insurance
@endsection

@section('content')
    <div class="banner banner-travel">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2>Rowa Insurance Agency</h2>
            <p>
                Easing your travel
            </p>
        </div>
    </div>

    <section class="about my-3">
        <div class="container">
        <div class="text-center">
            <h2 class="display-4">Travel Insurance </h2> 
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="text-center my-2">
                    <h2></h2>
                </div>
                    <p mb-2>
                        Travel Insurance is an insurance policy that provides 24 hours emergency medical assistance, personal accident cover, compensation for travel delay and loss of traveler's property and other travel related contingencies arising during the trip. This policy is not a general health insurance policy.
                     </p>
                     <div class="bg-secondary text-white p-3">
                        <h4>Have a Question?</h4>
                        <p>Call: <span class="display-4">0724 527 020</span></p>
                    </div>
            </div>
            <div class="col-md-3">
                <img src="{{asset('Images/carsnow.jpg')}}" alt="" class="img-fluid">
            </div>
        </div>
        </div>
    </section>

@endsection