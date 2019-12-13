<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactCategory;
use Faker\Generator as Faker;

$factory->define(ContactCategory::class, function (Faker $faker) {
    return [
        'desc' => 'Home'
    ];
});
