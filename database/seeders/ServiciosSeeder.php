<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('servicios')->insert([
            'especialidad_id' => 1,
            'nombre' => 'Peinado',
            'descripcion' => 'Dar forma al cabello.Puede ser tanto: liso, ondulado o rizado',
            'duracion' => 30,
            'precio' => '11',
            'imagen'=> 'peinado.jpeg'
        ]);
        DB::table('servicios')->insert([
            'especialidad_id' => 1,
            'nombre' => 'Peinado',
            'descripcion' => 'Arreglar o sanear el cabello y modificar con ello',
            'duracion' => 30,
            'precio' => '12',
            'imagen'=> 'corte chica.jpeg'
        ]);
    }
}
