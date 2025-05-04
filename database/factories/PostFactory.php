<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $title = fake()->sentence();
        $category = Category::inRandomOrder()->first() ?? Category::factory()->create();
        $user = User::find(1) ?? User::factory()->create(['id' => 1]);

        return [
            'image' => fake()->url(),
            'name' => $title,
            'slug' => Str::slug($title),
            'content' => fake()->paragraph(5),
            'category_id' => $category->id,
            'user_id' => $user->id,
            'published_at' => fake()->optional()->dateTime(),
        ];
    }
}
