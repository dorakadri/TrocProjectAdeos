<?php

namespace Database\Factories;

use App\Enums\AnnonceEchangeTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tags' => 'wood , table',
            'title' =>  fake()->sentence(),
            'taken' =>  fake()->boolean(),
            'location' =>  fake()->city(),
            'image' =>  fake()->imageUrl(),
            'echangetype' =>  fake()->randomElement(AnnonceEchangeTypeEnum::cases())->value,
            'description' =>  fake()->paragraph(5),
        ];
    }
}
