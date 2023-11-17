<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_project' => $this->faker->word,
            'lokasi_project' => $this->faker->randomElement(['Surabaya', 'Malang', 'Batu']),
            'deskripsi' => $this->faker->sentence,
            'tanggal_mulai' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'tanggal_selesai' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
