<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Equipement;
use Faker\Generator as Faker;

$factory->define(Equipement::class, function (Faker $faker) {
    return [
        'famille_equipement_id' => $faker->numberBetween($min = 1, $max = 51),
        'equip_code' => $faker->swiftBicNumber,
        'designation' => $faker->bs

    ];
});
