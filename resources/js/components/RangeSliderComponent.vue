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

        <div class="credit-wrap">
            <div class="credit-profit-text">Первоначальный взнос</div>

            <div class="range-slider-wrapper">
                <vue-slider v-model="firstPaymentPercent" :height="6" :interval="1" :dotSize="25" :marks="sliderOne.marks" :drag-on-click="true"
                            :min="sliderOne.min" :max="sliderOne.max" v-on:change="changeFirstPayment"/>
            </div>

            <div class="disabled-input">
                <span class="credit-first-payment"><input name="first-payment" v-model="firstPayment"/> руб.</span>
            </div>

            <div class="credit-profit-text">Срок в месяцах</div>

            <div class="range-slider-wrapper">
                <vue-slider v-model="period" :height="6" :interval="1" :dotSize="25" :marks="sliderTwo.marks" :drag-on-click="true"
                            :min="sliderTwo.min" :max="sliderTwo.max" v-on:change="changePeriod" :change="changePeriod"/>
            </div>

            <div class="disabled-input">
                <span class="credit-period"><input name="period" v-model="period"/> мес.</span>
            </div>
        </div>

        <div class="radio-buttons-group">
            <ul>
                <li><input id="program_1" value="p_1" type="radio" name="program" v-model="picked" >
                    <label for="program_1">Обычная программа <span class="program-cost">{{monthlyPaymentRegularProgram.toFixed(0)}}</span> руб./мес</label>
                </li>
                <li><input id="program_2" value="p_2" type="radio" name="program" v-model="picked">
                    <label for="program_2">Программа LADA Finance <span class="program-cost" >{{monthlyPaymentLadaFinanceProgram.toFixed(0)}}</span> руб./мес</label>
                </li>
                <li><input id="program_3" value="p_3" type="radio" name="program" v-model="picked">
                    <label for="program_3">Специальный рассчет <span class="program-cost">{{monthlyPaymentSpecialProgram.toFixed(0)}}</span> руб./мес</label>
                </li>
            </ul>
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
                picked: 'p_1',
                sliderOne:
                    {
                       // value: 30,
                        //marks: [0, 50],
                        marks: {
                            '0': {
                                label: '0%'
                            },
                            '15': {
                                label: '15%'
                            },
                            '50':{
                                label: '50%'
                            },
                        },
                        min: 15,
                        max: 50
                    },
                'sliderTwo':
                    {
                      //  value: 60,
                        marks: [12, 60],
                        min: 12,
                        max: 60
                    },
                regularPercentRate: 15,
                ladaFinancePercentRate: 12,
                specialPercentRate: 5,
                tradeInPrice: 0,
                carPrice: this.car[0].price,
                monthlyPaymentRegularProgram: 0,
                monthlyPaymentLadaFinanceProgram: 0,
                monthlyPaymentSpecialProgram: 0,
                firstPaymentPercent: 30,
                annualPercent: 12,
                firstPayment: this.car[0].price / 100 * 15,
                period: 60
            }
        },
        methods: {
            changePeriod() {
                this.$emit('changePeriod', this.period);
                this.calculateMonthlyPayment();
            },
            changeFirstPayment() {
                this.firstPayment = Math.round(this.car[0].price / 100 * this.firstPaymentPercent);
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
                this.monthlyPaymentRegularProgram = Math.round(debt * annualCoefficient);

                monthlyPercentRate = this.ladaFinancePercentRate / 12 / 100;
                mathPow1 = Math.pow(1 + monthlyPercentRate, this.period);
                res1 = monthlyPercentRate * mathPow1;
                res2 = mathPow1 - 1;
                annualCoefficient = (res1 / res2);
                this.monthlyPaymentLadaFinanceProgram = Math.round(debt * annualCoefficient);

                monthlyPercentRate = this.specialPercentRate / 12 / 100;
                mathPow1 = Math.pow(1 + monthlyPercentRate, this.period);
                res1 = monthlyPercentRate * mathPow1;
                res2 = mathPow1 - 1;
                annualCoefficient = (res1 / res2);
                this.monthlyPaymentSpecialProgram = Math.round(debt * annualCoefficient);
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
    .credit-wrap {
        width: 75vw;
        margin: 40px auto;
    }

    .credit-profit-text {
        padding: 5% 0;
    }

    .conditions {
        width: 70vw;
        display: block;
        margin: 40px auto;
    }

    .conditions ul li {
        margin-bottom: 5px;
        display: flex;

        &>span {
            float: left;
            display: block;
        }

        i {
            color: #ff8351;
        }

        .check {
            width: 16px;
            height: auto;
        }

        span {
            margin-left: 10px;
            clear: both;
        }
        &::before {

        }
    }


    .disabled-input {
        display: block;
        text-align: center;

        .credit-first-payment {
            input {
                width: 28%;
            }
        }

        .credit-period {
            input {
                width: 15%;
            }
        }

        input {
            border-radius: 18px;
            box-shadow: none;
            border: 1px solid #606060;
            width: 20%;
            background: white;
            padding: 5px 10px;
        }
    }

    .range-slider-wrapper {
        width: 75vw;
        margin: 0 auto 20px;
    }

    .radio-buttons-group {
        font-size: 14px;
        display: block;
        width: 80vw;
        margin: 0 auto 40px;

        ul {
            li {
                margin-bottom: 15px;
                font-weight: bold;

                .program-cost {
                    font-family: PragmaticaLightCBold, Helvetica, sans-serif;
                    font-size: 14px;
                    font-weight: normal;
                }
            }
        }
    }

    .radio-buttons-group-option {
        grid-column: span 1;

        p {
            grid-column: span 11;
        }
    }


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

    .vue-slider:hover .vue-slider-rail {
        background-color: #9d9f9e;
    }

    .vue-slider:hover .vue-slider-dot-handle {
        border-color: #ff8351;
    }

    .vue-slider-dot-handle-focus {
        box-shadow: #ff8351;
    }

    .vue-slider:hover .vue-slider-mark-step-active {
        box-shadow: none;
        background-color: transparent;
    }

    .vue-slider .vue-slider-mark-step-active {
        box-shadow: none !important;
        background-color: transparent;
    }

    .vue-slider-mark-step {
        box-shadow: none !important;
        background-color: transparent;
    }

    .vue-slider-rail {
        background-color: #9d9f9e;
    }

    .vue-slider-mark-label {
        font-size: 14px;
        color: #9d9f9e;
    }

    .vue-slider-ltr .vue-slider-mark-label, .vue-slider-rtl .vue-slider-mark-label {
        margin-top: 16px;
    }

</style>
