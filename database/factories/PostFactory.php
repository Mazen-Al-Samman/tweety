<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    
    $title = $faker->unique()->words($nb=4, $asText=true);
    $slug  = Str::slug($title, '-');
    
    return [
        'title' => $title,
        //'slug'  => strtolower(str_replace(' ', '-', $title)),
        'slug'  => $slug,
        'img'   => 'https://source.unsplash.com/random/600x600',
        'body'  => $faker->paragraph,
        'user_id'    => factory(App\User::class),
        'created_at' => $faker->dateTime(),
    ];
});
