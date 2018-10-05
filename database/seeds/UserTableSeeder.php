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
            'name' => '42005203',
            'email' => 'admin@telemovilperu.com',
            'password' => bcrypt('1234'),
            'created_at' => Carbon::now(),
        ]);
    }
}
