<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CreditRequest;
use Faker\Generator as Faker;

$factory->define(CreditRequest::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
    ];
});
