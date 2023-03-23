<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'lien_image' => 'https://picsum.photos/200/300',
            'prix' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100),
            'tva' => '5.5',
        ];
    }
}
