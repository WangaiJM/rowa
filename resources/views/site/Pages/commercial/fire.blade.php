@extends('site.layout.app')

@section('content')
    <div class="banner">
        <div class="d-flex flex-column justify-content-center align-items-center h-100">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore pariatur quas perferendis quae, deserunt at.
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
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt modi eius rerum natus quod vel voluptatum in distinctio consequuntur non et impedit ad delectus perferendis, possimus reiciendis culpa tempora. Culpa vel accusantium vero eaque, aliquam sit at provident, architecto recusandae nulla quia quibusdam aut quaerat officia, perferendis velit minima labore.
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

    <section class="partners mt-3">
        <div class="container">
            <div class="text-center my-3">
                <h2>Our partners</h2>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <img src="{{asset('Images/covid.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-2">
                    <img src="{{asset('Images/covid.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-2">
                    <img src="{{asset('Images/covid.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-2">
                    <img src="{{asset('Images/covid.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-2">
                    <img src="{{asset('Images/covid.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-2">
                    <img src="{{asset('Images/covid.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection