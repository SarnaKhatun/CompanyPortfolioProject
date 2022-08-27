@extends('front.master')
@section('title')
    Blog All
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

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">
                    @foreach($blogs as $blog)
                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{$blog->image}}" alt="" class="img-fluid w-100" style="height: 400px;">
                        </div>

                        <h2 class="entry-title">
                            <a href="{{route('blog.details', ['id' => $blog->id])}}"> {{$blog->title}}</a>
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
                            <div class="read-more">
                                <a href="{{route('blog.details', ['id' => $blog->id])}}">Read More</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->
                    @endforeach

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>

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
                                @foreach($blogsS as $blogs)
                                    <li><a href="{{route('blog.details', ['id' => $blogs->id])}}">{{$blogs->name}}</a></li>
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
                                @foreach($blogsS as $blogs)
                                    <li><a href="{{route('blog.details', ['id' => $blogs->id])}}">{{$blogs->name}}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->

@endsection



