<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Portfolio;
use App\Models\Price;
use App\Models\Service;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        return view('front.home.home', [
            'sliders' => Slider::all(),
            'services' => Service::latest()->take(3)->get(),
            'portfolios' => Portfolio::latest()->take(3)->get(),
        ]);
    }


    public function contact ()
    {
        return view('front.contact.contact');
    }

    public function serviceDetails ($id)
    {
        return view('front.service.details', [
            'service' => Service::find($id),
            'services' => Service::latest()->get(),
        ]);
    }


    public function serviceAll ()
    {
        return view('front.service.all', [
            'services' => Service::latest()->get(),
        ]);
    }


    public function portfolioDetails ($id)
    {
        return view('front.portfolio.details', [
            'portfolio' => Portfolio::find($id),
            'portfolios' => Portfolio::latest()->get(),
        ]);
    }


    public function portfolioAll ()
    {
        return view('front.portfolio.all', [
            'portfolios' => Portfolio::latest()->get(),
        ]);
    }

    public function blogDetails ($id)
    {
        return view('front.blog.details', [
            'blog' => Blog::find($id),
            'blogs' => Blog::latest()->get(),
        ]);
    }


    public function blogAll ()
    {
        return view('front.blog.all', [
            'blogs' => Blog::latest()->get(),
            'blogsS' => BlogCategory::all(),
        ]);
    }

    public function priceAll ()
    {
        return view('front.price.all', [
            'prices' => Price::latest()->get(),
        ]);
    }

    public function teamAll ()
    {
        return view('front.team.all', [
            'users' => User::where('access_label', 1)->get(),
        ]);
    }

    public function testimonialAll ()
    {
        return view('front.testimonial.all', [
            'users' => User::where('access_label', 2)->get(),
        ]);
    }
}
