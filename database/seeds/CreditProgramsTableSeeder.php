<?php


use Illuminate\Database\Seeder;

class CreditProgramsTableSeeder extends Seeder
{
    public function run() {
        $credit_programs = [
            ['name'=>'Обычная программа', 'percent_rate'=>15],
            ['name'=>'LADA Finance', 'percent_rate'=>12],
            ['name'=>'Специальный рассчет', 'percent_rate'=>5],
        ];

        DB::table('credit_programs')->insert($credit_programs);
    }
}
