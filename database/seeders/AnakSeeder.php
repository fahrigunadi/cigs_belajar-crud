<?php

namespace Database\Seeders;

use App\Models\Anak;
use App\Models\Ortu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anak::create([
            'nama' => fake()->name(),
            'tanggal_lahir' => fake()->date(),
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Lorem, ipsum. dolor sit amet',
            'ortu_id' => Ortu::first()->id,
        ]);

        Anak::create([
            'nama' => fake()->name(),
            'tanggal_lahir' => fake()->date(),
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Lorem, ipsum. dolor sit amet',
            'ortu_id' => Ortu::first()->id,
        ]);

        Anak::create([
            'nama' => fake()->name(),
            'tanggal_lahir' => fake()->date(),
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Lorem, ipsum. dolor sit amet',
            'ortu_id' => Ortu::first()->id,
        ]);
    }
}
