<template>
    <section class="block" >
        <div class="block-text">
            <h2 v-html="data.title"></h2>
            <p v-html="data.text"></p>
        </div>
        <div :v-if="data.pointers" class="block-img">
            <ul :class="'pointers-' + data.pnum">
                <li v-for="n in data.pointers">
                    <span :class="'pointer p' + n" v-on:click="activate">+</span>
                </li>
            </ul>
        </div>
        <div class="block-img">
            <img :src="data.url" alt="">
        </div>
    </section>
</template>

<script>
    export default {
        name: 'App',
        props : ['data'],
        data: function () {
            return {}
        },
        methods: {
            activate: function (event) {
                alert();
            }
        }
    };
</script>

<style lang="scss">
    @import "./resources/sass/info.scss";
</style>
