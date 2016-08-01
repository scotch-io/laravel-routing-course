<?php

Route::get('/', function() {
   return view('home');
});
Route::get('about', function() {
   return view('about');
})->name('about');
Route::get('contact', function() {
   return view('contact');
})->name('contact');

Route::get('{category}/{slug}', function($category, $slug) {
    return view('home');
});