<template>
    <section id="classified">
        <div class="option-text">Оцените свой автомобиль</div>
        <div class="dropdown-group">
            <v-select class="select_wrap" :components="{OpenIndicator, Deselect}" placeholder="Марка" taggable :options="brands" v-on:input="stepOne">
                <div class="spinner" v-show="mutableLoading">Загрузка...</div>
                <div slot="no-options">Нет совпадений</div>
            </v-select>
            <v-select @search:focus="uploadModels" :disabled="!step_one" class="select_wrap" :components="{OpenIndicator, Deselect}" placeholder="Модель" taggable :options="[]">
                <div class="spinner" v-show="mutableLoading">Загрузка...</div>
                <div slot="no-options">Нет совпадений</div>
            </v-select>
            <v-select disabled class="select_wrap" :components="{OpenIndicator, Deselect}" placeholder="Год выпуска" taggable :options="[]">
                <div class="spinner" v-show="mutableLoading">Загрузка...</div>
                <div slot="no-options">Нет совпадений</div>
            </v-select>
            <v-select disabled class="select_wrap" :components="{OpenIndicator, Deselect}" placeholder="Комплектация" taggable :options="[]">
                <div class="spinner" v-show="mutableLoading">Загрузка...</div>
                <div slot="no-options">Нет совпадений</div>
            </v-select>
            <v-select disabled class="select_wrap" :components="{OpenIndicator, Deselect}" placeholder="Пробег" taggable :options="[]">
                <div class="spinner" v-show="mutableLoading">Загрузка...</div>
                <div slot="no-options">Нет совпадений</div>
            </v-select>
        </div>

        <div class="trigger-wrap">
            <div class="trigger-block">
                <div class="trigger-row">
                    <div class="trigger-half trigger-left trigger-text">Рыночная оценка</div>
                    <div class="trigger-half trigger-right trigger-price">300 000 руб.</div>
                </div>

                <div class="trigger-row">
                    <div class="trigger-half trigger-left trigger-text">Оценка Bright Park</div>
                    <div class="trigger-half trigger-right trigger-price trigger-price-accent">320 000 руб.</div>
                </div>
            </div>
        </div>

        <div class="model-choose-text">
            <p>Предложение действует до 16 января</p>
        </div>

        <div class="button-wrapper-row">
            <button class="btn-half-secondary">
                <a href='/trade_in_cash'>Наличный расчет</a>
            </button>
            <button class="btn-half-primary">
                <a href="/trade_in_credit">В кредит</a>
            </button>
        </div>
    </section>
</template>

<script>
    import vSelect from 'vue-select';
    import 'vue-select/dist/vue-select.css';
    import axios from 'axios';

    export default {
        name: 'App',
        props: ['brands'],
        data: () => ({
            Deselect: {
                render: createElement => createElement('span'),
            },
            OpenIndicator: {
                render: createElement => createElement('span', {class: {'toggle': true}}),
            },
            step_one: false,
        }),
        components: {
            vSelect,
            axios
        },
        methods: {
            mutableLoading() {
                return {};
            },
            stepOne: function (input) {

                axios.get('/get_brand_models', {
                    params: {
                        model_id: input.code
                    }
                })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                })
                .then(function () {
                   // console.log('always');
                });

                this.step_one = true;
                //this.$children[1].disabled = false;
            },
            uploadModels: function () {
                let options_count = this.$children[1].options.length;

                if (options_count) {
                    return false;
                }


                console.log("test");
            }
        }
    };
</script>

<style lang="scss" >

    .dropdown-group {
        margin: 0 30px;
        .select_wrap {
            position: relative;
            margin-bottom: 18px;

            &.vs--disabled .vs__clear,
            &.vs--disabled .vs__dropdown-toggle,
            &.vs--disabled .vs__open-indicator,
            &.vs--disabled .vs__search,
            &.vs--disabled .vs__selected {
                background-color: #eef2f7;
                border: 2px solid #eef2f7;
                color: #9299a2;
            }

            .vs__dropdown-toggle {
                background-color: #fff;
                border-radius: 6px;
                border: 2px solid #000;
                height: 42px;
                overflow: hidden;
            }

            .vs__search, .vs__search:focus {
                line-height: 2;
                padding: 0 17px;
                color: #000;
            }

            .vs__selected {
                padding: 0 25px 0 14px;
                height: 34px;
            }

            &.vs--single.vs--open .vs__selected {
                line-height: 2;
                height: 34px;
            }

            &.vs--searching .vs__search {
                color: #000;
            }

            .vs__actions {
                padding-right: 17px;
            }

            &.vs--open .vs__dropdown-toggle {
                background-color: #fff;
                border: 2px solid #000;//rgba(60, 60, 60, 0.26);
                border-radius: 6px 6px 0 0;
                border-bottom: none;
            }

            .vs__dropdown-menu {
                border-radius: 0 0 6px 6px;
                border: 2px solid #000;
                border-top: none;
            }

            .vs__fade-enter-active,
            .vs__fade-leave-active {
                transition: none;
            }

            .vs__open-indicator {
                transition: none;
            }

            .close {
                display: block;
                position: absolute;
                top: 50%;
                margin-top: -12px;
                right: 40px;
                width: 25px;
                height: 25px;
                background-color: transparent;
                border-radius: 15px;
                border: 1px solid #9299a2;
                cursor: pointer;

                &:before,
                &:after {
                    content: '';
                    display: block;
                    width: 14px;
                    height: 1px;
                    background-color: #9299a2;
                    position: absolute;
                    top: 11px;
                    left: 5px;
                }

                &:after {
                    -webkit-transform: rotate(45deg);
                    transform: rotate(45deg);
                }

                &:before {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg);
                }
            }

            .toggle {
                display: block;
                position: absolute;
                top: 50%;
                margin-top: -6px;
                right: 18px;
                width: 7px;
                height: 7px;
                border: 1px solid #9299a2;
                border-top: none;
                border-left: none;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
            }

            &.vs--open .toggle {
                -webkit-transform: rotate(225deg);
                transform: rotate(225deg);
            }
        }
    }

    .dropdown-group-title {
        text-align: center;
        font-weight: bold;
        padding-top: 5%;
    }

    .credit-profit-text {
        margin: 5% 5% 0;
        padding: 5% 5% 0;

        ul {
            list-style: none;
            font-size: 12px;
        }

        ul li:before {
            content: '✓  ';
            color: #1d643b;
        }

        .hollow-button {
            border-radius: 25px;
        }
    }
</style>
