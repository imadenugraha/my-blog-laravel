<?php

namespace App\Models;

use Illuminate\Support\Arr;


class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug)
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
    
        if(!$post) {
            abort(404);
        } else {
            return $post;
        }
    }
}