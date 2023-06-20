<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Suppotr\Facades\DB;
use  \App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias=[
            ['categorias' => 'Vehiculos'],
            ['categorias' => 'Helicopteros'],
            ['categorias' => 'Mapas'],
            ['categorias' => 'Barcos'],
            ['categorias' => 'Aviones'],
            ['categorias' => 'Skins'],
            ['categorias' => 'Paws']

        ];
        foreach ($categorias as  $value) {
            Categoria::create($value)->save();
        }


    }
}
