<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
      'detail' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
  }
}
