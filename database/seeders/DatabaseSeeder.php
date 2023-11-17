<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use App\Models\Project;
use App\Models\User;
use App\Models\Worklog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);


        Pegawai::factory(50)->create();
        Project::factory(50)->create();
        Worklog::factory(20)->create();
    }
}
