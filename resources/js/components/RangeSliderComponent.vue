<template>
    <div>
        <div class="option-text">
            <p>В Bright Park выгодные условия кредитования!</p>
        </div>

        <div class="conditions">
            <ul>
                <li><span><i class="fas fa-check"></i></span> <span>12 банков-партнеров</span></li>
                <li><span><i class="fas fa-check"></i></span> <span>Одобрение по кредиту 30 минут</span></li>
                <li><span><i class="fas fa-check"></i></span> <span>Вероятность одобрения 96%</span></li>
            </ul>
        </div>

        <div class="credit-profit-text">
            <p>
                Первоначальный взнос
            </p>
        </div>

        <div class="range-slider-wrapper">
            <vue-slider v-model="firstPaymentPercent" :interval="1" :marks="sliderOne.marks" :drag-on-click="true"
                        :min="sliderOne.min" :max="sliderOne.max" v-on:change="changeFirstPayment"/>
        </div>

        <div class="disabled-input">
            <input readonly v-model="firstPayment"/> руб.
        </div>

        <div class="credit-profit-text">
            <p>Срок в месяцах</p>
        </div>

        <div class="range-slider-wrapper">
            <vue-slider v-model="period" :interval="1" :marks="sliderTwo.marks" :drag-on-click="true"
                        :min="sliderTwo.min" :max="sliderTwo.max" v-on:change="changePeriod" :change="changePeriod"/>
        </div>

        <div class="disabled-input">
            <input readonly v-model="period"/> мес.
        </div>

        <div class="radio-buttons-group">
            <div>
                <input type="radio" name="program"> Обычная программа 19 700 руб./мес
            </div>
            <div>
                <input type="radio" name="program"> Программа LADA Finance 12 700 руб./мес<br>
            </div>
            <div>
                <input type="radio" name="program"> Специальный рассчет 11 700 руб./мес<br>

            </div>
        </div>

        <div class="buttons_other">
            <div class="item-buttons-other">
                <a href="#" class="btn btn-primary">Закрепить условия</a>
            </div>
        </div>

    </div>
</template>

<script>
    import VueSlider from 'vue-slider-component'
    import 'vue-slider-component/theme/antd.css'

    export default {
        props: ['car'],
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
                    },
                'sliderTwo':
                    {
                        value: 12,
                        marks: [12, 60],
                        min: 12,
                        max: 60
                    },
                tradeInPrice: 0,
                carPrice: this.car[0]['price'],
                monthlyPayment: 0,
                firstPaymentPercent: 15,
                annualPercent: 12,
                firstPayment: this.car[0]['price'] / 100 * 15,
                period: 12
            }
        },
        methods: {
            changePeriod() {
                this.$emit('changePeriod', this.period);
            },
            changeFirstPayment() {
                this.firstPayment = this.car[0]['price'] / 100 * this.firstPaymentPercent;
                this.calculateMonthlyPayment();
            },
            calculateMonthlyPayment() {
                let yearCoefficient = this.period / 12;

                if (yearCoefficient < 1) {
                    yearCoefficient = 1;
                }

                this.monthlyPayment =
                    (this.carPrice + (this.carPrice / 100 * this.annualPercent)) / this.period - this.firstPayment
            },

            getCookie(name) {
                let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
                if (match) return match[2];
            }
        },
        mounted() {
            this.tradeInPrice = this.getCookie('trade_in_price');
        },
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
