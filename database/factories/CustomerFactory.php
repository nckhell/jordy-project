<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as FakerInstance;

$factory->define(Customer::class, function (FakerInstance $faker) {
    $faker->addProvider(new Faker\Provider\nl_BE\Payment($faker));
    $faker->addProvider(new Faker\Provider\nl_NL\Company($faker));

    return [
        'name' => $faker->company,
        'address' => $faker->streetAddress,
        'postalCode' => $faker->postcode,
        'city' => $faker->city,
        'country' => $faker->country,
        'VAT' => $faker->vat,
    ];
});
