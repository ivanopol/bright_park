<template>
    <section class="car-services container">
        <h2><span class="c_orange">Наши</span> услуги</h2>
        <div class="container">
            <badger-accordion>
                <badger-accordion-item>
                    <template slot="header">Техническое обслуживание (ТО)</template>
                    <template slot="content">
                        <ul>
                            <li>Кузовной ремонт - от 500 руб.</li>
                            <li>Локальный ремонт - от 3500 руб.</li>
                            <li>Ремонт без окраса - от 1500 руб.</li>
                            <li>Обработка арок и днища автомобиля антишумом - от 2500 руб.</li>
                            <li>Нанесение защитной пленки - от 1500 руб.</li>
                        </ul>
                    </template>
                </badger-accordion-item>

                <badger-accordion-item>
                    <template slot="header">Кузовной ремонт</template>
                    <template slot="content">
                        <ul>
                            <li>Кузовной ремонт - от 500 руб.</li>
                            <li>Локальный ремонт - от 3500 руб.</li>
                            <li>Ремонт без окраса - от 1500 руб.</li>
                            <li>Обработка арок и днища автомобиля антишумом - от 2500 руб.</li>
                            <li>Нанесение защитной пленки - от 1500 руб.</li>
                        </ul>
                    </template>
                </badger-accordion-item>

                <badger-accordion-item>
                    <template slot="header">Слесарный ремонт</template>
                    <template slot="content">
                        <ul>
                            <li>Кузовной ремонт - от 500 руб.</li>
                            <li>Локальный ремонт - от 3500 руб.</li>
                            <li>Ремонт без окраса - от 1500 руб.</li>
                            <li>Обработка арок и днища автомобиля антишумом - от 2500 руб.</li>
                            <li>Нанесение защитной пленки - от 1500 руб.</li>
                        </ul>
                    </template>
                </badger-accordion-item>
            </badger-accordion>
        </div>
    </section>
</template>

<script>
    import {BadgerAccordion, BadgerAccordionItem} from 'vue-badger-accordion';

    export default {
        name: "CarServices",
        props: {},
        data: function () {
            return {

            }
        },
        methods: {
        },
        computed: {
        },
        components: {
            BadgerAccordion,
            BadgerAccordionItem
        },
        mounted() {
        }
    }
</script>

<style scoped lang="scss">
    .car-services {
        h2 {
            text-align: center;
            margin: 60px auto;
            padding: 0 20px;
            span {
                display: inline-block;
            }
        }

        @media only screen and (min-width: 580px) {
            h2 {
                margin: 80px auto;
            }
        }
    }
</style>
