<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GudangBarang>
 */
class GudangBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang'=>$this->faker->words(2,true),
            'harga'=> $this->faker->numerify('###000'),
            'stok'=>$this->faker->numerify('###'),
            'id_supplier'=>$this->faker->numerify('###')
        ];
    }
}
