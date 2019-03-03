<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user' => '42005203',
            'nombre' => 'Rommel',
            'apellido' => 'Chipana',
            'email' => 'admin@recomiendame.com',
            'password' => bcrypt('1234'),
            'created_at' => Carbon::now(),
        ]);
    }
}
