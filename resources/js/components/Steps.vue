<template>
    <section class="steps-wrap">
        <div class="model-choose-text">
            <p>Подберите выгодные условия на LADA {{car_model.title}} {{car_type.title_ru}}</p>
        </div>

        <div class="buy-steps-wrapper">
            <div class="buy-step-block">
                <div class="divided" :class="[ grade == 0 || grade == 1 ? 'buy-step-circle-colored' : 'buy-step-circle' ]">
                    <p class="buy-step-number">1</p>
                </div>
                <p class="buy-step-text">Оцените автомобиль</p>
            </div>

            <div class="buy-step-block">
                <div class="divided" :class="[ grade == 2 || grade == 3? 'buy-step-circle-colored' : 'buy-step-circle' ]">
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

        <div class="option-text step-null" v-if="!grade">
            <p>Имеете ли вы автомобиль на обмен?</p>
            <ul>
                <li><img src="/build/images/icons/checkbox-green.svg" class="check check-green" alt="Обмен для всех. Принимаем автомобили любых марок и в любом состоянии."><span>Обмен для всех. Принимаем автомобили любых марок и&nbsp;в&nbsp;любом состоянии</span></li>
                <li><img src="/build/images/icons/checkbox-green.svg" class="check check-green" alt="У нас все честно. Справедливая цена и никаких скрытых комиссий."><span>У&nbsp;нас все честно. Справедливая цена и&nbsp;никаких скрытых комиссий</span></li>
                <li><img src="/build/images/icons/checkbox-green.svg" class="check check-green" alt="При обмене скидка на новую LADA до 40000 рублей"><span>При обмене скидка на&nbsp;новую LADA до&nbsp;40&nbsp;000 рублей</span></li>
            </ul>
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
                    <li><check-icon></check-icon> <span>Личный менеджер</span></li>
                    <li><check-icon></check-icon> <span>Выгода 40 000 руб. при обмене</span></li>
                    <li><check-icon></check-icon> <span>Зимняя резина в подарок <span class="block-highlight">только до {{date}}</span></span></li>
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
                surchargeText: false,
                date: 'test'
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
                this.changeHash(this.grade);

                if (this.getCookie('trade_in_price') != null && this.getCookie('trade_in_price') > 0) {
                    this.surcharge = this.car_attrs[0].special_price - this.getCookie('trade_in_price');
                    this.surchargeText = true;
                }
            },
            changeHash: function (grade) {
                switch (grade) {
                    case 0:
                        window.location.hash = '#start';
                        break;
                    case 1:
                        window.location.hash = '#estimation';
                        break;
                    case 2:
                        window.location.hash = '#credit';
                        break;
                    case 3:
                        window.location.hash = '#cash';
                        break;
                    case 4:
                        window.location.hash = '#end';
                        break;
                    case 5:
                        window.location.hash = '#no-car';
                        break;
                }
            },
            changeGrade: function (hash) {
                switch (hash) {
                    case '#start':
                        this.grade = 0;
                        break;
                    case '#estimation':
                        this.grade = 1;
                        break;
                    case '#credit':
                        this.grade = 2;
                        break;
                    case '#cash':
                        this.grade = 3;
                        break;
                    case '#end':
                        this.grade = 4;
                        break;
                    case '#no-car':
                        this.grade = 5;
                        break;
                    default:
                        this.grade = 0;
                        break;
                }
            },
            getDate: function() {
                var now = new Date();
                now.setDate(now.getDate() + 3);
                var month = now.getMonth() + 1;
                if (month < 10) {
                    month = '0' + month;
                }
                this.date = now.getDate() + "/" + month;
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
            this.getDate();
            this.deleteCookie();
            this.changeGrade(window.location.hash);
            let self = this;
            let handle = function (event) {
                self.changeGrade(window.location.hash);

            };

            window.addEventListener ("popstate", handle, false);
        }
    };
</script>

<style lang="scss">
    .steps-wrap {
        .trigger-wrap {
            max-width: 600px;
        }

        .btn-half-primary,
        .btn-half-secondary {
            font-family: PragmaticaLightC, Helvetica, sans-serif;
            width: 48%;
            text-transform: uppercase;
            padding: 14px 6px 10px;
            text-align: center;
            border: 2px solid #000;
            border-radius: 50px;
            font-weight: bold;
            font-size: 14px;
            max-width: 250px;
            cursor:pointer;
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

    .conditions,
    .option-text {
        display: flex;
        flex-direction: column;
        padding: 0 30px;

        p {
            font-family: PragmaticaLightCBold, Helvetica, sans-serif;
            margin: 50px 30px 25px;
            text-align: left;
            font-size: 18px;
            font-weight: bold;
            line-height: 1.4;
        }
    }

    @media only screen and (min-width: 580px) {
        .option-text {
            p {
                text-align: center;
                font-weight: normal;
                font-size: 22px;
                margin-bottom: 50px;
            }
        }
    }

    .option-text ul,
    .conditions ul {
       /* width: 75%;*/
        display: block;
        margin: 20px auto 40px;
    }

    .option-text ul li,
    .conditions ul li {
        display: flex;
        align-items: flex-start;
        line-height: 1.2;
        margin-bottom: 7px;
        &>span {
            display: block;
            margin-left: 10px;
        }

        i {
            color: #ff8351;
        }

        .check {
            width: 16px;
            height: 16px;
            min-width: 16px;
            min-height: 16px;
        }
    }

    @media only screen and (min-width: 580px) {
/*        .option-text ul {
            width: 100%;
        }*/

        .option-text,
        .conditions {
           /* width: 430px;*/
            margin: 40px auto 60px;

            ul {
                li {
                    font-size: 20px;

                    .check {
                        width: 26px;

                        &.check-green {
                            width: 16px;
                        }
                    }
                }
            }
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
