<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Beasiswa;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beasiswa>
 */
class BeasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Beasiswa::class;
    public function definition()
    {
        return [
            'admin_id' => User::factory(),
            'title' => 'Beasiswa ' . $this->faker->word,
            'description' => $this->faker->sentence(20),
            'application_link' => $this->faker->url,
            'image_url' => null,
            'expired_date' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }
    
    public function configure()
    {
        return $this->afterCreating(function ($beasiswa) {
            $beasiswa->update([
                'image_url' => 'image' . $beasiswa->id . '.jpg',
            ]);
        });
    }
}
