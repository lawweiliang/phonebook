<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use App\ContactCategory;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {

    $count = ContactCategory::all()->count();

    return [
        'contact_category_id' => ($count >= 0) ? rand(1, $count) : 0,
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'phone_no' => $faker->phoneNumber
    ];
});
