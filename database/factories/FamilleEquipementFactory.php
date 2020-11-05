<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FamilleEquipement;
use Faker\Generator as Faker;

$factory->define(FamilleEquipement::class, function (Faker $faker) {
    return [
        "nom" => $faker->jobTitle,
        "fam_equip_code" => $faker->unique()->stateAbbr(),
    ];
});
