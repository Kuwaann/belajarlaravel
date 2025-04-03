<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts', 'posts' => [
        [
            'id' => 1,
            'slug' => "judul-artikel-1",
            'title' => 'Judul Artikel 1',
            'author' => 'Muhammad Emir Rivaldy',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Soluta at nam quisquam necessitatibus dolorem incidunt, 
                doloribus numquam libero sint quibusdam tempora aliquam 
                officia perspiciatis, esse obcaecati vel nostrum, eveniet neque?'
        ],
        [
            'id' => 2,
            'slug' => "judul-artikel-2",
            'title' => 'Judul Artikel 2',
            'author' => 'Muhammad Emir Rivaldys',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, enim sapiente, hic veniam sequi eos nemo repellendus, nesciunt vel in pariatur voluptatem veritatis animi explicabo atque ipsam reprehenderit! Dolorum, maxime!'
        ]

    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => "judul-artikel-1",
            'title' => 'Judul Artikel 1',
            'author' => 'Muhammad Emir Rivaldy',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Soluta at nam quisquam necessitatibus dolorem incidunt, 
                doloribus numquam libero sint quibusdam tempora aliquam 
                officia perspiciatis, esse obcaecati vel nostrum, eveniet neque?'
        ],
        [
            'id' => 2,
            'slug' => "judul-artikel-2",
            'title' => 'Judul Artikel 2',
            'author' => 'Muhammad Emir Rivaldys',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, enim sapiente, hic veniam sequi eos nemo repellendus, nesciunt vel in pariatur voluptatem veritatis animi explicabo atque ipsam reprehenderit! Dolorum, maxime!'
        ]

        ];

        $post = Arr::first($posts, function($post) use ($slug){
            return $post['id'] == $slug;
        });

        return view('post', ['title' => 'Single Post', 'post' => $post]);

        
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contacts', function () {
    return view('contacts', ['title' => 'Contacts']);
});
