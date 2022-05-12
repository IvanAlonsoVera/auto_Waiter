<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("productos")->insert([
            'nombre' => 'Cocacola',
            'tipo' => 'Bebida',
            'precio' => 2.5,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/cocacola.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Nestea',
            'tipo' => 'Bebida',
            'precio' => 2.5,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/nestea.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Cerveza',
            'tipo' => 'Bebida',
            'precio' => 2,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/cerveza.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Bravas',
            'tipo' => 'Picoteo',
            'precio' => 4.5,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/bravas.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Oreja',
            'tipo' => 'picoteo',
            'precio' => 7.5,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/oreja.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Croquetas',
            'tipo' => 'picoteo',
            'precio' => 6,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/croquetas.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Ravas',
            'tipo' => 'picoteo',
            'precio' => 8,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/ravas.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Espaguetis Carbonara',
            'tipo' => 'comida',
            'precio' => 11,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/espaguetis.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Sopa de cocido',
            'tipo' => 'comida',
            'precio' => 9,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/sopa.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Tortilla',
            'tipo' => 'comida',
            'precio' => 7,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/tortilla.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Entrecot de asturias',
            'tipo' => 'comida',
            'precio' => 22,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/entrecot.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Hamburguesa',
            'tipo' => 'comida',
            'precio' => 6.9,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/hamburguesa.png",
        ]);
    }
}
