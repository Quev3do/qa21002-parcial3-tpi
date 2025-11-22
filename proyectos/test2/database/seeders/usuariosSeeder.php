<?php

namespace Database\Seeders;

use App\Models\usuarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usuariosSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        usuarios::factory()->count(15)->create();
    }
}
