<template>
    <section class="steps-wrap">
        <div class="model-choose-text">
            <p>Подберите выгодные условия на LADA {{car_model.title}} {{car_type.title_ru}}</p>
        </div>

        <div class="buy-steps-wrapper">
            <div class="buy-step-block">
                <div class="divided" :class="[ grade == 0 ? 'buy-step-circle-colored' : 'buy-step-circle' ]">
                    <p class="buy-step-number">1</p>
                </div>
                <p class="buy-step-text">Оцените автомобиль</p>
            </div>

            <div class="buy-step-block">
                <div class="divided" :class="[ grade == 1 || grade == 2 || grade == 3? 'buy-step-circle-colored' : 'buy-step-circle' ]">
                    <p class="buy-step-number">2</p>
                </div>
                <p class="buy-step-text">Рассчитайте платеж</p>
            </div>

            <div class="buy-step-block" >
                <div class="buy-step-circle divided" :class="[ grade == 4 ? 'buy-step-circle-colored' : 'buy-step-circle' ]">
                    <p class="buy-step-number">3</p>
                </div>
                <p class="buy-step-text">Заполните форму</p>
            </div>
        </div>

        <div class="option-text" v-if="!grade">
            <p>Имеете ли вы автомобиль на обмен?</p>
        </div>

        <section class="buttons_other mt-20" v-if="!grade">
            <div class="item-buttons-other">
                <a href="#" class="btn btn-primary" v-on:click.prevent="gradeShow(1)">Да, оценить мой автомобиль</a>
                <a href="#" class="btn btn-secondary" v-on:click.prevent="gradeShow(5)">У меня нет автомобиля</a>
            </div>
        </section>

        <div v-if="grade === 1">
            <classified :brands='brands' ></classified>
        </div>

        <div v-if="grade === 1 || grade === 5">
            <div class="button-wrapper-row">
                <a class="btn-half-secondary" v-on:click.prevent="gradeShow(3)">Наличный расчет</a>
                <a class="btn-half-primary" id="creditButton" v-on:click.prevent="gradeShow(2)">В кредит</a>
            </div>
        </div>

        <div class="" v-if="grade === 3">
            <div class="model-choose-text center" v-if="surchargeText"><p>Ваша доплата составит</p></div>
            <div class="your-surcharge">от {{surcharge | formatPrice}} руб.</div>
            <div class="model-choose-text2"><p>В Брайт Парке выгодные условия при покупке за наличные!</p></div>
            <div class="conditions">
                <ul>
                    <li><check-icon class="check"></check-icon> <span>Личный менеджер</span></li>
                    <li><check-icon class="check"></check-icon> <span>Выгода 40 000 руб. при обмене</span></li>
                    <li><check-icon class="check"></check-icon> <span>Зимняя резина в подарок <span class="block-highlight">только до 16/01</span></span></li>
                </ul>
            </div>

        </div>

        <range-slider-component :car='car_attrs'
                                v-if="grade === 2"></range-slider-component>
        <form-buy-component v-if="grade === 4" :cities=cities></form-buy-component>

        <div class="buttons_other" v-if="grade === 2 || grade === 3">
            <div class="item-buttons-other">
                <a href="#" class="btn btn-primary" v-on:click.prevent="gradeShow(4)">Закрепить условия</a>
            </div>
        </div>

        <div class="progressbar-wrapper">
            <div class="progressbar-line" :class="[ grade === 1 || grade === 2 || grade === 3 ? 'step2' : '', grade === 4 ? 'step4' : '' ]"></div>
            <span class="progressbar-text" v-if="!grade">Осталось всего 2 шага до получения выгодных условий</span>
            <span class="progressbar-text" v-if="grade === 1 ">Мы готовы выкупить ваш автомобиль на 10% дороже рынка при обмене на новенькую LADA</span>
            <span class="progressbar-text" v-if="grade === 2">Вы у цели! Закрепите выгодные условия</span>
        </div>
    </section>
</template>

<script>
    import CheckIcon from './icons/CheckIcon.vue';

    export default {
        name: 'App',
        props: [
            'brands',
            'car_model',
            'car_type',
            'car_attrs',
            'cities'
        ],
        data: function() {
            return {
                grade: 0,
                surcharge: this.car_attrs[0].special_price,
                surchargeText: false
            };
        },
        filters: {
            formatPrice: function(price) {
                if (!parseInt(price)) { return "";}
                if(price > 999) {
                    var priceString = (price / 1).toFixed(0);
                    var priceArray = priceString.split("").reverse();
                    var index = 0;
                    while (priceArray.length > index + 3) {
                        priceArray.splice(index+3, 0, " ");
                        index +=4;
                    }
                    return priceArray.reverse().join("");
                } else {
                    return (price / 1).toFixed(0);
                }
            }
        },
        methods: {
            gradeShow: function (grade) {
                this.grade = grade;

                if (this.getCookie('trade_in_price') != null && this.getCookie('trade_in_price') > 0) {
                    this.surcharge = this.car_attrs[0].special_price - this.getCookie('trade_in_price');
                    this.surchargeText = true;
                }
            },
            getCookie(name) {
                let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
                if (match) return match[2];
            },
            setCookie(price) {
                let current_date = new Date();
                current_date.setTime(current_date.getTime() + 3600 );
                let cookieexpire = current_date.toLocaleString();

                document.cookie = "trade_in_price=" + price + ";expires=" + cookieexpire + "path=/";
            },
            deleteCookie(name) {
                this.setCookie(0)
            }
        },
        components: {
            CheckIcon
        },
        mounted() {
            this.deleteCookie();
        }
    };
