<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    public function run()
    {
        $open_script = '<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(60182227, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/60182227" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->';

        $cities = [
            ['title_ru' => 'Пермь', 'title_en' => 'perm', 'alias' => 'perm', 'coordinates' => '57.997388, 56.306636', 'jivosite_token'=>'IFmL6hf3c9', 'open_script'=>$open_script, 'bitrix_responsible_id' => 1447],
            ['title_ru' => 'Москва', 'title_en' => 'moscow', 'alias' => 'moscow', 'coordinates' => '55.488305, 37.565856', 'open_script'=>$open_script, 'jivosite_token'=>'IFmL6hf3c9', 'bitrix_responsible_id' => 1447],
            ['title_ru' => 'Магнитогорск', 'title_en' => 'magnitogorsk', 'alias' => 'magnitogorsk', 'coordinates' => '53.342167, 58.996030', 'jivosite_token'=>'IFmL6hf3c9', 'open_script'=>$open_script, 'bitrix_responsible_id' => 1447],
            ['title_ru' => 'Ростов-на-Дону', 'title_en' => 'rostov-on-don', 'alias' => 'rostov-na-donu', 'coordinates' => '47.220273, 39.686051', 'jivosite_token'=>'IFmL6hf3c9', 'open_script'=>$open_script, 'bitrix_responsible_id' => 1447],
            ['title_ru' => 'Екатеринбург', 'title_en' => 'ekaterinburg', 'alias' => 'yekaterinburg', 'coordinates' => '53.342167, 58.996030', 'jivosite_token'=>'IFmL6hf3c9', 'open_script'=>$open_script, 'bitrix_responsible_id' => 1447],
            ['title_ru' => 'Волгоград', 'title_en' => 'volgograd', 'alias' => 'volgograd', 'coordinates' => '48.644535, 44.429039', 'jivosite_token'=>'IFmL6hf3c9', 'open_script'=>$open_script, 'bitrix_responsible_id' => 1447],
        ];

        DB::table('cities')->insert($cities);
    }
}
