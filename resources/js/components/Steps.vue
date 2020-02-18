<template>
    <section>
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
                <a href="#" class="btn btn-secondary" v-on:click.prevent="gradeShow(2)">У меня нет автомобиля</a>
            </div>
        </section>

        <div v-if="grade === 1">
            <classified :brands='brands' ></classified>
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

        <range-slider-component :car='car_attrs' v-if="grade === 2"></range-slider-component>
        <form-buy-component v-if="grade === 4"></form-buy-component>

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
            'car_attrs'
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

<style lang="scss" >
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
</style>
