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
            'nombre' => 'Aguila',
            'tipo' => 'Bebida',
            'precio' => 2.5,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/aguila.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Aquarius',
            'tipo' => 'Bebida',
            'precio' => 2.5,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/aquarius.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Nestea',
            'tipo' => 'Bebida',
            'precio' => 2.5,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/nestea.jpg",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Trina',
            'tipo' => 'Bebida',
            'precio' => 2.5,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/trina.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Fanta',
            'tipo' => 'Bebida',
            'precio' => 2.5,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/fanta.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Chufi',
            'tipo' => 'Bebida',
            'precio' => 2.5,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/chufi.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Maohu',
            'tipo' => 'Bebida',
            'precio' => 2,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/maohu.png",
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
            'img' => "../img/carbonara.png",
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
        DB::table("productos")->insert([
            'nombre' => 'Aceitunas',
            'tipo' => 'picoteo',
            'precio' => 2,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/aceitunas.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Enbutidos',
            'tipo' => 'picoteo',
            'precio' => 12,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/enbutidos.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Migas',
            'tipo' => 'picoteo',
            'precio' => 10.5,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/migas.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Cachopo',
            'tipo' => 'comida',
            'precio' => 18.9,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/cachopo.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'Chipirones',
            'tipo' => 'comida',
            'precio' => 15.3,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/chipirones.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'bicho',
            'tipo' => 'novedad',
            'precio' => 15.3,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/chipirones.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'chico',
            'tipo' => 'novedad',
            'precio' => 18.9,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/cachopo.png",
        ]);
        DB::table("productos")->insert([
            'nombre' => 'los',
            'tipo' => 'novedad',
            'precio' => 10.5,
            'ofertas' => 'no',
            'precio_ofertas' => 0,
            'img' => "../img/migas.png",
        ]);
    }
}
