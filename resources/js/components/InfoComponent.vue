<template>
    <section :class="_block">
        <div class="block-text">
            <h2 v-html="data.title"></h2>
            <p v-html="data.text"></p>
        </div>
        <div :v-if="data.pointers" class="block-img">
            <ul :class="_pointer">
                <li v-for="n in data.pointers"  :class="'p' + n">+</li>
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
        computed: {
            _block: function(el) {
                return "block block_" + el.block;
            },
            _pointer: function(el) {
                return "pointers-" + this.data.pnum;
            }
        },
        data: function () {
            return {}
        }
    };
</script>

<style lang="scss">
    @import "./resources/sass/info.scss";
</style>
