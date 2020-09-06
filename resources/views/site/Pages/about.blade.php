@extends('site.layout.app')


@section('title')
    Rowa Insurance | About Us
@endsection

@section('content')
    <div class="banner-about">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2>Rowa Insurance Agency</h2>
            <p>
                For all your insurance advice
            </p>
        </div>
    </div>

    <section class="about my-3">
        <div class="container">
        <div class="text-center">
            <h2>About Us</h2>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="text-center my-2">
                    <h2>Welcome</h2>
                </div>
                    <p mb-2>
                       Rowa insurance was established in ....
                    </p>
                    <p mb-2>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt modi eius rerum natus quod vel voluptatum in distinctio consequuntur non et impedit ad delectus perferendis, possimus reiciendis culpa tempora. Culpa vel accusantium vero eaque, aliquam sit at provident, architecto recusandae nulla quia quibusdam aut quaerat officia, perferendis velit minima labore.
                    </p>
                    <p mb-2>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt modi eius rerum natus quod vel voluptatum in distinctio consequuntur non et impedit ad delectus perferendis, possimus reiciendis culpa tempora. Culpa vel accusantium vero eaque, aliquam sit at provident, architecto recusandae nulla quia quibusdam aut quaerat officia, perferendis velit minima labore.
                    </p>
                    <p mb-2>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt modi eius rerum natus quod vel voluptatum in distinctio consequuntur non et impedit ad delectus perferendis, possimus reiciendis culpa tempora. Culpa vel accusantium vero eaque, aliquam sit at provident, architecto recusandae nulla quia quibusdam aut quaerat officia, perferendis velit minima labore.
                    </p>
            </div>
            <div class="col-md-3">
                <img src="{{asset('Images/fire_1.jpg')}}" alt="" class="img-fluid">
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