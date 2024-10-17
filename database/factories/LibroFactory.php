<?php

namespace Database\Factories;

use App\Models\Libro;
use App\Models\Editorial; 
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    protected $model = Libro::class;

    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence,               
            'edicion' => $this->faker->numberBetween(1, 10),  
            'pais' => $this->faker->country,                  
            'precio' => $this->faker->randomFloat(2, 5, 100), 
            'editorial_id' => Editorial::factory(),           
        ];
    }
}
