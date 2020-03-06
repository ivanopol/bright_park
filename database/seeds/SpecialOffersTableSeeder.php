<?php


use Illuminate\Database\Seeder;

class SpecialOffersTableSeeder extends Seeder
{
    public function run()
    {
        $special_offers = [
            ['start_date' => date('Y-m-d', 1583068523),
                'end_date' => date('Y-m-d', 1585660523),
                'title'=>'LADA VESTA', 'description'=>'Доплата при обмене до 40 000 т. р.',
                'count'=>17, 'is_active'=>true],
        ];

        DB::table('$special_offers')->insert($special_offers);
    }
}
