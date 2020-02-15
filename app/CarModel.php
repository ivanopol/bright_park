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
        return $this->belongsToMany('App\CarType')->using('App\CarModelCarType')->withPivot('preview')->wherePivot('preview', 1);
    }

    /**
     * Получить модели с ценам по кузовам.
     */
    public function prices()
    {
        return $this->hasOne('App\CarType');
    }

    /**
     * Получаем ключ роута для таблицы.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
