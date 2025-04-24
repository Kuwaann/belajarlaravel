<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
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
    }
    public static function find($slug):array{
        $post = Arr::first(static::all(), function($post) use ($slug){
            return $post['slug'] == $slug;
        });

        if(! $post){
            abort(404);
        }

        return $post;
    }
}
?>