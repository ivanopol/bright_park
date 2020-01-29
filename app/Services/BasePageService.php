<?php


namespace App\Services;


use Illuminate\Support\Facades\DB;

class BasePageService
{
    public function get_base_page_data()
    {
        $reviews = DB::select('select * from review');
        $colors = DB::select('select * from colors');
        $blocks = DB::select('select * from block left join block_slide as bs on bs.block_id = block.id');
        $slides = DB::select('select * from slide');
        $slide_mini = DB::select('select * from slide_min');

        $data = [
            'slider' => [
                'slides_mini' => $slide_mini,
                'slides' => $slides,
                'blocks' => $blocks,
                'reviews' => $reviews,
                'colors' => $colors
            ]
        ];

        return $data;
    }
}
