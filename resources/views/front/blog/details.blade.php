@extends('front.master')
@section('title')
    Blog Details
@endsection
@section('body')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Blog</h2>
                <ol>
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li><a href="{{route('show.blog')}}">Blog All</a></li>

                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="{{asset($blog->image)}}" alt="" class="img-fluid w-100" style="height: 400px;">
                        </div>

                        <h2 class="entry-title">
                            <a href="{{route('blog.details', ['id' => $blog->id])}}">{{$blog->title}}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                @php
                                    $author = \App\Models\User::find($blog->author_id);
                                @endphp
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{route('blog.details', ['id' => $blog->id])}}">{{$author->name}}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{route('blog.details', ['id' => $blog->id])}}"><time datetime="2020-01-01">{{\Illuminate\Support\Carbon::parse($blog->created_at)->format('d M, Y')}}</time></a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>{{$blog->short_description}}</p>

                            <blockquote>
                                <p>
                                    Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                                </p>
                            </blockquote>

                            <p>{{$blog->long_description}}</p>
                        </div>

                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul>
                                @foreach($blogs as $blog)
                                    <li><a href="{{route('blog.details', ['id' => $blog->id])}}">{{$blog->category->name}}</a></li>
                                @endforeach
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul>
                                @foreach($blogs as $blog)
                                    <li><a href="{{route('blog.details', ['id' => $blog->id])}}">{{$blog->category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                    </article><!-- End blog entry -->

                    <div class="blog-author d-flex align-items-center">
                        <img src="{{asset(Auth()->user()->userDetail->image)}}" class="rounded-circle float-left" alt="">
                        <div>
                            <h4>{{Auth()->user()->name}}</h4>
                            <div class="social-links">
                                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                            </div>
                            <p>{{Auth()->user()->userDetail->description}}</p>
                        </div>
                    </div><!-- End blog author bio -->


                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach($blogs as $blog)
                                    <li><a href="{{route('blog.details', ['id' => $blog->id])}}">{{$blog->category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="{{asset('/')}}front-assets/img/blog/blog-recent-1.jpg" alt="">
                                <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{asset('/')}}front-assets/img/blog/blog-recent-2.jpg" alt="">
                                <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{asset('/')}}front-assets/img/blog/blog-recent-3.jpg" alt="">
                                <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{asset('/')}}front-assets/img/blog/blog-recent-4.jpg" alt="">
                                <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{asset('/')}}front-assets/img/blog/blog-recent-5.jpg" alt="">
                                <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                        </div><!-- End sidebar recent posts-->

                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                @foreach($blogs as $blog)
                                    <li><a href="{{route('blog.details', ['id' => $blog->id])}}">{{$blog->category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Single Section -->



@endsection



