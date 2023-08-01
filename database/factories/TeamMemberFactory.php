<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $timezoneIdentifiers = timezone_identifiers_list();
        $randomTimezone = $timezoneIdentifiers[array_rand($timezoneIdentifiers)];
        return [
            'name' => $this->faker->name,
            'timezone' => $randomTimezone
        ];
    }
}
