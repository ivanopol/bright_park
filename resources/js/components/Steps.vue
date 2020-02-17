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
                <div class="divided" :class="[ grade == 1 || grade == 2 ? 'buy-step-circle-colored' : 'buy-step-circle' ]">
                    <p class="buy-step-number">2</p>
                </div>
                <p class="buy-step-text">Рассчитайте платеж</p>
            </div>

            <div class="buy-step-block">
                <div class="buy-step-circle divided">
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

        <range-slider-component car='car_attrs' v-if="grade === 2"></range-slider-component>


        <div class="progressbar-wrapper">
            <div class="progressbar-line" :class="[ grade === 1 || grade === 2 ? 'step2' : '' ]"></div>
            <span class="progressbar-text" v-if="!grade">Осталось всего 2 шага до получения выгодных условий</span>
            <span class="progressbar-text" v-if="grade === 1">Мы готовы выкупить ваш автомобиль на 10% дороже рынка при обмене на новенькую LADA</span>
            <span class="progressbar-text" v-if="grade === 2">Вы у цели! Закрепите выгодные условия</span>
        </div>
    </section>
</template>

<script>

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
                grade: 0
            };
        },
        methods: {
            gradeShow: function (grade) {
                this.grade = grade;
            }
        },
        components: {
        }
    };
</script>

<style lang="scss" >

</style>
