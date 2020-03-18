<?php

namespace App\Services;

use App\CarModel;
use App\CarType;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use App\Seo;
use App\City;

class SeoService
{
    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Задаем мета теги
     *
     * @param $city
     * @param string $model
     * @param string $type
     * @return void
     */
    public function setMetaTags($city, string $model = '', string $type = '') : void
    {
        if ($city === null ) {
            return;
        }

        $path = $this->request->path();
        $seo = Seo::where('url', $path)->first();

        if ($seo === NULL) {
            $seo = $this->generateMetaTags($path, $city, $model, $type);
        }

        $seo->og_title = empty($seo->og_title) ? $seo->title : $seo->og_title;
        $seo->og_description = empty($seo->og_description) ? $seo->description : $seo->og_description;

        SEOMeta::setTitle($seo->title);
        SEOMeta::setDescription($seo->description);
        OpenGraph::setTitle($seo->og_title);
        OpenGraph::setDescription($seo->og_description);
        TwitterCard::setTitle($seo->title);

    }

    /**
     * Генерируем мета-теги
     *
     * @param string $path Путь на сайте
     * @param City $city Город
     * @param string $model Модель
     * @param string $type Кузов
     * @return object
     */
    public function generateMetaTags(string $path, City $city, string $model = '', string $type = '') : object
    {
        $tags = new \stdClass;

        $tags->title = '';
        $tags->description = '';


        return $tags;
    }
}
