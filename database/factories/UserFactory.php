<?php

use Faker\Generator as Faker;



$factory->define(App\Message::class, function (Faker $faker) {

    do{
        $from = rand(1,30);
        $to = rand(1,30);
        $is_read = rand(0,1);
    }while($from === $to);

    return [
        'from' => $from,
        'to' => $to,
        'message'=>$faker->sentence,
        'is_read' => $is_read,
    ];
});
