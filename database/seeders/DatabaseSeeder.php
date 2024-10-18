<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'naam' => 'root',
            'telnummer' => '3',
            'email' => 'root@example.com',
            'adres' => 'None',
            'land' => 'None',
            'postcode' => '3306DB',
            'woonplaats' => 'Cardboard Box',
            'gender' => 'Other',
            'geboortedatum' => '26-12-1791',
            'password' => Hash::make( 'password'),
        ]);

        DB::table('users')->insert([
            'naam' => 'admin',
            'telnummer' => '2',
            'email' => 'admin@example.com',
            'adres' => 'None',
            'land' => 'None',
            'postcode' => '3306DB',
            'woonplaats' => 'Cardboard Box',
            'gender' => 'Other',
            'geboortedatum' => '26-12-1791',
            'password' => Hash::make( 'password'),
        ]);

        DB::table('users')->insert([
            'naam' => 'arts',
            'telnummer' => '1',
            'email' => 'arts@example.com',
            'adres' => 'None',
            'land' => 'None',
            'postcode' => '3306DB',
            'woonplaats' => 'Cardboard Box',
            'gender' => 'Other',
            'geboortedatum' => '26-12-1791',
            'password' => Hash::make( 'password'),
        ]);

        DB::table('users')->insert([
            'naam' => 'user',
            'telnummer' => '0',
            'email' => 'someone@example.com',
            'adres' => 'None',
            'land' => 'None',
            'postcode' => '3306DB',
            'woonplaats' => 'Cardboard Box',
            'gender' => 'Other',
            'geboortedatum' => '26-12-1791',
            'password' => Hash::make( 'password'),
        ]);

        User::factory(10)->create();
        $this->call(LaratrustSeeder::class);

        /*
        Available methods:
        - addRole
        - addRoles
        - removeRole
        - removeRoles
        - givePermission
        - givePermissions
        - removePermission
        - removePermissions
        */

        User::find(1)->addRole('root');
        User::find(2)->addRole('admin');
        User::find(3)->addRole('arts');

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
