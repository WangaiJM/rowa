@extends('site.layout.app')


@section('title')
    Rowa Insurance | Health Insurance
@endsection

@section('content')
    <div class="banner banner-health">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2>Rowa Insurance Agency</h2>
            <p>
                Your Health, Our Priority
            </p>
        </div>
    </div>

    <section class="about my-3">
        <div class="container">
        <div class="text-center">
            <h2>Health Insurance</h2>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="text-center my-2">
                    <h2></h2>
                </div>
                    <p mb-2>
                        Medical bills should not worry you. We have some great health cover plans with amazing perks, for everyone. Feel free, be picky! Choose the one that suits your needs.
                    </p>
                    <p mb-2>
                        Ever thought of the expenses you would incur in the event that you got a terminal illness? We offer a health insurance plan that will help you pay for your medical expenses regardless of your illness. Our comprehensive health insurance cover takes care of the following.
                    </p>
                    <ul class="list-group">
                        <li class="list-group-item">Inpatient expenses</li>
                        <li class="list-group-item">Out-patient expenses</li>
                        <li class="list-group-item">Flexible premium payment options</li>
                        <li class="list-group-item">Wide network of service providers</li>
                        <li class="list-group-item">24-hour helpline</li>
                    </ul>
            </div>
            <div class="col-md-3">
                <img src="{{asset('Images/covid19.jpg')}}" alt="" class="img-fluid">
            </div>
        </div>
        </div>
    </section>
@endsection