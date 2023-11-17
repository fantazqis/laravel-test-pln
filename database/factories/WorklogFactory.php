<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorklogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_pegawai' => $this->faker->numberBetween(1, 3),
            'id_project' => $this->faker->numberBetween(1, 3),
            'durasi_kerja' => $this->faker->numberBetween(1, 8),
            'tanggal_pengerjaan' => $this->faker->date(),
        ];
    }
}
