<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naam' => fake()->name(),
            'telnummer' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'adres' => fake()->streetAddress(),
            'land' => fake()->country(),
            'postcode' => fake()->postcode(),
            'woonplaats' => fake()->city(),
            'gender' => 'o',
            'geboortedatum' => fake()->date(),
            'password' => Hash::make( fake()->password()),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
//     public function unverified(): static
//     {
//         return $this->state(fn (array $attributes) => [
//             'email_verified_at' => null,
//         ]);
//     }
}
