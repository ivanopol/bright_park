<template>
    <div>
        <hooper class="items-mini" group="group1" :itemsToShow="3" :centerMode="true" v-on:slide="change_line">
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

        <hooper id="items" class="items" group="group1" >
            <slide class="slide_1" data-model="Granta седан">
                <p class="title">LADA Granta седан</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
                    <span>Подробнее</span>
                </span>
            </slide>
            <slide class="slide_2" data-model="Granta лифтбек">
                <p class="title">LADA Granta Лифтбек</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
                    <span>Подробнее</span>
                </span>
            </slide>
            <slide class="slide_3" data-model="Granta универсал">
                <p class="title">LADA Granta универсал</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
                    <span>Подробнее</span>
                </span>
            </slide>
            <slide class="slide_4" data-model="Granta cross">
                <p class="title">LADA Granta cross</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
                    <span>Подробнее</span>
                </span>
            </slide>
            <slide class="slide_5" data-model="Granta drive active">
                <p class="title">LADA Granta Drive Active</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
                    <span>Подробнее</span>
                </span>
            </slide>
            <slide class="slide_6" data-model="Granta хэтчбек">
                <p class="title">LADA Granta хэтчбек</p>
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
        },
        methods: {
            change_line: function(event) {
                let current_model = document.querySelectorAll('#items ul li')[event.currentSlide];
                let model = document.getElementById('model-active').textContent = current_model.dataset.model;
                this.$store.commit('change', event.currentSlide);
                return Promise.resolve("");
            }
        }
    };
</script>

<style lang="scss">
    @import "./resources/sass/hooper.scss";
</style>