</script>

<style lang="scss">
    .option-text {
        font-family: PragmaticaLightCBold, Helvetica, sans-serif;
        margin: 50px 30px 25px;
        text-align: left;
        font-size: 18px;
        font-weight: bold;
        line-height: 1.4;
    }

    .steps-wrap {
        .btn-half-primary,
        .btn-half-secondary {
            font-family: PragmaticaLightC, Helvetica, sans-serif;
            width: 48%;
            text-transform: uppercase;
            padding: 14px 10px 10px;
            text-align: center;
            border: 2px solid #000;
            border-radius: 50px;
            font-weight: bold;
            font-size: 12px;
            max-width: 320px;
        }

        .btn-half-secondary {
            background-color: transparent;
            color: #000;
        }

        .btn-half-primary {
            background-color: #FF8351;
            border: 2px solid #FF8351;
            color: #fff;
        }


        form {
            margin-bottom: 40px;
        }

        .button-wrapper-row {
            margin: 50px 30px;
            display: flex;
            justify-content: space-between;
        }

        .buttons_other {
            .item-buttons-other {
                margin-bottom: 40px;
                text-align: center;

                & > a {
                    margin-bottom: 15px;
                }

                .btn {
                    font-family: PragmaticaLightC, Helvetica, sans-serif;
                    width: 85.51vw;
                    border-radius: 50px;
                    padding: 14px 15px 10px;
                }

                .btn-primary {
                    border: 2px solid #FF8351;
                    color: #fff;
                    background-color: #FF8351;
                }

                .btn-secondary {
                    border: 2px solid #000;
                    color: #000;
                    background-color: transparent;
                }
            }
        }
    }

    @media only screen and (min-width: 580px) {
        #classified {
            max-width: 580px;
            margin: 0 auto;
        }
        .steps-wrap {
            .button-wrapper-row {
                justify-content: center;

                a {
                    margin: 0 10px
                }
            }
        }

        .option-text {
            text-align: center;
            font-weight: normal;
            font-size: 22px;
            margin-bottom: 50px;
        }

        .steps-wrap {
            .buttons_other {
                .item-buttons-other {
                    .btn {
                        width: 46%;
                        max-width: 320px;
                    }
                }
            }
        }
    }

    @media only screen and (min-width: 800px) {

    }

    .conditions {
        width: 70vw;
        display: block;
        margin: 20px auto 40px;
    }

    .conditions ul li {
        margin-bottom: 5px;
        display: flex;

        &>span {
            float: left;
            display: block;
            margin-left: 10px;
            clear: both;
        }

        i {
            color: #ff8351;
        }

        .check {
            width: 16px;
            height: 16px;
        }

    }

    .your-surcharge {
        font-family: PragmaticaLightCBold, Helvetica, sans-serif;
        color: #FF8351;
        text-align: center;
        font-size: 30px;
        margin: 16px 0;
    }

    .progressbar-wrapper {
        text-align: center;
        max-width: 580px;
        margin: 0 auto 80px;

        .progressbar-line {
            margin: 0 auto 10px;
            display: block;
            height: 50px;
            position: relative;
            width: 100%;
            border: 2px solid #000;

            &::before {
                content: "";
                width: 33.3%;
                height: 100%;
                position: absolute;
                left: 0;
                background: rgb(255,131,81);
                background: url(/build/images/icons/progressbar.svg) repeat-x,linear-gradient(90deg, rgba(255,131,81,1) 0%, rgba(255,182,119,1) 70%);
                -webkit-transition: all ease-out 1s;
                -moz-transition: all ease-out 1s;
                -o-transition: all ease-out 1s;
                transition: all ease-out 1s;

            }

            &.step2::before {
                width: 66%;
            }

            &.step4::before {
                width: 100%;
            }
        }

        .progressbar-section-colored {
            border-radius: 0;
            width: 33%;
            height: 50px;
            background-color: #92d36e;
        }

        .progressbar-text {
            font-family: PragmaticaLightCBold, Helvetica, sans-serif;
            text-align: center;
            font-size: 12px;
            line-height: 18px;
            color: #000;
        }

        @media only screen and (min-width: 580px) and (max-width: 1099px) {
            .progressbar-text {
                font-size: 14px;
            }
        }

        @media only screen and (min-width: 1100px) {
            .progressbar-text {
                font-size: 16px;
            }
        }
    }
</style>
