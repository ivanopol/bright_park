<template>
    <section class="block change-color">
        <div class="block-text">
            <h2><span class="c_orange">Цвет</span> притягивает взгляды</h2>
        </div>
        <div class="car-color">
            <div class="backlight"></div>
            <img src="build/images/colors/lada_granta_blue.png" alt="Голубая планета">
        </div>
        <div class="palette">
            <div class="color-name" >Голубая планета</div>
            <ul>
                <li v-for="(color, id) in colors" >
                    <div :class="'circle ' + color.class" :data-name="color.title" :data-image="color.image"> </div>
                </li>
            </ul>
        </div>
    </section>
</template>

<script>
    export default {
        name: 'App',
        props : ['colors'],
        data: function () {
            return {};
        }
    }
</script>

<style lang="scss">
    @import "./resources/sass/color_choose.scss";
</style>
