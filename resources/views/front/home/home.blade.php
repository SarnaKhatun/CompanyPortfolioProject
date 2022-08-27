@extends('front.master')
@section('title')
    Home
@endsection
@section('body')


    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

            @foreach($sliders as $slider)
                <!-- Slide 1 -->
                <div class="carousel-item active w-100" style="background-image: url({{asset($slider->image)}}); height: 550px;">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Welcome to <span>{{$slider->title}}</span></h2>
                            <p>{{$slider->description}}</p>
                            <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                        </div>
                    </div>
                </div>
                @endforeach


{{--                <!-- Slide 2 -->--}}
{{--                <div class="carousel-item" style="background-image: url({{asset('/')}}front-assets/img/slide/slide-2.jpg);">--}}
{{--                    <div class="carousel-container">--}}
{{--                        <div class="carousel-content animate__animated animate__fadeInUp">--}}
{{--                            <h2>Lorem Ipsum Dolor</h2>--}}
{{--                            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>--}}
{{--                            <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Slide 3 -->--}}
{{--                <div class="carousel-item" style="background-image: url({{asset('/')}}front-assets/img/slide/slide-3.jpg);">--}}
{{--                    <div class="carousel-container">--}}
{{--                        <div class="carousel-content animate__animated animate__fadeInUp">--}}
{{--                            <h2>Sequi ea ut et est quaerat</h2>--}}
{{--                            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>--}}
{{--                            <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2>Eum ipsam laborum deleniti velitena</h2>
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                        </ul>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

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

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">
                    @foreach($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{asset($portfolio->image)}}" class="img-fluid w-100" alt="" style="height: 300px;">
                        <div class="portfolio-info">
                            <h4>{{$portfolio->category->name}}</h4>
                            <p>{{$portfolio->description}}</p>
                            <a href="{{asset($portfolio->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="{{route('portfolio.details', ['id' => $portfolio->id])}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Clients</h2>
                </div>

                <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{asset('/')}}front-assets/img/clients/client-1.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{asset('/')}}front-assets/img/clients/client-2.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{asset('/')}}front-assets/img/clients/client-3.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{asset('/')}}front-assets/img/clients/client-4.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{asset('/')}}front-assets/img/clients/client-5.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{asset('/')}}front-assets/img/clients/client-6.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{asset('/')}}front-assets/img/clients/client-7.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{asset('/')}}front-assets/img/clients/client-8.png" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Our Clients Section -->


    </main><!-- End #main -->
@endsection
