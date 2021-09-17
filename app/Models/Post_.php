<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
   static $blog_post = [
    [
        "title" => 'Post Pertama',
        "slug"=>'post-pertama',
        'author'=>'Sandika galih',
        'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto qui quisquam a repellat quaerat fugiat ducimus enim eligendi ut illum laudantium optio fuga alias, doloremque dicta? Nisi, eligendi. Tempora dolores saepe facilis suscipit excepturi, aut ipsa perferendis natus accusamus voluptates eum accusantium vitae ullam fugit? Totam consequatur soluta aspernatur hic quam facere nesciunt nisi ratione deserunt molestias sit nemo eveniet reprehenderit dolorum laborum molestiae modi iure, rem error dolore mollitia? Architecto corrupti excepturi voluptates similique ipsam, culpa maxime dolor rem sit at animi, commodi officia fugiat consectetur corporis qui error. Tempora consectetur ea iste corporis id perspiciatis nemo ipsam accusantium sunt. Quod minima ipsa quasi optio, porro qui officiis, voluptatum eaque voluptates quas earum placeat? Porro, consequuntur perspiciatis esse quidem at quisquam, accusantium rerum illum recusandae sequi quam aliquam! Nemo ex quam aliquam neque, odit optio sint atque perspiciatis non nihil dolore voluptatum, animi error ratione laborum inventore rem beatae.'
    ],
    [
        "title" => 'Post Kedua',
        'slug'=>'post-kedua',
        'author'=>'Ratna Terompet',
        'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto qui quisquam a repellat quaerat fugiat ducimus enim eligendi ut illum laudantium optio fuga alias, doloremque dicta? Nisi, eligendi. Tempora dolores saepe facilis suscipit excepturi, aut ipsa perferendis natus accusamus voluptates eum accusantium vitae ullam fugit? Totam consequatur soluta aspernatur hic quam facere nesciunt nisi ratione deserunt molestias sit nemo eveniet reprehenderit dolorum laborum molestiae modi iure, rem error dolore mollitia? Architecto corrupti excepturi voluptates similique ipsam, culpa maxime dolor rem sit at animi, commodi officia fugiat consectetur corporis qui error. Tempora consectetur ea iste corporis id perspiciatis nemo ipsam accusantium sunt. Quod minima ipsa quasi optio, porro qui officiis, voluptatum eaque voluptates quas earum placeat? Porro, consequuntur perspiciatis esse quidem at quisquam, accusantium rerum illum recusandae sequi quam aliquam! Nemo ex quam aliquam neque, odit optio sint atque perspiciatis non nihil dolore voluptatum, animi error ratione laborum inventore rem beatae.'
    ],
    ];

    public static function all(){
        return collect(self::$blog_post);
    }
    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
