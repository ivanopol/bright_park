<?php

namespace App\Services;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use App\Seo;

class SeoService
{
    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Задаем мета теги
     */
    public function setMetaTags()
    {
        $seo = Seo::where('url', $this->request->path())->firstOrFail();
        //$seo = Seo::where('url', $this->request->path())->limit(1)->get();


        $seo->og_title = empty($seo->og_title) ? $seo->title : $seo->og_title;
        $seo->og_description = empty($seo->og_description) ? $seo->description : $seo->og_description;

        SEOMeta::setTitle($seo->title);
        SEOMeta::setDescription($seo->description);

        OpenGraph::setTitle($seo->og_title);
        OpenGraph::setDescription($seo->og_description);

        TwitterCard::setTitle($seo->title);
    }
}
