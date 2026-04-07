<?php

namespace Database\Factories;

use App\Models\Commission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Commission>
 */
class CommissionFactory extends Factory
{
    protected $model = Commission::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'commissioner_name' => fake()->name(),
            'commissioner_email' => fake()->safeEmail(),
            'commissioner_discord' => fake()->userName() . '#' . fake()->numerify('####'),
            'commission_type' => fake()->randomElement(['Character Illustration', 'Reference Sheet', 'Custom Template']),
            'budget' => fake()->randomElement(['$50-100', '$100-200', '$200-500', '$500+']),
            'deadline' => fake()->dateTimeBetween('+1 days', '+60 days')->format('Y-m-d'),
            'project_brief' => fake()->paragraphs(2, true),
            'notes' => fake()->optional(0.6)->sentence(),
            'date_started' => fake()->dateTimeBetween('-30 days', 'now')->format('Y-m-d'),
            'payment_status' => fake()->randomElement(['yet_to_receive', 'paid', 'fully_paid']),
            'phase' => fake()->randomElement(['sketch', 'lineart', 'rendering']),
        ];
    }
}
