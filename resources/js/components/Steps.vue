<template>
    <section>
        <div class="model-choose-text">
            <p>Подберите выгодные условия на LADA {{car_model.title}} {{car_type.title_ru}}</p>
        </div>

        <div class="buy-steps-wrapper">
            <div class="buy-step-block">
                <div class="divided" :class="[ grade > 0 ? 'buy-step-circle-colored' : 'buy-step-circle' ]">
                    <p class="buy-step-number">1</p>
                </div>
                <p class="buy-step-text">Оцените автомобиль</p>
            </div>

            <div class="buy-step-block">
                <div class="divided" :class="[ grade > 1 ? 'buy-step-circle-colored' : 'buy-step-circle' ]">
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

        <div class="option-text">
            <p>Имеете ли вы автомобиль на обмен?</p>
        </div>

        <section class="buttons_other mt-20" v-if="!grade">
            <div class="item-buttons-other">
               <!-- <a href="#" class="btn btn-primary" v-on:click.prevent="!grade">Да, оценить мой атомобиль</a>-->
                <a href="#" class="btn btn-primary" v-on:click.prevent="gradeShow">Да, оценить мой автомобиль</a>
                <a href="#" class="btn btn-secondary">У меня нет автомобиля</a>
            </div>
        </section>

        <classified :brands='brands' v-if="grade === 1"></classified>

        <div class="progressbar-wrapper">
            <div class="progressbar-line" :class="[ grade === 1 ? 'step2' : '' ]"></div>
            <span class="progressbar-text" v-if="!grade">Осталось всего 2 шага до получения выгодных условий</span>
            <span class="progressbar-text" v-if="grade === 1">Мы готовы выкупить ваш автомобиль на 10% дороже рынка при обмене на новенькую LADA</span>
        </div>
    </section>
</template>

<script>

    export default {
        name: 'App',
        props: [
            'brands',
            'car_model',
            'car_type'
        ],
        data: function() {
            return {
                grade: 0
            };
        },
        methods: {
            gradeShow: function () {
                this.grade = 1;
            }
        },
        components: {
        }
    };
</script>

<style lang="scss" >

</style>
