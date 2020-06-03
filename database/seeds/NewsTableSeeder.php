<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
/*            [
                'title' => 'Предложение месяца от LADA: всё включено!',
                'text' => '<p>LADA объявляет о новых предложениях, позволяющих приобрести автомобили на максимально выгодных условиях в марте, главным из которых является то, что все модели LADA участвуют в госпрограмме*.
Кроме этого, введена дополнительная выгода на приобретение LADA Vesta Sport и LADA XRAY** (50 тысяч рублей по программе Trade-In) - эти выгоды можно суммировать с другими акциями и государственными программами.</p>
<p>Также в марте 2020 года продолжают действовать следующие программы:
<ul>
<li>Trade-In: выгода от 20 до 50 тысяч рублей при сдаче поддержанного автомобиля в зачет нового; условия акции суммируются с выгодой по госпрограмме «Семейный автомобиль»;</li>
<li>LADA FINANCE: выгода от 20 до 40 тысяч рублей при покупке автомобиля по собственной программе кредитования;</li>
<li>LADA Leasing: выгода от 30 до 40 тысяч рублей при покупке автомобиля в лизинг;</li>
<li>Продажа автомобилей 2019 года выпуска: выгода составляет от 10 до 40 тысяч рублей.</li>
</ul>
Подробно об условиях акций можно узнать на сайте lada.ru и у официальных дилеров LADA.
</p>',
                'text_short' => 'LADA объявляет о новых предложениях, позволяющих приобрести автомобили на максимально выгодных условиях в марте, главным из которых является то, что все модели LADA участвуют в госпрограмме',
                'preview' => '/build/images/news/new_01.jpg',
                'slug' => 'predlozhenie_mesyaca_ot_lada_vsyo_vklyucheno',
                'city_id' => 0,
            ],
            [
                'title' => 'Долгожданная LADA Vesta Sport!',
                'text' => '<p>Уже в марте LADA Vesta Sport на тест-драйве в Брайт Парке. Познакомьтесь с автомобилем лично)</p><p>Ждём вас каждый день!</p>',
                'text_short' => 'Уже в марте LADA Vesta Sport на тест-драйве в Брайт Парке.',
                'preview' => '/build/images/news/new_02.jpg',
                'slug' => 'dolgozhdannaya_lada_vesta_sport',
                'city_id' => 0,
            ],*/
            [
                'title' => 'LADA популярна в Финляндии',
                'text' => '<p>Эксперты выяснили, почему российский автомобиль ВАЗ-2101 был в почете у финнов. Легендарная «Копейка» была построена на базе итальянской модель Fiat-124, а в 1970 году с конвейера Волжского автозавода сошли шесть первых седанов ВАЗ-2101 «Жигули».</p>
                <p>В Финляндии автомобиль продавался под логотипом LADA, при этом на местный рынок авто поступало с тюнингом от компании «Конела».</p>
                <p>Финские автолюбители высоко оценили российский автомобиль, отмечая, что машина отличалась высоким качеством и сочетала в себе южный итальянский темперамент и холодный русский разум. При этом модель выделялась среди других выгодной ценой и компактными габаритами.</p>
                <p>Согласно статистике, на сегодня в Финляндии зарегистрировано 7 тысяч экземпляров ВАЗ-2101. При этом владельцы «Копеек» ежегодно устраивают автопарад на Масленицу в городе Кангасала.</p>
                ',
                'text_short' => 'Эксперты выяснили, почему российский автомобиль ВАЗ-2101 был в почете у финнов.',
                'preview' => '/build/images/news/lada_popular_in_finland.jpg',
                'slug' => 'lada_popular_in_finland',
                'city_id' => 0,
            ],
            [
                'title' => 'LADA: 50 лет первому автомобилю',
                'text' => '<p>19 апреля 2020 года исполняется 50 лет с выпуска первых автомобилей марки LADA. В этот день в 1970 году с конвейера Волжского автозавода сошли шесть седанов ВАЗ-2101 «Жигули» – 2 синих и 4 вишнёвых, что символизировало цвета флага РСФСР. С тех пор на автозаводе в Тольятти было выпущено более чем 50 серийных моделей.</p>
                <p>Продажи «Жигулей» начались в августе 1970 года. А уже в 1971 году первая партия автомобилей была отправлена на экспорт — в Югославию, Бельгию, Голландию и Финляндию. За рубежом LADA полюбили за прочность и низкую цену. ВАЗ-2101 дал начало самому многочисленному семейству легковых машин в истории предприятия, и, более того, - в истории российской автомобильной промышленности. С 1970 по 1988 год выпущено около 4,8 млн ВАЗ-2101 и его модификаций.</p>
                <p>Сегодня в России на учете стоят несколько сотен тысяч седанов ВАЗ-2101. Заслуженные автомобили и сегодня трудятся по прямому назначению – в качестве транспорта, но все чаще становятся предметом реставрации и коллекционирования.</p>
                <p>Сейчас же на линиях LADA производится пять семейств модельного ряда: Vesta, XRAY, Largus, Granta и 4×4. Бренд LADA является одним из лидеров на российском автомобильном рынке во многом благодаря своей доступности и практичности.</p>
                <p>Желаем дальнейшего процветания любимому бренду!</p>
                ',
                'text_short' => '19 апреля 2020 года исполняется 50 лет с выпуска первых автомобилей марки LADA.',
                'preview' => '/build/images/news/lada_50_years.jpg',
                'slug' => 'lada_50_years',
                'city_id' => 0,
            ],
            [
                'title' => 'LADA продолжает модернизировать технологии',
                'text' => '<p>В 2019 году был проведен большой объем работ: усиление контроля качества, оптимизация процессов и экономия средств.</p>
                <p>В рамках модернизации был обновлен сборочный конвейер LADA Granta – длина сборочных линий уменьшена на 560 метров. Снижено количество автомобилей в потоке, что положительно отразилось на уровне качества. Организованы участки формирования кит-комплектов. Уменьшено количество задействованных погрузчиков, при этом на конвейере появилось 8 роботизированных тележек для автоматической доставки комплектующих на сборочные посты – нововведения улучшили соблюдение ритма поставок на 23%. Концепция сборки определяет, что под каждый кузов формируется набор компонентов в соответствии с комплектацией будущего автомобиля.</p>
                <p>В производстве автомобилей на платформе В0 внедрено 8 дополнительных роботов, отвечающих за сварку критически важных точек основания и каркаса кузова, которые фиксируют геометрию автомобиля. Теперь на линии сварки основания кузова LADA Largus и LADA XRAY работает 13 роботов. В 2020 году модернизация производства продолжится. В частности, в производстве автомобилей на платформе В0 планируется ввести в строй еще два сварочных робота.</p>
                <p>За 2019 год в производстве LADA 4x4 выполнена модернизация грузонесущего конвейера подачи комплектующих и создано 3 транспортных кольца с загрузкой из одной зоны. Теперь наборы комплектующих подаются непосредственно в рабочую зону оператора.</p>
                <p>Желаем дальнейшего прогресса любимому бренду!</p>
                ',
                'text_short' => 'В 2019 году был проведен большой объем работ: усиление контроля качества, оптимизация процессов и экономия средств.',
                'preview' => '/build/images/news/lada_continue_modernisation.jpg',
                'slug' => 'lada_continue_modernisation',
                'city_id' => 0,
            ],
            [
                'title' => 'Экскурс в историю: кабриолет LADA Natasha',
                'text' => '<p>В 1990 году компания «Скалдия-Волга» из Бельгии, занимающаяся экспортными поставками российских автомобилей, придумала Кабриолет на базе LADA Samara. ВАЗ-2108 отправляли экспортом за границу, где дилеры преображали трехдверное авто в кабриолет. Сборку автомобилей осуществляли специализированные кузовные фирмы в Бельгии и Германии.</p>
                <p>Снаружи кабриолет получил оригинальную переднюю маску, другую бамперную группу, иные пороги, боковые молдинги, а также свои литые колёсные диски, хромированный патрубок выхлопной трубы, накладку на номерной площадке и свою крышку багажника из стеклопластика. Четырёхместный салон имеет снимаемый спортивный руль, кожаные сиденья и такой же диван.</p>
                <p>С 1990 года по 1995 год было выпущено лишь около 456 кабриолетов. Все они были реализованы во Франции, Германии, Бельгии и Венгрии. Открытая версия ВАЗ-2108 оказалась дороже обычного хэтчбека примерно в 1,5 раза. К примеру, во Франции LADA Samara стоила 53,7 тысячи франков, а LADA Natasha можно было приобрести за 79,9 тысяч франков.</p>
                ',
                'text_short' => 'В 2019 году был проведен большой объем работ: усиление контроля качества, оптимизация процессов и экономия средств.',
                'preview' => '/build/images/news/lada_kabriolet.jpg',
                'slug' => 'lada_kabriolet',
                'city_id' => 0,
            ],
            [
                'title' => 'В Германии появилась модификация LADA 4x4',
                'text' => '<p>Сеть немецких автосалонов предлагает несколько необычных модификаций LADA 4х4, оснащённых подвижным скребком. Стоимость самой дорогой - 29 900 евро (примерно 2 415 500 рублей).</p>
                <p>Внедорожник адаптировали для работы в дорожной службе, оснастив его скребком длиной 185 см с возможностью регулировки наклона, электрическим разбрасывателем реагентов с управлением из кабины и рядом других опций: подогревом сидений, аудиосистемой, накладками на пороги и защитой элементов днища.</p>
                <p>Никаких отличий по технической начинке автомобиля практически нет: LADA 4x4 оснащена 83-сильным бензиновым двигателем 1.7 литра, 5-ступенчатой МКП и системой полного привода.</p>
                ',
                'text_short' => 'Сеть немецких автосалонов предлагает несколько необычных модификаций LADA 4х4, оснащённых подвижным скребком.',
                'preview' => '/build/images/news/niva_modification_in_germany.jpg',
                'slug' => 'niva_modification_in_germany',
                'city_id' => 0,
            ],
            [
                'title' => 'Результаты продаж автомобилей LADA в апреле',
                'text' => '<p>LADA подвела итоги прошлого месяца. В апреле продажи составили 10 055 автомобилей (включая продажи NIVA в размере 659 штук).</p>
                <p>ТОП-3 наиболее популярных автомобилей LADA возглавили модели семейства Granta с результатом 3 058 автомобилей. На втором месте по популярности – семейство Vesta. В апреле было продано 2 913 автомобилей LADA Vesta. Третье место заняли пассажирские версии семейства Largus – 1 286 автомобилей.</p>
                <p>По собственной оценке Компании, LADA сохранила лидирующую позицию по доле рынка в сегменте легковых и легких коммерческих автомобилей.</p>
                ',
                'text_short' => 'LADA подвела итоги прошлого месяца. В апреле продажи составили 10 055 автомобилей',
                'preview' => '/build/images/news/lada_sale_results.png',
                'slug' => 'lada_sale_results',
                'city_id' => 0,
            ],
            [
                'title' => 'LADA Vesta Sport расширяет цветовую гамму',
                'text' => '<p>Спортивная модель семейства LADA Vesta получила два новых цвета&nbsp;&mdash; черный металлик &laquo;Маэстро&raquo; и&nbsp;ярко-синий металлик &laquo;Дайвинг&raquo;. Теперь палитра окраски состоит из&nbsp;6&nbsp;цветов, включая дымчато-серый цвет &laquo;Тайфун&raquo;, разработанный специально для этого автомобиля.</p>
<p>Новые цвета гармонично сочетаются с&nbsp;экспрессивным дизайном LADA
Vesta Sport. На&nbsp;черном или синем фоне отчетливо видны красные молдинги на&nbsp;бамперах&nbsp;&mdash; эта деталь подчеркивает спортивный характер машины.</p>
<p>Напомним, что ЛАДА Веста Спорт&nbsp;&mdash; серийный автомобиль, разработанный в&nbsp;спортивном ателье ЛАДЫ Спорт. Модель отличается от&nbsp;других седанов ЛАДЫ Весты более чем 200&nbsp;деталями. LADA Vesta Sport оснащена шасси спортивного типа, 145-сильным мотором, особой Y-образной системой выпуска. Электронная система устойчивости перенастроена под активный стиль вождения, и&nbsp;в&nbsp;отличие от&nbsp;других моделей, ESC можно полностью отключить. Таким образом, Vesta Sport&nbsp;&mdash; не&nbsp;только максимально оснащенный автомобиль, но&nbsp;и&nbsp;настоящий спортивный снаряд для поклонников энергичного движения.</p>
<p>Купить ЛАДА Веста Спорт стало можно с&nbsp;января 2019&nbsp;года, на&nbsp;сегодня реализовано 850&nbsp;автомобилей.</p>
                ',
                'text_short' => 'Спортивная модель семейства LADA Vesta получила два новых цвета&nbsp;&mdash; черный металлик &laquo;Маэстро&raquo; и&nbsp;ярко-синий металлик &laquo;Дайвинг&raquo;.',
                'preview' => '/build/images/news/lada-vesta-sport-expands-the-color-range.jpg',
                'slug' => 'lada-vesta-sport-expands-the-color-range',
                'city_id' => 0,
            ],
            [
                'title' => 'Новые выгоды при покупке LADA',
                'text' => '<p>Новые выгоды при покупке LADA
Мы&nbsp;уже начали обработку обращений на&nbsp;покупку новых автомобилей с
использованием дополнительных мер государственной поддержки рынка, которые
стартовали 1&nbsp;июня 2020&nbsp;года. Первые автомобили, купленные с&nbsp;использованием
новых программ, могут быть переданы покупателям уже на&nbsp;следующей неделе. А&nbsp;значит купить ЛАДА с&nbsp;приятной выгодой можно уже сейчас.</p>
<p>Напомним, что к&nbsp;уже действующим эффективным государственным
мерам стимулирования спроса (&laquo;Первый автомобиль&raquo; и&nbsp;&laquo;Семейный автомобиль&raquo;) с
начала июня добавляются дополнительные программы&nbsp;&mdash; трейд-ин автомобиля старше 6
лет и&nbsp;продажа автомобилей сотрудникам медицинских организаций государственной
системы здравоохранения.</p>
<p>Так, при покупке в&nbsp;кредит автомобиля LADA можно получить
дополнительную выгоду в&nbsp;размере&nbsp;10% от&nbsp;стоимости новой модели при сдаче в
трейд-ин старого автомобиля старше 6&nbsp;лет, которым клиент владел не&nbsp;менее 1
года. Такую&nbsp;же выгоду при покупке нового автомобиля LADA могут получить
сотрудники медицинских организаций государственной системы здравоохранения. Цена ЛАДА указана на&nbsp;нашем <a href="/perm/vesta/sedan">сайте</a></p>
                ',
                'text_short' => 'Мы&nbsp;уже начали обработку обращений на&nbsp;покупку новых автомобилей с использованием дополнительных мер государственной поддержки рынка, которые стартовали 1&nbsp;июня 2020&nbsp;года.',
                'preview' => '/build/images/news/new-benefits-when-buying-lada.jpg',
                'slug' => 'new-benefits-when-buying-lada',
                'city_id' => 0,
            ],
        ];
        DB::table('news')->insert($news);
    }
}
