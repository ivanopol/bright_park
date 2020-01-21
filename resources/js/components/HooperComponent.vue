<template>
    <div>
        <hooper class="items-mini" group="group1" :itemsToShow="3" :centerMode="true" v-on:slide="change_line">
            <slide v-for="slide in slides_mini" v-bind:key="slide.id">
                <img :src="slide.image" :alt="slide.title">
                <span>Седан</span>
            </slide>
        </hooper>

        <hooper id="items" class="items" group="group1" >
            <slide v-for="slide in slides" v-bind:key="slide.id" :class="slide.class" :data-model="slide.reduction">
                <p class="title" v-text="slide.title"></p>
                <p class="sub_title" v-html="slide.subtitle"></p>
                <a :href="slide.link">Купить</a>
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
        data: function () {
            return {
                slides_mini: [
                    {
                        image: 'build/images/slider/mini/granta/lada_granta_sedan.png',
                        title: 'Лада Гранта седан'
                    },
                    {
                        image: 'build/images/slider/mini/granta/lada_granta_liftback.png',
                        title: 'Лада Гранта лифтбек'
                    },
                    {
                        image: 'build/images/slider/mini/granta/lada_granta_universal.png',
                        title: 'Лада Гранта универсал'
                    },
                    {
                        image: 'build/images/slider/mini/granta/lada_granta_cross.png',
                        title: 'Лада Гранта cross'
                    },
                    {
                        image: 'build/images/slider/mini/granta/lada_granta_drive_active.png',
                        title: 'Лада Гранта Drive Active'
                    },
                    {
                        image: 'build/images/slider/mini/granta/lada_granta_hatcback.png',
                        title: 'Лада Гранта хэтчбек'
                    }
                ],
                slides: [
                    {
                        class: 'slide_1',
                        title: 'LADA Granta седан',
                        reduction: 'Granta седан',
                        subtitle: 'динамический дизайн<br> и вместительность',
                        link: '#'
                    },
                    {
                        class: 'slide_2',
                        title: 'LADA Granta седан',
                        reduction: 'Granta лифтбек',
                        subtitle: 'динамический дизайн<br> и вместительность',
                        link: '#'
                    },
                    {
                        class: 'slide_3',
                        title: 'LADA Granta седан',
                        reduction: 'Granta универсал',
                        subtitle: 'динамический дизайн<br> и вместительность',
                        link: '#'
                    },
                    {
                        class: 'slide_4',
                        title: 'LADA Granta седан',
                        reduction: 'Granta cross',
                        subtitle: 'динамический дизайн<br> и вместительность',
                        link: '#'
                    },
                    {
                        class: 'slide_5',
                        title: 'LADA Granta седан',
                        reduction: 'Granta drive active',
                        subtitle: 'динамический дизайн<br> и вместительность',
                        link: '#'
                    },
                    {
                        class: 'slide_6',
                        title: 'LADA Granta седан',
                        reduction: '',
                        subtitle: 'динамический дизайн<br> и вместительность',
                        link: '#'
                    },
                    {
                        class: 'slide_7',
                        title: 'LADA Granta седан',
                        reduction: 'Granta хэтчбек',
                        subtitle: 'динамический дизайн<br> и вместительность',
                        link: '#'
                    },
                ]
            }
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
