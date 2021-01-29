<?php

namespace Database\Factories;

use App\Models\ResultsGrade;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResultsGradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ResultsGrade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'division_system' => $this->faker->name,
            'merits_system' => $this->faker->name,
        ];
    }
}
