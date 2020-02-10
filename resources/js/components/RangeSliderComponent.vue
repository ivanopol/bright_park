<template>
    <div>
        <vue-slider v-model="sliderOne.value" :interval="1" :marks="sliderOne.marks" :drag-on-click="true" :min="sliderOne.min" :max="sliderOne.max"/>
        <vue-slider v-model="sliderTwo.value" :interval="1" :marks="sliderTwo.marks" :drag-on-click="true" :min="sliderTwo.min" :max="sliderTwo.max"/>
    </div>
</template>

<script>
    import VueSlider from 'vue-slider-component'
    import 'vue-slider-component/theme/antd.css'

    export default {
        components: {
            VueSlider
        },
        data() {
            return {
                'sliderOne':
                    {
                        value: 15,
                        marks: [15, 50],
                        min: 15,
                        max: 50
                    }, 'sliderTwo':
                    {
                        value: 12,
                        marks: [12, 60],
                        min: 12,
                        max: 60
                    }
            }
        }
    }
</script>

<style lang="scss">
    .vue-slider-process {
        background-color: #ff8351;
        border-radius: 15px;
        transition: background-color 0.3s;
    }

    .vue-slider:hover .vue-slider-process {
        background-color: #ff8351;
    }

    .vue-slider-dot-handle {
        cursor: pointer;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #ff8351;
        border: 2px solid #ff8351;
        box-sizing: border-box;
        -webkit-transition: box-shadow 0.3s, border-color 0.3s;
        transition: box-shadow 0.3s, border-color 0.3s;
    }

    .vue-slider:hover .vue-slider-dot-handle:hover {
        border-color: #ff8351;
    }

    .vue-slider:hover .vue-slider-dot-handle {
        border-color: #ff8351;
    }

    .vue-slider-dot-handle-focus {
        box-shadow: #ff8351;
    }

    .vue-slider:hover .vue-slider-mark-step-active {
        box-shadow: 0 0 0 2px #ff8351;
    }

    .vue-slider .vue-slider-mark-step-active {
        box-shadow: 0 0 0 2px #ff8351;
    }

    .vue-slider-mark-step {
        box-shadow: 0 0 0 2px #ff8351;
    }

</style>
