<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('city')->insert([
            'title' => 'Пермь',
            'email' => 'ivanopol777@mail.ru',
            'password' => bcrypt('1234567890'),
        ]);
    }
}
