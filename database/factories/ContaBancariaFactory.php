<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContaBancariaFactory extends Factory
{

    public function definition()
    {
        return [
            'banco_nome' => $this->faker->word(),
            'agencia_numero' => $this->faker->randomNumber(4, true),
            'conta_numero' => $this->faker->randomNumber(6, true),
            'saldo_inicial' => $this->faker->randomFloat(2,10,1000)

        ];
    }
}
