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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Article::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'id_article_category' => $faker->biasedNumberBetween($min = 1, $max = 4, $function = 'sqrt'),
        'name'                => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'slug'                => $faker->unique()->slug,
        'description'         => '<p>' . $faker->paragraph($nbSentences = 5, $variableNbSentences = true) . '</p>',
        'short_description'   => '<p>' . $faker->paragraph($nbSentences = 1, $variableNbSentences = true) . '</p>',
        'image'               => $faker->image($dir = '../amadeo/source', $width = 640, $height = 480),
        'priority'            => 0,
        'actor'               => 0,
        'flag_publish'        => 1,
    ];
});

$factory->define(App\Gallery::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'                => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'slug'                => $faker->unique()->slug,
        'description'         => '<p>' . $faker->paragraph($nbSentences = 8, $variableNbSentences = true) . '</p>',
        'short_description'   => '<p>' . $faker->paragraph($nbSentences = 1, $variableNbSentences = true) . '</p>',
        'image'               => $faker->image($dir = '../amadeo/source', $width = 640, $height = 480),
        'date'                => $faker->date($format = 'Y-m-d', $max = 'now'),
        'priority'            => 0,
        'actor'               => 0,
        'flag_publish'        => 1,
    ];
});