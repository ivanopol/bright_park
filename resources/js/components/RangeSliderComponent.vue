<template>
    <vue-slider v-model="value"  :interval="1" :tooltip="always" :marks="marks" :drag-on-click="true"
                />
</template>

<script>
    import VueSlider from 'vue-slider-component'
    import 'vue-slider-component/theme/antd.css'

    export default {
        components: {
            VueSlider
        },
        data () {
            return {
                value: 0,
                marks: [15, 20, 25, 30, 35, 40, 45, 50]
            }
        }
    }
</script>

<style scoped lang="scss">
    .slider {
        /* overwrite slider styles */
        width: 90%;
        align-self: center;
        margin-left: 5%;

    }
    .range-slider-fill {
        background-color: #ff8351;
    }
    .range-slider-knob{
        background-color: #ff8351;
        border-color: #ff8351
    }
</style>
