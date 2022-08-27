<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\HomeController;

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\ProfileUpdateController;

use App\Http\Controllers\Admin\SliderController;

use App\Http\Controllers\Admin\PriceController;

use App\Http\Controllers\Admin\BlogCategoryController;

use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\Admin\ServiceCategoryController;

use App\Http\Controllers\Admin\ServiceController;

use App\Http\Controllers\Admin\PortfolioCategoryController;

use App\Http\Controllers\Admin\PortfolioController;

use App\Http\Controllers\Admin\ContactController;











Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::middleware('is_admin')->group(function () {
        Route::resource('users', UserController::class);
        Route::get('/user-status/{id}', [UserController::class, 'changeStatus'])->name('users.change-status');
    });

    Route::middleware('is_all')->group(function () {
        Route::get('/edit-profile', [ProfileUpdateController::class, 'editProfile'])->name('edit.profile');
        Route::post('/update-profile', [ProfileUpdateController::class, 'updateProfile'])->name('update.profile');
    });


    Route::middleware('is_staff')->group(function () {
        Route::get('/add-slider', [SliderController::class, 'addSlider'])->name('add-slider');
        Route::post('/new-slider', [SliderController::class, 'newSlider'])->name('new-slider');
        Route::get('/manage-slider', [SliderController::class, 'manageSlider'])->name('manage-slider');
        Route::get('/edit-slider/{id}', [SliderController::class, 'editSlider'])->name('edit-slider');
        Route::post('/delete-slider/{id}', [SliderController::class, 'deleteSlider'])->name('delete-slider');
        Route::post('/update-slider/{id}', [SliderController::class, 'updateSlider'])->name('update-slider');
        Route::get('/change-slider-status/{id}', [SliderController::class, 'changeStatus'])->name('slider.change-status');

    });


    Route::middleware('is_manager_accountant')->group(function () {
        Route::get('/add-price', [PriceController::class, 'addPrice'])->name('add-price');
        Route::post('/new-price', [PriceController::class, 'newPrice'])->name('new-price');
        Route::get('/manage-price', [PriceController::class, 'managePrice'])->name('manage-price');
        Route::get('/edit-price/{id}', [PriceController::class, 'editPrice'])->name('edit-price');
        Route::post('/delete-price/{id}', [PriceController::class, 'deletePrice'])->name('delete-price');
        Route::post('/update-price/{id}', [PriceController::class, 'updatePrice'])->name('update-price');
        Route::get('/change-price-status/{id}', [PriceController::class, 'changeStatus'])->name('price.change-status');
    });

    Route::middleware('is_admin_ceo')->group(function () {
        Route::resource('blogCategories', BlogCategoryController::class);
        Route::get('/blogCategory-change-status/{id}', [BlogCategoryController::class, 'changeStatus'])->name('blogCategories.change-status');

        Route::resource('blogs', BlogController::class);
        Route::get('/blog-change-status/{id}', [BlogController::class, 'changeStatus'])->name('blogs.change-status');


        Route::resource('serviceCategories', ServiceCategoryController::class);
        Route::get('/serviceCategory-change-status/{id}', [ServiceCategoryController::class, 'changeStatus'])->name('serviceCategories.change-status');

        Route::resource('services', ServiceController::class);
        Route::get('/service-change-status/{id}', [ServiceController::class, 'changeStatus'])->name('services.change-status');


        Route::resource('portfolioCategories', PortfolioCategoryController::class);
        Route::get('/portfolioCategory-change-status/{id}', [PortfolioCategoryController::class, 'changeStatus'])->name('portfolioCategories.change-status');

        Route::resource('portfolios', PortfolioController::class);
        Route::get('/portfolio-change-status/{id}', [PortfolioController::class, 'changeStatus'])->name('portfolios.change-status');

        Route::get('/manage-message', [ContactController::class, 'manageMessage'])->name('manage.message');
        Route::post('/delete-message/{id}', [ContactController::class, 'deleteMessage'])->name('delete.message');
        Route::get('/manage-status/{id}', [ContactController::class, 'manageStatus'])->name('message.change-status');

    });






});
