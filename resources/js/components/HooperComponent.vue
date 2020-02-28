<template>
    <div class="carcasses-wrap">
        <div class="items-mini_wrap container">
            <hooper class="items-mini" :settings="hooperSettings" v-on:slide="change_line">
                <slide v-for="slide in data.slides_mini" v-bind:key="slide.id">
                    <a :href="slide.url">
                        <picture>
                            <source :srcset="get_source(slide.image)" media="(min-width: 580px)">
                            <img :src="slide.image" :alt="slide.alt">
                        </picture>
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
            Slide,
        },
        props : ['data'],
        data () {
            return {
                hooperSettings: {
                    infiniteScroll: this.data.slides_mini.length > 2,
                    itemsToShow: 3,
                    centerMode: true,
                    trimWhiteSpace: false,
                    mouseDrag: false,
                    wheelControl: false,
                    breakpoints: {
                        580: {
                            infiniteScroll: false,
                            itemsToShow: 6,
                            centerMode: false,
                            trimWhiteSpace: true,
                            mouseDrag: true,
                        }
                    }
                }
            };
        },
        mounted: function() {
            this.$children[0].slideTo(this.data.active);
        },
        methods: {
            get_source: function(path) {
                let new_path = path.replace('mobile/', '');
                return new_path + ', ' + new_path + ' 2x';
            },
            change_line: function(event) {
            },
            elem() {
                this.size = window.innerWidth;
                return this.size;
            },
        }
    };
</script>

<style lang="scss">
    @import "./resources/sass/hooper.scss";
</style>
