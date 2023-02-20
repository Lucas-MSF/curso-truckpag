<?php

namespace Database\Factories;

use App\Models\Fornecedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContaPagarFactory extends Factory
{
   
    public function definition()
    {
        return [
            'fornecedor_id' => Fornecedor::inRandomOrder()->first()->getKey(),
            'descricao' => $this->faker->words(3, true),
            'valor' => $this->faker->randomFloat(2,10,200),
        ];
    }
}
