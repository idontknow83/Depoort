<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('cliënt')->insert([
            'voornaam' => fake()->firstName(),
            'tussenvoegsel' => null,
            'achternaam' => fake()->lastName(),
            'foto' => fake()->imageUrl(),
            'adres' => fake()->address(),
            'postcode' => fake()->postcode(),
            'woonplaats' => fake()->city(),
            'land' => fake()->country(),
            'telefoon' => fake()->phoneNumber(),
            'mobiel' => fake()->phoneNumber(),
        ]);

        DB::table('arts')->insert([
            'voornaam' => fake()->firstName(),
            'tussenvoegsel' => null,
            'achternaam' => fake()->lastName(),
            'adres' => fake()->address(),
            'postcode' => fake()->postcode(),
            'woonplaats' => fake()->city(),
            'land' => fake()->country(),
            'telefoon' => fake()->phoneNumber(),
            'mobiel' => fake()->phoneNumber(),
        ]);

        DB::table('consult')->insert([
            'artsId' => fake()->randomNumber(3),
            'cliëntId' => fake()->randomNumber(3), 
            'tekst' => fake()->realText(200),
        ]);
    }
}
