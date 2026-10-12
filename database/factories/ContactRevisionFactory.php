<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Database\Factories\Playground\Directory\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Playground\Directory\Models\ContactRevision;

/**
 * \Database\Factories\Playground\Directory\Models\ContactRevisionFactory
 *
 * @extends Factory<ContactRevision>
 */
class ContactRevisionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<ContactRevision>
     */
    protected $model = ContactRevision::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3);

        return [
            'label' => $this->faker->sentence(3),
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'description' => $this->faker->sentence(3),
            'introduction' => $this->faker->sentence(3),
            'content' => $this->faker->sentence(3),
            'summary' => $this->faker->sentence(3),
        ];
    }

    // States: flags

    public function locked(): ContactRevisionFactory
    {
        return $this->state(fn (array $attributes) => [
            'locked' => true,
        ]);
    }

    public function published(): ContactRevisionFactory
    {
        return $this->state(fn (array $attributes) => [
            'published' => true,
        ]);
    }
}
