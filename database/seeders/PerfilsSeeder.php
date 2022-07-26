<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Iniciar los perfiles
         */

        DB::table('perfils')->insert([
            'user_id' => 1,
            'apellido1' => 'Prieto',
            'apellido2' => 'García',
            'telefono' => 654212112,
            'imagen' => 'silvia1.jpeg'
            

        ]);
        DB::table('perfils')->insert([
            'user_id' => 2,
            'apellido1' => 'García',
            'apellido2' => 'Pérez',
            'telefono' => 655222112,
            'imagen' => 'ana2.jpeg'

        ]);
        DB::table('perfils')->insert([
            'user_id' => 3,
            'apellido1' => 'Hernández',
            'apellido2' => 'Gómez',
            'telefono' => 656272112,
            'imagen' => 'sonia3.jpg'

        ]);
        DB::table('perfils')->insert([
            'user_id' => 4,
            'apellido1' => 'Pérez',
            'apellido2' => 'López',
            'telefono' => 657218112,
            'imagen' => 'carlota4.jpg'

        ]);
        DB::table('perfils')->insert([
            'user_id' => 5,
            'apellido1' => 'Sánchez',
            'apellido2' => 'Rodríguez',
            'telefono' => 654512112,
            'imagen' => 'irene5.jpg'

        ]);
        DB::table('perfils')->insert([
            'user_id' => 6,
            'apellido1' => 'Sánchez',
            'apellido2' => 'Rodríguez',
            'telefono' => 654512114,
            'imagen' => 'carmen6.jpg'

        ]);
    }
}
