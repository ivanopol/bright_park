<template>
    <div>
        <hooper class="items-mini" group="slider" :itemsToShow="3" :centerMode="true" v-on:slide="change_line">
            <slide v-for="slide in slides_mini" v-bind:key="slide.id">
                <img :src="slide.image" :alt="slide.alt">
                <span v-text="slide.title">Седан</span>
            </slide>
        </hooper>

        <hooper id="items" class="items" group="slider" >
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
                        image: 'build/images/slider/mini/granta/mobile/lada_granta_sedan.png',
                        alt: 'Лада Гранта седан',
                        title: 'Седан'
                    },
                    {
                        image: 'build/images/slider/mini/granta/mobile/lada_granta_liftback.png',
                        alt: 'Лада Гранта лифтбек',
                        title: 'Лифтбек'
                    },
                    {
                        image: 'build/images/slider/mini/granta/mobile/lada_granta_universal.png',
                        alt: 'Лада Гранта универсал',
                        title: 'Универсал'
                    },
                    {
                        image: 'build/images/slider/mini/granta/mobile/lada_granta_cross.png',
                        alt: 'Лада Гранта cross',
                        title: 'Cross'
                    },
                    {
                        image: 'build/images/slider/mini/granta/mobile/lada_granta_drive_active.png',
                        alt: 'Лада Гранта Drive Active',
                        title: 'Drive Active'
                    },
                    {
                        image: 'build/images/slider/mini/granta/mobile/lada_granta_hatcback.png',
                        alt: 'Лада Гранта хэтчбек',
                        title: 'Хэтчбек'
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
                        title: 'LADA Granta лифтбек',
                        reduction: 'Granta лифтбек',
                        subtitle: 'динамический дизайн<br> и вместительность',
                        link: '#'
                    },
                    {
                        class: 'slide_3',
                        title: 'LADA Granta универсал',
                        reduction: 'Granta универсал',
                        subtitle: 'динамический дизайн<br> и вместительность',
                        link: '#'
                    },
                    {
                        class: 'slide_4',
                        title: 'LADA Granta Cross',
                        reduction: 'Granta cross',
                        subtitle: 'динамический дизайн<br> и вместительность',
                        link: '#'
                    },
                    {
                        class: 'slide_5',
                        title: 'LADA Granta Drive Active',
                        reduction: 'Granta drive active',
                        subtitle: 'динамический дизайн<br> и вместительность',
                        link: '#'
                    },
                    {
                        class: 'slide_6',
                        title: 'LADA Granta хэтчбек',
                        reduction: 'Granta хэтчбек',
                        subtitle: 'динамический дизайн<br> и вместительность',
                        link: '#'
                    }
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
