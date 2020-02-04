<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = ['title', 'slug'];
    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'car_models';
}
