@extends('front.master')
@section('title')
   Portfolio Details Page
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


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-8">

                    <div class="">
                        <img src="{{asset($portfolio->image)}}" alt="" style="height: 450px; " class="img-fluid w-100">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            @php
                            $author = \App\Models\User::find($portfolio->author_id);
                            @endphp
                            <li><strong>Category</strong>: {{$portfolio->category->name}}</li>
                            <li><strong>Client</strong>: {{$author->name}}</li>
                            <li><strong>Project date</strong>: {{\Illuminate\Support\Carbon::parse($portfolio->created_at)->format('d M, Y')}}</li>
                            <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>{{$portfolio->title}}</h2>
                        <p>{{$portfolio->description}}</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->


@endsection
