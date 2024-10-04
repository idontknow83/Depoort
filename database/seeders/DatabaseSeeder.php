<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // DB::table('client')->insert([
        //     'voornaam' => fake()->firstName(),
        //     'tussenvoegsel' => null,
        //     'achternaam' => fake()->lastName(),
        //     'foto' => fake()->imageUrl(),
        //     'adres' => fake()->randomNumber(4,1) . strtoupper(fake()->randomLetter() . fake()->randomLetter()),
        //     'postcode' => fake()->postcode(),
        //     'woonplaats' => fake()->city(),
        //     'land' => fake()->country(),
        //     'telefoon' => fake()->phoneNumber(),
        //     'mobiel' => fake()->phoneNumber(),
        // ]);

        // DB::table('arts')->insert([
        //     'voornaam' => fake()->firstName(),
        //     'tussenvoegsel' => null,
        //     'achternaam' => fake()->lastName(),
        //     'adres' => fake()->randomNumber(4,1) . strtoupper(fake()->randomLetter() . fake()->randomLetter()),
        //     'postcode' => fake()->postcode(),
        //     'woonplaats' => fake()->city(),
        //     'land' => fake()->country(),
        //     'telefoon' => fake()->phoneNumber(),
        //     'mobiel' => fake()->phoneNumber(),
        // ]);

        // DB::table('consult')->insert([
        //     'artsId' => fake()->randomNumber(3),
        //     'cliëntId' => fake()->randomNumber(3), 
        //     'tekst' => fake()->realText(200),
        // ]);
    }
}
