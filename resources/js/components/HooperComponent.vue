<template>
    <div class="carcasses-wrap">
        <div class="items-mini_wrap">
            <hooper class="items-mini" group="slider" :itemsToShow="3" :centerMode="true" v-on:slide="change_line">
                <slide v-for="slide in data.slides_mini" v-bind:key="slide.id">
                    <img :src="slide.image" :alt="slide.alt">
                    <span v-text="slide.title">Седан</span>
                </slide>
            </hooper>
            <span class="indicator"></span>
        </div>

        <hooper id="items" class="items" group="slider" >
            <slide v-for="slide in data.slides" v-bind:key="slide.id" :class="slide.class" :data-model="slide.reduction">
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
        props : ['data'],
        data: function () {
            return {};
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
