<template>
    <div>
        <hooper class="items-mini" group="group1" :itemsToShow="3" :centerMode="true">
            <slide>
                <img :src="'./img/slider/mini/granta/lada_granta_sedan.png'" alt="Лада Гранта седан">
                <span>Седан</span>
            </slide>
            <slide>
                <img :src="'./img/slider/mini/granta/lada_granta_liftback.png'" alt="Лада Гранта лифтбек">
                <span>Лифтбек</span>
            </slide>
            <slide>
                <img :src="'./img/slider/mini/granta/lada_granta_universal.png'" alt="Лада Гранта универсал">
                <span>Универсал</span>
            </slide>
            <slide>
                <img :src="'./img/slider/mini/granta/lada_granta_cross.png'" alt="Лада Гранта cross">
                <span>Cross</span>
            </slide>
            <slide>
                <img :src="'./img/slider/mini/granta/lada_granta_drive_active.png'" alt="Лада Гранта Drive Active">
                <span>Drive Active</span>
            </slide>
            <slide>
                <img :src="'./img/slider/mini/granta/lada_granta_hatcback.png'" alt="Лада Гранта хэтчбек">
                <span>Хэтчбек</span>
            </slide>
        </hooper>

        <hooper class="items" group="group1">
            <slide class="slide_1">
                <p class="title">LADA Granta Лифтбек</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
                    <span>Подробнее</span>
                </span>
            </slide>
            <slide class="slide_2">
                <p class="title">LADA Granta Лифтбек</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
                    <span>Подробнее</span>
                </span>
            </slide>
            <slide class="slide_3">
                <p class="title">LADA Granta Лифтбек</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
                    <span>Подробнее</span>
                </span>
            </slide>
            <slide class="slide_4">
                <p class="title">LADA Granta Лифтбек</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
                    <span>Подробнее</span>
                </span>
            </slide>
            <slide class="slide_5">
                <p class="title">LADA Granta Лифтбек</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
                    <span>Подробнее</span>
                </span>
            </slide>
            <slide class="slide_6">
                <p class="title">LADA Granta Лифтбек</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
                    <span>Подробнее</span>
                </span>
            </slide>
        </hooper>
    </div>
</template>

<script>
    import { Hooper, Slide } from 'hooper';
    import 'hooper/dist/hooper.css';

    export default {
        name: 'App',
        components: {
            Hooper,
            Slide
        }
    };
</script>

<style lang="scss">
    @import "./resources/sass/hooper.scss";
</style>
