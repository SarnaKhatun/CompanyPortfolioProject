@extends('front.master')
@section('title')
    Price All
@endsection
@section('body')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Price</h2>
                <ol>
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li><a href="{{route('show.price')}}">Price All</a></li>

                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="row">
                @foreach($prices as $price)
                <div class="col-lg-4 col-md-6" >
                    <div class="box" style="height: 400px;">
                        <h3>{{$price->name}}</h3>
                        <h4><sup>$</sup>{{$price->price}}<span> / month</span></h4>
                        <ul>
                            <li>{{$price->description}}</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Pricing Section -->



@endsection



