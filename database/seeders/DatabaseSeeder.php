<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // $this->call(MahasiswaSedeer::class);
        // $this->call(UserSedeer::class);
        \App\Models\MataKuliah::factory()->count(24)->create();
    }
}
