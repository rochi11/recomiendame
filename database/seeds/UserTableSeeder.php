<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal')->insert([
            'nombrePersonal' => 'Rommel',
            'apellidoPaternoPersonal' => 'Chipana',
            'apellidoMaternoPersonal' => 'Caballero',
            'dniPersonal' => '42005203',
            'telefonoPersonal' => '999666333',
            'correoPersonal' => 'admin@telemovilperu.com',
            'codigoImei' => '12345678912345',
            'tipoPersonal' => 1,
            'cargoPersonal' => 1,
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'idPersonal' => 1,
            'nombreUsuario' => '42005203',
            'claveUsuario' => bcrypt('1234'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('accesos')->insert([
            'idUsuario' => 1,
            'moduloAcceso' => 1,
            'crear' => 1,
            'leer' => 1,
            'actualizar' => 1,
            'borrar' => 1,
            'created_at' => Carbon::now(),
        ]);
        DB::table('cambios')->insert([
            'idUsuario' => 1,
            'valorCambio' => 2.9,
            'created_at' => Carbon::now(),
        ]);
    }
}
