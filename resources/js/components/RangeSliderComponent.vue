<template>
    <div>
        <div class="option-text">
            <p>В Брайт Парке выгодные условия кредитования!</p>
        </div>

        <div class="conditions">
            <ul>
                <li><check-icon class="check"></check-icon> <span>12 банков-партнеров</span></li>
                <li><check-icon class="check"></check-icon> <span>Одобрение по кредиту 30 минут</span></li>
                <li><check-icon class="check"></check-icon> <span>Вероятность одобрения 96%</span></li>
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
                <input checked="checked" type="radio" name="program"> Обычная программа <span>{{monthlyPaymentRegularProgram.toFixed(2)}}</span> руб./мес
            </div>
            <div>
                <input type="radio" name="program"> Программа LADA Finance <span>{{monthlyPaymentLadaFinanceProgram.toFixed(2)}}</span> руб./мес<br>
            </div>
            <div>
                <input type="radio" name="program"> Специальный рассчет <span>{{monthlyPaymentSpecialProgram.toFixed(2)}}</span> руб./мес<br>

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
    import CheckIcon from './icons/CheckIcon.vue';

    export default {
        props: ['car'],
        components: {
            VueSlider,
            CheckIcon
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
                regularPercentRate: 15,
                ladaFinancePercentRate: 12,
                specialPercentRate: 5,
                tradeInPrice: 0,
                carPrice: this.car.price,
                monthlyPaymentRegularProgram: 0,
                monthlyPaymentLadaFinanceProgram: 0,
                monthlyPaymentSpecialProgram: 0,
                firstPaymentPercent: 15,
                annualPercent: 12,
                firstPayment: this.car.price / 100 * 15,
                period: 12
            }
        },
        methods: {
            changePeriod() {
                this.$emit('changePeriod', this.period);
                this.calculateMonthlyPayment();
            },
            changeFirstPayment() {
                this.firstPayment = this.car.price / 100 * this.firstPaymentPercent;
                this.calculateMonthlyPayment();
            },
            getCookie(name) {
                let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
                if (match) return match[2];
            },
            calculatePercentFromTradeInPrice() {
                this.firstPaymentPercent = Math.round(this.firstPayment / this.carPrice * 100)
            },
            calculateMonthlyPayment() {
                let debt = this.carPrice - this.firstPayment;

                let monthlyPercentRate = this.regularPercentRate / 12 / 100;
                let mathPow1 = Math.pow(1 + monthlyPercentRate, this.period);
                let res1 = monthlyPercentRate * mathPow1;
                let res2 = mathPow1 - 1;
                let annualCoefficient = (res1 / res2);
                this.monthlyPaymentRegularProgram = debt * annualCoefficient;

                monthlyPercentRate = this.ladaFinancePercentRate / 12 / 100;
                mathPow1 = Math.pow(1 + monthlyPercentRate, this.period);
                res1 = monthlyPercentRate * mathPow1;
                res2 = mathPow1 - 1;
                annualCoefficient = (res1 / res2);
                this.monthlyPaymentLadaFinanceProgram = debt * annualCoefficient;

                monthlyPercentRate = this.specialPercentRate / 12 / 100;
                mathPow1 = Math.pow(1 + monthlyPercentRate, this.period);
                res1 = monthlyPercentRate * mathPow1;
                res2 = mathPow1 - 1;
                annualCoefficient = (res1 / res2);
                this.monthlyPaymentSpecialProgram = debt * annualCoefficient;
            },
            selectCreditProgram(input) {
                this.annualPercent = input.percentRate;
            }
        },
        mounted() {
            if (this.getCookie('trade_in_price') != null && this.getCookie('trade_in_price') > 0) {
                this.firstPayment = this.getCookie('trade_in_price');
                this.calculatePercentFromTradeInPrice();
                this.calculateMonthlyPayment();
            }
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
