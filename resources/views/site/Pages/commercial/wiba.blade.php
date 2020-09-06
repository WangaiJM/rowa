@extends('site.layout.app')

@section('title')
    Rowa Insurance | WIBA
@endsection

@section('content')
    <div class="banner-wiba">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2>Rowa Insurance Agency</h2>
            <p>
                We care for your workers
            </p>
        </div>
    </div>

    <section class="about my-3">
        <div class="container">
        <div class="text-center">
            <h2></h2>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="text-center my-2">
                    <h2>Work Injury Benefits Act</h2>
                </div>
                    <p mb-2>
                        Work Injury Benefits Act (WIBA) is an employee benefit plan enforced by the Kenya law that guarantees your employees get financial compensation when, by accident, they suffer injury, become disabled or die while at work.
                    </p>
                    <p>What we pay for</p>
                    <ul class="list-group">
                        <li class="list-group-item">Medical Expenses</li>
                        <li class="list-group-item">Accidental death</li>
                        <li class="list-group-item">permanent total disablement</li>
                        <li class="list-group-item">Temporal total disablement</li>
                    </ul>
            </div>
            <div class="col-md-3">
                <img src="{{asset('Images/worker.jpg')}}" alt="" class="img-fluid">
            </div>
        </div>
        </div>
    </section>

@endsection