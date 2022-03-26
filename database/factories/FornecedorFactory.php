<?php

namespace Database\Factories;

use App\Models\Fornecedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class FornecedorFactory extends Factory
{
    protected $model = Fornecedor::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome'=>$this->faker->word(),
            'endereco'=>$this->faker->sentence(3).' - '
            .$this->faker->region(),
            'cnpj'=>$this->faker->cnpj(),
            'telefone'=>$this->faker->cellphoneNumber()
        ];
    }
}
