<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  \App\Models\subcategoria;
class subcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategorias =[
            ['id_categoria' => 1 , 'descripcion' => 'Deportivos'],
            ['id_categoria' => 1 , 'descripcion' => 'Motos'],
            ['id_categoria' => 1 , 'descripcion' => 'Policia'],
            ['id_categoria' => 1 , 'descripcion' => 'Sheriff'],
            ['id_categoria' => 1 , 'descripcion' => 'Medicos'],
            ['id_categoria' => 1 , 'descripcion' => 'Militares'],
            ['id_categoria' => 1 , 'descripcion' => 'De_Carreras'],
            ['id_categoria' => 1 , 'descripcion' => 'Exclusivos'],


            ['id_categoria' => 2 , 'descripcion' => 'Militar'],
            ['id_categoria' => 2 , 'descripcion' => 'Maverick'],
            ['id_categoria' => 2 , 'descripcion' => 'Plolicia'],
            ['id_categoria' => 2 , 'descripcion' => 'Medicos'],
            ['id_categoria' => 2 , 'descripcion' => 'Sparrow'],

             ['id_categoria' => 3 , 'descripcion' => 'Mapas'],

            ['id_categoria' => 4 , 'descripcion' => 'Clasicos'],
            ['id_categoria' => 4 , 'descripcion' => 'Deportivos'],
            ['id_categoria' => 4 , 'descripcion' => 'Policiales'],

              ['id_categoria' => 5 , 'descripcion' => 'Avionetas'],
            ['id_categoria' => 5 , 'descripcion' => 'Aviones'],
            ['id_categoria' => 5 , 'descripcion' => 'Jets'],

                ['id_categoria' => 6 , 'descripcion' => 'Hombre'],
            ['id_categoria' => 6 , 'descripcion' => 'Mujeres'],
            ['id_categoria' => 6 , 'descripcion' => 'Pandilleros'],
            ['id_categoria' => 6 , 'descripcion' => 'Mafiosos'],
            ['id_categoria' => 6 , 'descripcion' => 'Policia -Swat'],
            ['id_categoria' => 6 , 'descripcion' => 'Sheriff'],
            ['id_categoria' => 6 , 'descripcion' => 'Medicos'],
            ['id_categoria' => 6 , 'descripcion' => 'Bomberos'],

             ['id_categoria' => 7 , 'descripcion' => 'Paws'],

        ];


        foreach ($subcategorias as  $value) {
            subcategoria::create($value)->save();
        }
    }
}
