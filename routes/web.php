<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::view('/', 'home')->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('contact', 'contact')->name('contact');
// the route name is used inside blade like this
// {{ route('rout_name') }} so if we changed the URL
//it will dynamically change every where
Route::view('about-us', 'about')->name('about');
Route::view('article', 'article')->name('article');
Route::get('/migrations', function() {
    return view('migration');
});
