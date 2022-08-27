@extends('front.master')
@section('title')
    Testimonial All
@endsection
@section('body')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Testimonial</h2>
                <ol>
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li><a href="{{route('show.testimonial')}}">Testimonial All</a></li>

                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="row">
                @foreach($users as $user)
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="testimonial-item">
                        <img src="{{asset($user->userDetail->image)}}" class="testimonial-img" alt="">
                        <h3>{{$user->name}}</h3>
                        <h4>{{$user->access_label == 4 ? 'Designer' : ''}}</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{$user->userDetail->description}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Testimonials Section -->






@endsection



