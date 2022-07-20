<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Iniciar pruebas con usuarios
         */
        DB::table('users')->insert([
            'name' => 'Silvia',
            'email' => 'pgsilvia82@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin'

        ]);

        //Registro de trabajadores

        DB::table('users')->insert([
            'name' => 'Ana',
            'email' => 'mail1@gmail.com',
            'password' => Hash::make('ana12345678'),
            'role' => 'empleado'

        ]);

        DB::table('users')->insert([
            'name' => 'Sonia',
            'email' => 'mail2@gmail.com',
            'password' => Hash::make('sonia12345678'),
            'role' => 'empleado'

        ]);

        DB::table('users')->insert([
            'name' => 'Carlota',
            'email' => 'mail3@gmail.com',
            'password' => Hash::make('carlota12345678'),
            'role' => 'empleado'

        ]);
        DB::table('users')->insert([
            'name' => 'Irene',
            'email' => 'mail4@gmail.com',
            'password' => Hash::make('irene12345678'),
            'role' => 'empleado'

        ]);
        DB::table('users')->insert([
            'name' => 'Carmen',
            'email' => 'mail5@gmail.com',
            'password' => Hash::make('carmen12345678'),
            'role' => 'cliente'

        ]);
    }
}
