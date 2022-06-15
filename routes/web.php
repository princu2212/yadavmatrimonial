<?php

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\MatrimonialController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\SlideController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('backend.index');
});

// Frontend All Routes
Route::redirect('/', '/hi');
Route::group(['prefix' => '{language?}'], function () {
    Route::controller(IndexController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/all/matrimonial', 'allMatrimonial')->name('all.matrimonial');
        Route::get('/matrimonial/details/{id?}', 'matrimonialDetails')->name('matrimonial.details');
        Route::get('/all/blog', 'allBlog')->name('all.blog');
        Route::get('/blog/details/{id?}', 'blogDetails')->name('blog.details');
        Route::get('/about', 'aboutUs')->name('about');
        Route::get('/contact', 'contactUs')->name('contact');
        Route::get('/add/matrimonial', 'addMatrimonial')->name('add.matrimonial');
        Route::get('/social-media-share', 'ShareWidget')->name('social.share');
        Route::get('/matrimonial/pdf/{id?}', 'download')->name('matrimonial.download');
    });
});

// Backend All Routes
Route::controller(MatrimonialController::class)->group(function () {
    Route::get('/matrimonial/create', 'create')->name('matrimonial.create');
    Route::post('/matrimonial/store', 'store')->name('matrimonial.store');
    Route::get('/matrimonial/show', 'show')->name('matrimonial.show');
    Route::get('/matrimonial/edit/{id}', 'edit')->name('matrimonial.edit');
    Route::put('/matrimonial/update/{id}', 'update')->name('matrimonial.update');
    Route::delete('/matrimonial/destroy/{id}', 'destroy')->name('matrimonial.destroy');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog/create', 'create')->name('blog.create');
    Route::post('/blog/store', 'store')->name('blog.store');
    Route::get('/blog/show', 'show')->name('blog.show');
    Route::get('/blog/edit/{id}', 'edit')->name('blog.edit');
    Route::put('/blog/update/{id}', 'update')->name('blog.update');
    Route::delete('/blog/destroy/{id}', 'destroy')->name('blog.destroy');
});

Route::controller(SlideController::class)->group(function () {
    Route::get('/slide/create', 'create')->name('slide');
    Route::post('/slide/store', 'store')->name('slide.store');
    Route::get('/slide/show', 'show')->name('slide.show');
    Route::get('/slide/edit/{id}', 'edit')->name('slide.edit');
    Route::put('/slide/update/{id}', 'update')->name('slide.update');
    Route::delete('/slide/destroy/{id}', 'destroy')->name('slide.destroy');
});

Route::controller(MessageController::class)->group(function () {
    Route::get('/message/create', 'create')->name('message.create');
    Route::post('/message/store', 'store')->name('message.store');
    Route::get('/message/show/{id}', 'show')->name('message.show');
    Route::delete('/message/destroy/{id}', 'destroy')->name('message.destroy');
});

Route::controller(FooterController::class)->group(function () {
    Route::get('/footer/create', 'create')->name('footer.create');
    Route::put('/footer/update/{id}', 'update')->name('footer.update');
});
