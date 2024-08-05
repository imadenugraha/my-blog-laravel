<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;


Route::redirect('/', '/home', 301);

Route::get('/home', function () {
    return view('home', [
        'routeTitle' => 'Home',
    ]);
});

Route::get('/posts', function() {
    return view('posts', [
        'routeTitle' => 'Posts',
        'posts' => Post::all(),
    ]);
});

Route::get('/posts/{slug}', function($slug) {
    return view('post', [
        'routeTitle' => 'Single Post',
        'post' => Post::find($slug),
    ]);
});

Route::get('/about', function() {
    return view('about', [
        'routeTitle' => 'About',
    ]);
});

Route::get('/contact', function() {
    return view('contact', [
        'routeTitle' => 'Contact'
    ]);
});
