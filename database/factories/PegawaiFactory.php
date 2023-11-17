<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'email' => $this->faker->unique()->safeEmail,
            'no_telpon' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date,
        ];
    }
}
