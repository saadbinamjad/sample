<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Motion::class, function (Faker\Generator $faker) {
    
    return [
        'motion' => $faker->sentence,
        'round_id' => function(){
        		return factory(App\Round::class)->create()->id;
        },
        'tournament_id' => function(){
        		return factory(App\Tournament::class)->create()->id;
        },
        'user_id' => function(){
        		return factory(App\User::class)->create()->id;
        },
        'status' => 1,
        'created_by' => 1,
      	'updated_by' => 1,
          
    ];
});



$factory->define(App\Round::class, function (Faker\Generator $faker) {

    return [
        'round' => $faker->randomDigit,
        'status' => 1,
        'created_by' => 1,
      	'updated_by' => 1,
    ];
});


$factory->define(App\Tournament::class, function (Faker\Generator $faker) {
    

    return [
        'name' => $faker->word,
        'host_institution_id' => function(){
        		return factory(App\Host::class)->create()->id;
        },
        'status' => 1,
         'created_by' => 1,
      	'updated_by' => 1,
        

    ];
});

$factory->define(App\Host::class, function (Faker\Generator $faker) {
    

    return [
        'name' => $faker->company,
        'region' => $faker->city,
        'status' => 1,
    ];
});

