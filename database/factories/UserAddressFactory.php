<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CreditRequest;
use App\UserAddress;
use Faker\Generator as Faker;

$factory->define(UserAddress::class, function (Faker $faker) {
    return [
        'credit_request_id' => function () {
            $x = factory(CreditRequest::class)->create();
            return $x->id;
        },
        'description' => $faker->unique->name
    ];
});
