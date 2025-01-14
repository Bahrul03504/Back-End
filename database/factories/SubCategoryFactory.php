<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(), // Menghasilkan ID kategori secara otomatis
            'name' => $this->faker->word, // Menghasilkan nama subkategori acak
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
