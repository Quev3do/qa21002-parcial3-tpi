<?php

namespace Database\Seeders;

use App\Models\universidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    use WithoutModelEvents;
    public function run(): void
    {
        $universidades = ["UES-FMO", "UGB", "Univo"];

        foreach ($universidades as $nombre) {
            Universidad::factory()->create([
                'universidad' => $nombre
            ]);
        }
    }
}
