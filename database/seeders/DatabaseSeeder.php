<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuarios de prueba para el sistema de gestión documental
        
        // Administrador del sistema
        User::factory()->create([
            'name' => 'Administrador Sistema',
            'email' => 'admin@gestiondocumental.com',
        ]);

        // Usuario de prueba
        User::factory()->create([
            'name' => 'Usuario Prueba',
            'email' => 'usuario@gestiondocumental.com',
        ]);

        // Generar usuarios adicionales para pruebas
        // User::factory(5)->create();
    }
}
