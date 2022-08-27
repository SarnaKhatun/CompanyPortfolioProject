@extends('front.master')
@section('title')
    Portfolio All
@endsection
@section('body')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Portfolio</h2>
                <ol>
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li><a href="{{route('show.portfolio')}}">Portfolio All</a></li>

                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

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
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app filter-card filter-web">
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

@endsection
