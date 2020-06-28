<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$types = \App\Models\Type::pluck('id')->toArray();

$factory->define(\App\Models\Customer::class, function (Faker $faker) use ($types) {
    return [
        'code' => $faker->randomNumber(8, true),
        'type_id' => $faker->randomElement($types),
        'uuid' => $faker->uuid,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'name' => $faker->company,
    ];
});
