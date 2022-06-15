<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home.home');
})->name('home');


Route::get('/home',function(){
    return view('frontend.home.home');
})->name('home');


Route::get('/about',function(){
    return view('frontend.about.about');
})->name('about');


Route::get('/offers',function(){
    return view('frontend.offers.offers');
})->name('offers');

Route::get('/dining',function(){
    return view('frontend.dining.dining');

})->name('dining');

Route::get('/meetingevents',function(){
    return view('frontend.meetingandevents.meeting');
})->name('meetings');

Route::get('/services',function(){
    return view('frontend.services.services');
})->name('services');

Route::get('/contact',function(){
    return view('frontend.contact.contact');
})->name('contact');

Route::get('/gallery',function(){
    return view('frontend.gallery.gallery');
})->name('gallery');

Route::get('/bedinfo',function(){
    return view('frontend.bedinfopage.bedinfo');
})->name('bedinfo');