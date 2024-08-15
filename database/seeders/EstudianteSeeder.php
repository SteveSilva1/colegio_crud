<?php

namespace Database\Seeders;

use App\Models\Estudiante;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estudiante::factory()->count(1)->create();

        // Estudiante::factory()->create([
        //     'nombre' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
