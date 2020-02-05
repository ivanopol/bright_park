<?php


namespace App\Services;


use Illuminate\Support\Facades\DB;

class BasePageService
{
    public function get_base_page_data($car_model, $car_type)
    {
        $condition = [
            ['model_id', '=', $car_model->id],
            ['type_id', '=', $car_type->id],
        ];

        $blocks_ids = [];

        $reviews = DB::table('reviews')->select('*')->where($condition)->get();
        $colors = DB::table('colors')->select('*')->where($condition)->get();
        $blocks = DB::table('blocks')->select('*')->where($condition)->get();

        foreach ($blocks as $block) {
            $blocks_ids[] = $block->id;
        }

        $blocks_slider = DB::table('block_sliders')->select('*')->whereIn('block_id', $blocks_ids)->get();
        $slides = DB::table('slides')->select('*')->where($condition)->get();
        $slide_mini = DB::table('slide_mini')->select('*')->where([
            ['model_id', '=', $car_model->id]
        ])->get();

        foreach ($blocks as &$block) {
            $block->slider = [];

            foreach ($blocks_slider as $slider) {
                if ($block->id == $slider->block_id) {
                    $block->slider[] = $slider;
                }
            }
        }

        $data = [
            'slider' => [
                'slides_mini' => $slide_mini,
                'slides' => $slides,
            ],
            'blocks' => $blocks,
            'reviews' => $reviews,
            'colors' => $colors
        ];

        return $data;
    }
}
