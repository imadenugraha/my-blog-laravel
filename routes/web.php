<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::redirect('/', '/home', 301);

Route::get('/home', function () {
    return view('home', [
        'routeTitle' => 'Home',
    ]);
});

Route::get('/posts', function() {
    return view('posts', [
        'routeTitle' => 'Posts',
        'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul 1',
                'author' => 'Made',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi consequuntur voluptates cumque. 
                Neque magni itaque hic temporibus tempora in, quo, mollitia amet voluptatibus commodi minus quod? Autem veniam ducimus maxime.',
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul 2',
                'author' => 'Made',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Neque libero, iusto, exercitationem animi quidem eum atque repellat cumque molestiae saepe nam. Doloremque rerum quia error cum. 
                Debitis, laboriosam libero. Iusto.',
            ],
        ]
    ]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul 1',
            'author' => 'Made',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi consequuntur voluptates cumque. 
            Neque magni itaque hic temporibus tempora in, quo, mollitia amet voluptatibus commodi minus quod? Autem veniam ducimus maxime.',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul 2',
            'author' => 'Made',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Neque libero, iusto, exercitationem animi quidem eum atque repellat cumque molestiae saepe nam. Doloremque rerum quia error cum. 
            Debitis, laboriosam libero. Iusto.',
        ],
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'routeTitle' => 'Single Post',
        'post' => $post,
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
