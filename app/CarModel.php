<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = ['title', 'slug', 'preview'];
    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'car_models';

    /**
     * Кузовы относящиеся к модели авто.
     */
    public function types_preview()
    {
        return $this->belongsToMany('App\CarType')->withPivot('preview')->wherePivot('preview', 1);
    }
}
