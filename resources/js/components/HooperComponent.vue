<template>
    <div class="carcasses-wrap">
        <div class="items-mini_wrap">
            <hooper class="items-mini" :mouseDrag="false" :infiniteScroll="infinite" :itemsToShow="3" :centerMode="true" v-on:slide="change_line">
                <slide v-for="slide in data.slides_mini" v-bind:key="slide.id">
                    <a :href="slide.url">
                        <img :src="slide.image" :alt="slide.alt">
                        <span v-text="slide.title">Седан</span>
                    </a>
                </slide>
            </hooper>
            <span class="indicator"></span>
        </div>

        <div id="items" class="items">
            <div :class="data.slides.class">
                <p class="title" v-text="data.slides.title"></p>
                <p class="sub_title" v-html="data.slides.subtitle"></p>
                <a :href="data.slides.link">Условия покупки</a>
                <span class="more_details">
                    <span>Подробнее</span>
                </span>
            </div>
        </div>
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
            return {
                infinite: this.data.slides_mini.length > 2
            };
        },
        mounted: function() {
         this.$children[0].slideTo(this.data.active);
          //console.log(this.data.slides_mini);
        },
        methods: {
            change_line: function(event) {
/*                let current_model = document.querySelectorAll('#items ul li')[event.currentSlide];
                let model = document.getElementById('model-active').textContent = current_model.dataset.model;
                this.$store.commit('change', event.currentSlide);
                return Promise.resolve("");*/
            }
        }
    };
</script>

<style lang="scss">
    @import "./resources/sass/hooper.scss";
</style>
