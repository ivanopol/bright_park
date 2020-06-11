<?php

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks = [
            [
                'title' => 'Доплата 40 000 рублей при обмене на LADA Granta',
                'text' => '
                <p>Воспользуйтесь возможностью обменять свой автомобиль с дополнительной выгодой - 40 000 рублей.</p>
                <p>Обменять свой автомобиль в Брайт Парке - это удобно. Вам не нужно задумываться о реализации автомобиля, эту задачу на себя возьмут специалисты дилерского центра. Кроме того, участники программы обмена получают преимущество в виде выгоды на покупку нового автомобиля.</p>
                <p>Также у вас есть уникальная возможность оценки вашего автомобиля онлайн по фото и видео вашего автомобиля.</p>
                <p>Перечень документов покупателя:</p>
                <ul>
                    <li>Паспорт гражданина РФ, владельца автомобиля.</li>
                    <li>Оригинал ПТС, подтверждающий срок владения автомобилем (не менее 6 месяцев).</li>
                    <li>Оригинал «Свидетельства о регистрации транспортного средства».</li>
                    <li>Копия паспорта транспортного средства БУ автомобиля с записью о переходе права собственности покупателю.</li>
                    <li>Документ выдан органами ГИБДД о регистрации БУ автомобиля за данным потребителем (КУТС либо справка, либо копия ПТС заверенная оригинальной печатью уполномоченного органа ГИБДД, либо копия ПТС заверенная нотариально).</li>
                </ul>
                ',
                'text_short' => 'Воспользуйтесь возможностью обменять свой автомобиль с дополнительной выгодой - 40 000 рублей.',
                'preview' => '/build/images/stocks/stock_01.jpg',
                'slug' => 'doplata_40_000_rublej_pri_obmene_na_lada_granta',
                'city_id' => 0,
            ],
            [
                'title' => 'LADA Vesta по обновленной госпрограмме',
                'text' => '
                <p>Расширенные условия программы государственной поддержки в Брайт парке!
Максимально выгодные предложения на покупку LADA. Вы можете приобрести автомобиль по доступной цене, суммируя акции по специальным программам.
Выгода 10% от стоимости при покупке на условиях льготного кредитования.</p>
                <p>Льготный автокредит может быть выдан без первоначального взноса.</p>
                <ul>
                    <li>Программа кредитования «Семейный автомобиль» теперь и для семей с 1м ребенком.</li>
                    <li>Программа кредитования «Первый автомобиль» для тех, кто ранее не имел автомобиль в собственности.</li>
                    <li>Программа льготного кредитования для тех, кто продает свое автотранспортное средство возрастом свыше 6 лет в счет уплаты части первоначального взноса.</li>
                    <li>Мы говорим СПАСИБО всем медикам за их самоотверженную борьбу с пандемией. С начала июня медицинские работники могут приобрести автомобиль с выгодой 10% по программе «Автомобиль государственному медицинскому персоналу».</li>
                </ul>
                <p>Расширенными условиями программы государственной поддержки можно воспользоваться при условиях:</p>
                <ul>
                    <li>наличие действующих водительских прав;</li>
                    <li>отсутствие других автокредитов в течение 2019 и 2020 года, а также обязуются не заключать в 2020 году иных кредитных договоров на приобретение автомобиля;</li>
                </ul>
                <table>
                    <thead></thead>
                        <tr>
                            <th></th>
                            <th>Выгода по программе ПЕРВЫЙ / СЕМЕЙНЫЙ АВТОМОБИЛЬ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="tbl_title">Granta Седан</td>
                            <td class="tbl_value">До 97 980 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Granta Лифтбек</td>
                            <td class="tbl_value">До 99 580 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Granta Хэтчбек</td>
                            <td class="tbl_value">До 99 480 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Granta Универсал</td>
                            <td class="tbl_value">До 96 550 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Granta Cross</td>
                            <td class="tbl_value">До 85 790 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Granta Drive Active</td>
                            <td class="tbl_value">До 85 890 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Vesta Cедан</td>
                            <td class="tbl_value">До 158 640 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Vesta Cross</td>
                            <td class="tbl_value">До 165 590 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Vesta SW</td>
                            <td class="tbl_value">До 164 090 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Vesta SW Cross</td>
                            <td class="tbl_value">До 169 790 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Vesta CNG</td>
                            <td class="tbl_value">До 115 000 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Vesta Sport </td>
                            <td class="tbl_value">До 154 390 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">XRAY</td>
                            <td class="tbl_value">До 122 790 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">XRAY Cross </td>
                            <td class="tbl_value">До 131 890 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Largus Универсал</td>
                            <td class="tbl_value">До 118 690 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Largus Cross</td>
                            <td class="tbl_value">До 121 590 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">Largus Фургон</td>
                            <td class="tbl_value">До 106 790 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">4x4 3 дв.</td>
                            <td class="tbl_value">До 65 190 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">4x4 Urban 3 дв.</td>
                            <td class="tbl_value">До 64 290 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">4x4 5дв.</td>
                            <td class="tbl_value">До 66 590 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">4x4 Urban 5 дв.</td>
                            <td class="tbl_value">До 68 590 руб.</td>
                        </tr>
                        <tr>
                            <td class="tbl_title">4x4 Bronto</td>
                            <td class="tbl_value">До 20 000 руб.</td>
                        </tr>
                    </tbody>
                </table>
                ',
                'text_short' => 'Расширенные условия программы государственной поддержки в Брайт парке! Максимально выгодные предложения на покупку LADA. Вы можете приобрести автомобиль по доступной цене, суммируя акции по специальным программам.',
                'preview' => '/build/images/stocks/stock_02.jpg',
                'slug' => 'lada_vesta_vygoda_10_po_gosprogramme',
                'city_id' => 0,
            ],
            [
                'title' => 'LADA Granta 0% первоначальный взнос',
                'text' => '
                    <p>Наш дилерский центр предлагает услугу автокредитования. У Брайт Парка 18 банков-партнёров, которые предлагают разнообразные кредитные программы, в том числе и без первоначального взноса.</p>
                    <p>Также у вас есть возможность подать заявку на кредит онлайн прямо на нашем сайте.</p>
                    <p>Для подачи заявки на кредит вам понадобятся всего лишь два документа:</p>
                    <ul>
                        <li>паспорт РФ</li>
                        <li>второй документ на выбор (водительское удостоверение, СНИЛС, заграничный паспорт)</li>
                        <li>второй документ на выбор (водительское удостоверение, СНИЛС, заграничный паспорт)</li>
                    </ul>
                ',
                'text_short' => 'Наш дилерский центр предлагает услугу автокредитования. У Брайт Парка 18 банков-партнёров, которые предлагают разнообразные кредитные программы, в том числе и без первоначального взноса.',
                'preview' => '/build/images/stocks/stock_03.jpg',
                'slug' => 'lada_granta_0_pervonachalnyj_vznos',
                'city_id' => 0,
            ],
            [
                'title' => 'Обмен на LADA Vesta выше рыночной цены',
                'text' => '<p>Воспользуйтесь возможностью обменять свой автомобиль выше рыночной стоимости и с дополнительной выгодой - 40 000 рублей.</p>
                           <p>Обменять свой автомобиль в Брайт Парке - это удобно. Вам не нужно задумываться о реализации автомобиля, эту задачу на себя возьмут специалисты дилерского центра. Кроме того, участники программы обмена получают преимущество в виде выгоды на покупку нового автомобиля.</p>
                           <p>Также у вас есть уникальная возможность оценки вашего автомобиля онлайн по фото и видео вашего автомобиля.</p>
                           <p>Перечень документов покупателя:</p>
                           <ul>
                                <li>Паспорт гражданина РФ, владельца автомобиля.</li>
                                <li>Оригинал ПТС, подтверждающий срок владения автомобилем (не менее 6 месяцев).</li>
                                <li>Оригинал «Свидетельства о регистрации транспортного средства».</li>
                                <li>Копия паспорта транспортного средства БУ автомобиля с записью о переходе права собственности покупателю.</li>
                                <li>Документ выдан органами ГИБДД о регистрации БУ автомобиля за данным потребителем (КУТС либо справка, либо копия ПТС заверенная оригинальной печатью уполномоченного органа ГИБДД, либо копия ПТС заверенная нотариально).</li>
                            </ul>
                ',
                'text_short' => 'Воспользуйтесь возможностью обменять свой автомобиль выше рыночной стоимости и с дополнительной выгодой - 40 000 рублей.',
                'preview' => '/build/images/stocks/stock_04.jpg',
                'slug' => 'obmen_na_lada_vesta_vyshe_rynochnoj_ceny',
                'city_id' => 0,
            ],
            [
                'title' => 'Брайт Парк работает онлайн! Мы оказываем полный цикл услуг по приобретению автомобиля',
                'text' => '<p>Брайт Парк работает онлайн!</br>Мы оказываем полный цикл услуг по приобретению автомобиля</p>
                           <ul>
                                <li>Вы можете получить консультацию об автомобиле и совершению покупки онлайн. Мы обеспечим вас полной информацией с детальными фотографиями и видеообзором, выбранного вами автомобиля.</li>
                                <li>Мы оценим ваш автомобиль дистанционно, с помощью фотографий вашего автомобиля.</li>
                                <li>У вас есть возможность подать заявку на получение кредита онлайн. Выбрать подходящие условия  и подписать кредит у наших банков-партнёров.</li>
                                <li>Вы сможете забрать новый автомобиль в пункте самовывоза.</li>
                            </ul>
                            <p>Обращайтесь в Брайт парк! И уже в апреле вы сможете стать обладателем новой LADA!</p>
                         ',
                'text_short' => 'Брайт Парк работает онлайн!</br>Мы оказываем полный цикл услуг по приобретению автомобиля',
                'preview' => '/build/images/stocks/brajt_park_rabotaet_onlajn.jpg',
                'slug' => 'brajt_park_rabotaet_onlajn',
                'city_id' => 0,
            ],
        ];

        DB::table('stocks')->insert($stocks);
    }
}
