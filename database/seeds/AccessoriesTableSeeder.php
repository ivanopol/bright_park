<?php

use Illuminate\Database\Seeder;

class AccessoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accessories = [
            [
                'title' => '1',
                'text' => '1',
                'text_preview' => '1',
                'text_short' => '1',
                'preview' => '1',
                'slug' => '1',
            ],
        ];
        DB::table('accessories')->insert($accessories);
    }
}
