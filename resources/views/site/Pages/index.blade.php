@extends('site.layout.app')

@section('title')
    Rowa Insurance | Welcome Home
@endsection

@section('content')
    <div class="banner-home">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2>Rowa Insurance Agency</h2>
            <p>
                For all your insurance advice
            </p>
        </div>
    </div>

    <section class="cards-features">
        <div class="text-center my-4">
            <h2>Insurance for Motor, Health, Travel, Life & more</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('Images/car.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer text-center">
                            <h4>Motor Insurance</h4>
                            <p>Protecting your car from liabilities</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('Images/fitness.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer text-center">
                            <h4>Travel Insurance</h4>
                            <p>Stress free as you enjoy your travel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('Images/agreement.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer text-center">
                            <h4>General Insurance </h4>
                            <p>We cover...Well, Everything!!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="description">
      <div class="text-center">
        <h2 class="mt-1 py-4">Learn more about our products</h2>
      </div>
      <div class="row">
            <div class="col-md-6 m-0 p-0">
                <img src="{{asset('Images/car_1.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 m-0 p-0">
                <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center p-2">
                    <h3 >Motor Insurance</h3>
                    <p class="px-4">
                        Protecting your car from liabilities that may arise as you drive is not just a smart thing to do, it is also a legal requirement. Our superior motor insurance cover is tailor-made to ensure that you get maximum benefits from the chosen car insurance plan in the event that your motor vehicle is involved in an accident, burnt or stolen.
                    </p>
                    <p class="px-4">
                        We provide a hassle-free purchase and claim settlement experience to make your journey with us easier every step of the way. Access competitive pricing and instant delivery of your digital certificate each time you purchase our motor insurance product online.
                    </p>
                    <a href="/personal_motor" class="btn btn-lg btn-outline-primary">Learn more</a>
                </div>
            </div>
      </div>
      <div class="row">
            <div class="col-md-6 m-0 p-0">
                <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center p-2">
                    <h3>Travel Insurance</h3>
                    <p class="px-4">
                        We understand that planning for a trip outside the country can be a bit of a hassle. One of the biggest fears people have when travelling is falling seriously ill in a place where they don’t know the language, people, or customs. Our travel product not only covers the costs of unforeseen incidents, it also provides practical assistance when you are abroad – 24 hours a day, 365 days a year!
                    </p>
                    <p class="px-4">
                        Our bespoke travel package is accepted by countries that require travel insurance before issuing the visa and is tailored to meet all needs of students, groups, individuals as well as corporate business travelers. Take a few minutes to travel smarter and safer by purchasing our product online.
                    </p>
                    <a href="" class="btn btn-lg btn-outline-primary">Learn more</a>
                </div>
            </div>
            <div class="col-md-6 m-0 p-0">
                <img src="{{asset('Images/travel_1.jpg')}}" alt="" class="img-fluid">
            </div>
      </div>
      <div class="row">
            <div class="col-md-6 m-0 p-0">
                <img src="{{asset('Images/emergency.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 m-0 p-0">
                <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center p-2">
                    <h3>Health Insurance</h3>
                    <p class="px-4">
                        Your family’s health and safety means the world to you. We understand that and want to help you protect your loved ones from situations beyond your control. Health Insurance is perfect for you for a life free from worries. With a health insurance you have access to a convenient provider network and a flexible cover to cater for your needs.
                    </p>
                    <a href="" class="btn btn-lg btn-outline-primary">Learn more</a>
                </div>
            </div>
      </div>
    </section>
    <section class="partners mt-3 bg-gradient-secondary">
        <div class="container">
            <div class="text-center my-3">
                <h2>Our partners</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('Images/kra.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{asset('Images/ira.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{asset('Images/britam.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{asset('Images/nhif.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection