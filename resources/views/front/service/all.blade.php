@extends('front.master')
@section('title')
    Service All
@endsection
@section('body')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Service</h2>
                <ol>
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li><a href="{{route('show.service')}}">Service All</a></li>

                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div class="card text-center">
                            <h4 class="card-title pt-3">{{$service->title}}</h4>
                            <div class="card-img-wrapper">
                                <img class="card-img-top rounded-0 w-100" src="{{asset($service->image)}}" alt="" style="height: 250px;">
                            </div>
                            <div class="card-body p-0">
                                <i class="square-icon translateY-33 rounded ti-bar-chart"></i>
                                <p class="card-text mx-2 mb-0">{{$service->short_description}}</p>
                                <a href="{{route('service.details', ['id' => $service->id])}}" class="btn btn-secondary float-end">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->

@endsection
