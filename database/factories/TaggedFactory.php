<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Database\Factories\Playground\Directory\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Playground\Directory\Models\Tagged;

/**
 * \Database\Factories\Playground\Directory\Models\TaggedFactory
 *
 * @extends Factory<Tagged>
 */
class TaggedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Tagged>
     */
    protected $model = Tagged::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [];
    }
}
