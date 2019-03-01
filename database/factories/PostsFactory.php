<?php

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $users = User::pluck('id')->toArray();
    return [
        //
        'user_id' => $faker->randomElement($users),
        'category_id' => $faker->numberBetween($min=2, $max=3),
        'photo_id' => $faker->numberBetween($min=2, $max=3),
        'title' => $faker->sentence(6,true),
            'body'=>$faker->paragraph( 5, true),

    ];
});
