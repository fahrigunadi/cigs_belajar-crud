<?php

namespace Database\Seeders;

use App\Models\Ortu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrtuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ortu::create([
            'nama' => fake()->name(),
            'alamat' => fake()->address()
        ]);

        Ortu::create([
            'nama' => fake()->name(),
            'alamat' => fake()->address()
        ]);
    }
}
