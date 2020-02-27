<template>
    <div class="carcasses-wrap">
        <div class="items-mini_wrap">
            <hooper class="items-mini" :centerMode="centerMode" :mouseDrag="false" :infiniteScroll="infinite" :itemsToShow="itemsToShow" :trimWhiteSpace="trimWhiteSpace"  v-on:slide="change_line">
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
        <resize-observer @notify="handleResize" />
    </div>
</template>

<script>
    import { Hooper, Slide } from 'hooper';
    import 'hooper/dist/hooper.css';
    import { ResizeObserver } from 'vue-resize'

    export default {
        name: 'App',
        components: {
            Hooper,
            Slide,
            ResizeObserver
        },
        props : ['data'],
        data: function () {
            return {
                infinite: this.data.slides_mini.length > 2,
                itemsToShow: 3,
                centerMode: true,
                trimWhiteSpace: false
            };
        },
        mounted: function() {
         this.$children[0].slideTo(this.data.active);
        },
        methods: {
            handleResize () {
                console.log('resized')
            },
            change_line: function(event) {
            },
            elem() {
                this.size = window.innerWidth;
                return this.size;
            },
        },
        created: function() {
            if (window.innerWidth > 1366) {
                this.itemsToShow = 6;
                this.infinite = false;
                this.centerMode = false;
                this.trimWhiteSpace = true;
            }
        }
    };
</script>

<style lang="scss">
    @import "./resources/sass/hooper.scss";
</style>
