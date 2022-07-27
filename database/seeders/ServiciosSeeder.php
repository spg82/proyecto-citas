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
            'descripcion' => 'Es una forma de arreglarse el cabello, que puede ser tando liso, ondulado o rizado',
            'duracion' => 30,
            'precio' => '11',
            'imagen'=> 'peinado.jpeg'
        ]);
    }
}
