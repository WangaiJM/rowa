@extends('site.layout.app')


@section('title')
    Rowa Insurance | Motor Insurance
@endsection

@section('content')
    <div class="banner-motor">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2>Rowa Insurance Agency</h2>
            <p>
                We value your vehicle
            </p>
        </div>
    </div>

    <section class="about my-3">
        <div class="container">
        <div class="text-center">
            <h2>Commercial Motor Insurance</h2>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="text-center my-2">
                    <h2></h2>
                </div>
                    <p mb-2>
                        We value your car as much as you do.
                    </p>
                    <p mb-2>
                        Accidents happen. Your car could get damaged or you may end up losing it through theft. If you value this investment, why not protect it? Our motor insurance contains options for you, for both your private and motor commercial vehicles.
                    </p>
                    <p mb-2>
                        Our comprehensive car insurance covers any type of motor vehicle against accidental damage or overturning, loss or damage by fire and theft, malicious damage, perils of nature e.g.  floods, earthquake, storms, hurricanes and third party liabilities - which provides indemnity to the insured for death or bodily injuries to third-parties and/or passengers; and damage to property belonging to third-parties
                    </p>
                    <div class="bg-danger text-white p-3">
                        <h4>Have a Question?</h4>
                        <p>Call: <span class="display-3">0724 527 020</span></p>
                    </div>
            </div>
            <div class="col-md-3">
                <img src="{{asset('Images/carsnow.jpg')}}" alt="" class="img-fluid">
            </div>
        </div>
        </div>
    </section>

@endsection