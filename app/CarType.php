<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    protected $fillable = ['title_en', 'title_ru', 'slug'];
    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'car_types';
}
