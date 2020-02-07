<?php


namespace App\Services;


use App\CarModel;
use Illuminate\Support\Facades\DB;

class BasePageService
{
    public function get_base_page_data($car_model, $car_type)
    {
        $condition = [
            ['model_id', '=', $car_model->id],
            ['type_id', '=', $car_type->id],
        ];

        // Получаем информацию по блокам
        $blocks_ids = [];
        $blocks = DB::table('blocks')->select('*')->where($condition)->get();

        if ($blocks) {
            foreach ($blocks as $block) {
                $blocks_ids[] = $block->id;
            }
        }

        $blocks_slider = DB::table('block_sliders')->select('*')->whereIn('block_id', $blocks_ids)->orderBy('id', 'asc')->get();

        if ($blocks && $blocks_slider) {
            foreach ($blocks as &$block) {
                $block->slider = [];

                foreach ($blocks_slider as $slider) {
                    if ($block->id == $slider->block_id) {
                        $block->slider[$slider->number] = $slider;
                    }
                }
            }
        }

        // Получаем информацию по слайдам
        $slides = DB::table('slides')->select('*')->where($condition)->get();
        $slide_mini = DB::table('slide_mini')->select('*')->where([
            ['model_id', '=', $car_model->id]
        ])->get();

        $car_types = DB::select('SELECT `ct`.`slug`, `ct`.`id`
                                FROM `car_types` as `ct`
                                INNER JOIN `car_model_car_type` as `cmct` ON `cmct`.`car_type_id`=`ct`.`id`
                                 WHERE `cmct`.`car_model_id`=:model_id ORDER BY `ct`.`id` ASC', ['model_id' => $car_model->id]);

        foreach ($slide_mini as &$slide) {
            foreach ($car_types as $type) {
                if ($slide->type_id == $type->id) {
                    $slide->url = $car_model->slug . '/' . $type->slug;
                }
            }
        }

        // Получаем информацию по отзывам и по цветам
        $reviews = DB::table('reviews')->select('*')->where($condition)->get();
        $colors = DB::table('colors')->select('*')->where($condition)->get();

        $data = [
            'slider' => [
                'slides_mini' => $slide_mini,
                'slides' => $slides,
            ],
            'blocks' => $blocks,
            'reviews' => $reviews,
            'colors' => $colors,
            'model' => $car_model->title,
            'type' => $car_type->title_ru,
            'model_id' => $car_model->id,
            'type_id' => $car_type->id,
            'model_full' => $car_model->title . ' ' . $car_type->title_ru,
        ];

        return $data;
    }
}
