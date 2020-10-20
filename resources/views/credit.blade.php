@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'" :city_ru="'{{$cities['active']['label']}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" :city_ru="'{{$cities['active']['label']}}'"></header-component>
    <section class="main-screen">
        <credit-component :city="'{{$city}}'" :offer='@json($offer)'></credit-component>
    </section>
    <plate :bold='true' :city="'{{$city}}'" :text="'Внимание! Склад пополнился! Отдаем с&nbsp;максимальной выгодой!'"></plate>
    <div class="container">
        <div id="advantages" class="advantages_wrap retargeting_wrap">
            <h1><span class="c_orange">Преимущества</span> покупки сейчас</h1>
            <ul>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/retargeting/pervonchalnyj_vznos.svg" alt="Брайт Парк: 0% первоначальный взнос"></span>
                        <span class="text">0% первоначальный взнос</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/retargeting/calendar.svg" alt="Брайт Парк: 10% выгода в кредит"></span>
                        <span class="text">До 7 лет<br>срок кредитования</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/retargeting/doplata.svg" alt="Брайт Парк: Доплатим 40000 р. при обмене вашего авто"></span>
                        <span class="text">От 3,5% годовых</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/retargeting/stavka.svg" alt="Брайт Парк: Ставка по кредиту от 3,5%"></span>
                        <span class="text">98% одобрение</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/retargeting/vygoda_v_kredit.svg" alt="Брайт Парк: Ставка по кредиту от 3,5%"></span>
                        <span class="text">10% выгода в кредит</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/retargeting/30_min.svg" alt="Брайт Парк: Ставка по кредиту от 3,5%"></span>
                        <span class="text">30 минут на одобрение кредита</span>
                    </div>
                </li>
            </ul>
        </div>
        <form-retarget-component :cities='@json($cities)'
                                 :form_id="'models__leave-request-now_'"
                                 :button_text="'Получить лучшие условия'"
                                 :form_title="'<span class=\'c_orange\'>Оставьте</span> заявку сейчас'"
                                 :goal="'specialoffer'">
        </form-retarget-component>
        <steps :brands='@json($brands)'
               :cities='@json($cities)'
               :form_id="'retargeting__fill-form_'"
               :goal="'fixconditions'"
               :prefix="'retargeting__'"
        ></steps>
        <banks-component :cities='@json($cities)'></banks-component>
        <div class="stocks-wrapper">
            <div class="stocks-one">
                <div class="stocks-one-body">
                    <p>Редко кому удается быстро накопить на&nbsp;новую машину, ее&nbsp;приобретение может затянуться на&nbsp;долгое время. Кредитная программа от&nbsp;официального дилера Лада &laquo;Брайт Парк&raquo; в {{$cities['active']['dative']}} помогает купить автомобиль LADA в&nbsp;короткие сроки и&nbsp;на&nbsp;самых выгодных условиях. Удобный график выплат, возможность получения страховки и&nbsp;низкие суммы первоначального взноса.</p>

                    <p>Мы&nbsp;ценим наше и&nbsp;ваше время, поэтому требований для оформления кредита совсем немного. А&nbsp;чтобы Вам было проще, наши специалисты сопроводят вас на&nbsp;каждом этапе оформления кредита и&nbsp;ответят на&nbsp;все возникающие вопросы.</p>

                    <p>Все, что от&nbsp;вас требуется, это выбрать интересующий автомобиль LADA и&nbsp;обсудить с&nbsp;нашими специалистами условия кредитования. После этого выбрать нужный вам банк.</p>
                    <p>Следующий этап- сбор необходимых документов и&nbsp;оформление заявки. Срок принятия решения составляет всего один день. После мы&nbsp;подпишем договор и&nbsp;Вы станете счастливым обладателем нового автомобиля Lada.</p>

                    <p>С&nbsp;&laquo;Брайт Парк&raquo; купить новый автомобиль стало еще проще!</p>
                </div>
            </div>
        </div>
        <form-retarget-component :cities='@json($cities)'
                                 :form_id="'models__leave-request-now_'"
                                 :button_text="'Получить лучшие условия'"
                                 :form_title="'<span class=\'c_orange\'>Оставьте</span> заявку сейчас'"
                                 :goal="'specialoffer'">
        </form-retarget-component>
    </div>
    <footer-component :coordinates='@json($data['coordinates'])'
                      :phone='@json($cities['active']['phone'])'
                      :phone_formatted='@json($cities['active']['phone_format'])'
                      :cities='@json($cities)'
                      :page="'credit'">
    </footer-component>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>
@endsection
