<template>
    <section class="block" >
        <div class="block-text">
            <h2 v-html="data.title"></h2>
            <p v-html="data.text"></p>
        </div>
        <div class="pointers_wrap" :id="point_id">
            <div :v-if="data.pointers">
                <ul :class="'pointers-' + data.pnum">
                    <li v-for="n in data.pointers">
                        <span :class="'pointer p' + n" v-on:click="activate"></span>
                    </li>
                </ul>
            </div>
            <div class="block-img">
                <img :src="data.url" alt="">
            </div>
            <div class="block-aside">
                <div class="aside_wrap" >
                    <div class="aside_text" v-text="data.slider"></div>
                    <div class="close" v-on:click="deactivate">X</div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: 'App',
        props : ['data', 'n'],
        data: function () {
            return {
            }
        },
        computed: {
            point_id: function () {
                if (this.n) {
                    return 'pointer_' + this.n;
                }
                return '';
            }
        },
        methods: {
            activate: function (event) {
                let dots = document.querySelectorAll('#pointer_' + this.n + ' ul li span');
                dots.forEach(function(item, i, arr) {
                    item.className += ' is_opacity';
                });
                let aside = document.querySelectorAll('#pointer_' + this.n + ' .block-aside');
                aside[0].className += ' show';
                let image = document.querySelectorAll('#pointer_' + this.n + ' .block-img');
                image[0].className += ' show';
            },
            deactivate: function (event) {

               let dots = document.querySelectorAll('#pointer_' + this.n + ' ul li span');
                dots.forEach(function(item, i, arr) {
                    item.classList.remove("is_opacity");
                });
                let aside = document.querySelectorAll('#pointer_' + this.n + ' .block-aside');
                aside[0].classList.remove("show");
                let image = document.querySelectorAll('#pointer_' + this.n + ' .block-img');
                image[0].classList.remove("show");
            }
        }
    };
</script>

<style lang="scss">
    @import "./resources/sass/info.scss";
</style>
