<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\ContactController;





Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/service-details/{id}', [HomeController::class, 'serviceDetails'])->name('service.details');
Route::get('/service-all', [HomeController::class, 'serviceAll'])->name('show.service');


Route::get('/portfolio-details/{id}', [HomeController::class, 'portfolioDetails'])->name('portfolio.details');
Route::get('/portfolio-all', [HomeController::class, 'portfolioAll'])->name('show.portfolio');

Route::get('/blog-details/{id}', [HomeController::class, 'blogDetails'])->name('blog.details');
Route::get('/blog-all', [HomeController::class, 'blogAll'])->name('show.blog');


Route::get('/price-all', [HomeController::class, 'priceAll'])->name('show.price');

Route::get('/team-all', [HomeController::class, 'teamAll'])->name('show.team');

Route::get('/testimonial-all', [HomeController::class, 'testimonialAll'])->name('show.testimonial');



Route::get('/contact-page', [HomeController::class, 'contact'])->name('create-message');
Route::post('/message-passing', [ContactController::class, 'messageSend'])->name('send-message');
