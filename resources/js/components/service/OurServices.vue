<template>
    <section class="car-services container">
        <h2><span class="c_orange">Наши</span> услуги</h2>
        <div class="container">
            <badger-accordion >
                <badger-accordion-item>
                    <template slot="header">Техническое обслуживание (ТО)</template>
                    <template slot="content">
                        <ul>
                            <li><check-icon></check-icon> Кузовной ремонт - от&nbsp;500&nbsp;руб.</li>
                            <li><check-icon></check-icon> Локальный ремонт - от&nbsp;3500&nbsp;руб.</li>
                            <li><check-icon></check-icon> Ремонт без окраса - от&nbsp;1500&nbsp;руб.</li>
                            <li><check-icon></check-icon> Обработка арок и днища автомобиля антишумом - от&nbsp;2500&nbsp;руб.</li>
                            <li><check-icon></check-icon> Нанесение защитной пленки - от&nbsp;1500&nbsp;руб.</li>
                        </ul>
                    </template>
                </badger-accordion-item>

                <badger-accordion-item>
                    <template slot="header">Кузовной ремонт</template>
                    <template slot="content">
                        <ul>
                            <li><check-icon></check-icon> Кузовной ремонт - от&nbsp;500&nbsp;руб.</li>
                            <li><check-icon></check-icon> Локальный ремонт - от&nbsp;3500&nbsp;руб.</li>
                            <li><check-icon></check-icon> Ремонт без окраса - от&nbsp;1500&nbsp;руб.</li>
                            <li><check-icon></check-icon> Обработка арок и днища автомобиля антишумом - от&nbsp;2500&nbsp;руб.</li>
                            <li><check-icon></check-icon> Нанесение защитной пленки - от&nbsp;1500&nbsp;руб.</li>
                        </ul>
                    </template>
                </badger-accordion-item>

                <badger-accordion-item>
                    <template slot="header">Слесарный ремонт</template>
                    <template slot="content">
                        <ul>
                            <li><check-icon></check-icon> Кузовной ремонт - от&nbsp;500&nbsp;руб.</li>
                            <li><check-icon></check-icon> Локальный ремонт - от&nbsp;3500&nbsp;руб.</li>
                            <li><check-icon></check-icon> Ремонт без окраса - от&nbsp;1500&nbsp;руб.</li>
                            <li><check-icon></check-icon> Обработка арок и днища автомобиля антишумом - от&nbsp;2500&nbsp;руб.</li>
                            <li><check-icon></check-icon> Нанесение защитной пленки - от&nbsp;1500&nbsp;руб.</li>
                        </ul>
                    </template>
                </badger-accordion-item>
            </badger-accordion>
        </div>
    </section>
</template>

<script>
    import CheckIcon from '../icons/CheckIcon.vue';
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
            BadgerAccordionItem,
            CheckIcon,
        },
        mounted() {
        }
    }
</script>

<style lang="scss">
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

    .badger-accordion__header .js-badger-accordion-header .badger-accordion-toggle .badger-toggle-indicator {
        flex: unset;
        cursor: pointer;
        width: 25px;
        height: 25px;
        position: relative;
        color: #fff;

        &:before {
            content: '';
            display: block;
            position: absolute;
            right: 0;
            top: 0;
            background-color: #FF8351;
            width: 25px;
            height: 25px;
            border-radius: 20px;
        }

        &:after {
            content: "";
            display: block;
            border: 2px solid #ffffff;
            border-left: none;
            border-top: none;
            width: 8px;
            height: 8px;
            transform: rotate(45deg);
            z-index: 1;
            left: 0;
            right: 0;
            top: 6px;
            margin: 0 auto;
            position: absolute;
        }
    }

    .component-badger-accordion {
        margin: 0 30px;
        border-bottom: 1px solid #b7b7b7;
    }

    @media only screen and (min-width: 700px) {
        .component-badger-accordion {
            margin: 0 auto;
            width: 65%;
            max-width: 700px;
        }
    }

    .badger-accordion__header {
        .js-badger-accordion-header {
            .badger-accordion-toggle {
                font-size: 18px;
                padding: 12px 5px;
                border-top: 1px solid #b7b7b7;
                justify-content: space-between;
            }
        }
    }

    @media only screen and (min-width: 1100px) {
        .badger-accordion__header {
            .js-badger-accordion-header {
                .badger-accordion-toggle {
                    font-size: 22px;
                }
            }
        }
    }

    .js-badger-accordion-panel-inner {
        padding: 20px 5px 20px;
        ul {
            li {
                margin-bottom: 10px;
                line-height: 1.2;
                display: flex;
                align-items: flex-start;

                .check {
                    width: 16px;
                    height: 16px;
                    min-width: 16px;
                    min-height: 16px;
                    margin-right: 10px;
                }
            }
        }
    }


</style>
