@extends('front.master')
@section('title')
   Service Details Page
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

    <!-- service single -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- sidebar -->
                <aside class="col-lg-4 order-lg-1 order-2">
                    <!-- service menu -->
                    <ul class="service-menu pl-0 border rounded mb-50">
                        @foreach($services as $service)
                            <li class="active border-bottom">
                                <a class="d-block font-primary text-dark p-4 rounded-top" href="{{route('show.service')}}">{{$service->category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <!-- Brochure -->
                    <div class="rounded border py-3 px-4 mb-50">
                        <i class="d-inline-block mr-1 text-dark ti-files" style="font-size: 20px;"></i>
                        <h4 class="mb-1 d-inline-block"> Service Brochure</h4>
                        <a class="font-secondary text-color d-block ml-4" href="#">Download pdf</a>
                    </div>
                    <!-- Opening Hours -->
                    <div class="mb-50">
                        <h5 class="mb-20">Opening Hours</h5>
                        <ul class="pl-0 border rounded px-4 py-3">
                            <li class=" font-secondary my-3 text-color">
                                <span class="d-inline-block font-weight-light text-dark" style="width: 130px;">Sun-Tues:</span>08.00am
                                - 06.00pm</li>
                            <li class=" font-secondary my-3 text-color">
                                <span class="d-inline-block font-weight-light text-dark" style="width: 130px;">Thursday:</span>08.00am
                                - 01.00pm</li>
                            <li class="text-danger font-secondary my-3">
                                <span class="d-inline-block font-weight-light text-dark" style="width: 130px;">Friday:</span>Closed</li>
                        </ul>
                    </div>
                    <!-- Consultation -->
                    <div class="mb-50">
                        <h5 class="mb-20">Request Free Consultation</h5>
                        <form action="#" class="row">
                            <div class="col-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address"
                                       required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                       required>
                            </div>
                            <div class="col-12">
                            <textarea name="question" id="question" class="form-control p-2" placeholder="Your Question Here..."
                                      style="height: 150px;"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" value="send">Submit Request</button>
                            </div>
                        </form>
                    </div>
                </aside>
                <!-- service single content -->
                <div class="col-lg-8 order-lg-2 ">
                    <img class="img-fluid mb-60 rounded-top" src="{{asset($service->image)}}" alt="">
                    <h3 class="mb-10">{{$service->title}}</h3>
                    <p class="mb-40">{!! $service->short_description !!}</p>
                    <div class="bg-gray p-5 rounded mb-60">
                        <p class="text-dark font-primary mb-30">{!! $service->long_description !!}</p>
                        <div>
                            <ul class="nav flex-column">
                                @foreach($services as $service)
                                    <li class="active border-bottom">
                                        <a class="d-block font-primary text-dark p-4 rounded-top" href="{{route('show.service')}}">{{$service->category->name}}</a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                    <h4 class="mb-30">Marketing Improvement Strategy</h4>
                    <!-- chart -->
                    <p class="mb-100">{{$service->long_description}}</p>
                    <div class="mb-md-50">
                        <div class="row">
                            <div class="col-lg-6 col-md-7">
                                <h4 class="mb-10">Benifits Of Service</h4>
                                <p class="mb-20">{{$service->short_description}}</p>
                                <div>
                                    <ul class="nav flex-column">
                                        @foreach($services as $service)
                                            <li class="active border-bottom">
                                                <a class="d-block font-primary text-dark p-4 rounded-top" href="{{route('show.service')}}">{{$service->category->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /service single -->

@endsection
