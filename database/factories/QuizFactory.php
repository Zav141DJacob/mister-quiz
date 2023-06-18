<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'submitted' => false,
//            'category' => $this->faker->name,
            'selected' => 0,
            'score' => $this->faker->randomNumber(),
            'question_id' => Question::inRandomOrder()->first(),
            'user_id' => User::factory(),
        ];
    }
}
