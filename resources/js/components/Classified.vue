<template>
    <section id="classified">
        <div class="option-text">Оцените свой автомобиль</div>
        <div class="dropdown-group">
            <v-select class="select_wrap" :components="{OpenIndicator, Deselect}" placeholder="Марка" taggable
                      :options="brands" v-on:input="stepOne" v-model="selected_brand">
                <div class="spinner" v-show="mutableLoading">Загрузка...</div>
                <div slot="no-options">Нет совпадений</div>
            </v-select>
            <v-select :disabled="!step_one" class="select_wrap"
                      :components="{OpenIndicator, Deselect}" placeholder="Модель" v-on:input="stepTwo" taggable
                      :options="models" v-model="selected_model">
                <div class="spinner" v-show="mutableLoading">Загрузка...</div>
                <div slot="no-options">Нет совпадений</div>
            </v-select>
            <v-select :disabled="!step_two" class="select_wrap" :components="{OpenIndicator, Deselect}"
                      placeholder="Комплектация"
                      taggable :options="modifications" v-on:input="stepThree" v-model="selected_tech_param_id">
                <div class="spinner" v-show="mutableLoading">Загрузка...</div>
                <div slot="no-options">Нет совпадений</div>
            </v-select>
            <v-select :disabled="!step_three" class="select_wrap" :components="{OpenIndicator, Deselect}"
                      placeholder="Год выпуска"
                      v-on:input="stepFour"
                      taggable :options="years" v-model="selected_year">
                <div class="spinner" v-show="mutableLoading">Загрузка...</div>
                <div slot="no-options">Нет совпадений</div>
            </v-select>
            <v-select :disabled="!step_four" class="select_wrap" :components="{OpenIndicator, Deselect}"
                      placeholder="Пробег" taggable
                      :options="mileage" v-on:input="stepFive" v-model="selected_mileage">
                <div class="spinner" v-show="mutableLoading">Загрузка...</div>
                <div slot="no-options">Нет совпадений</div>
            </v-select>
        </div>

        <div id="prices_block" class="trigger-wrap" hidden>
            <div class="trigger-block">
                <div class="trigger-row">
                    <div class="trigger-half trigger-left trigger-text">Рыночная оценка</div>
                    <div class="trigger-half trigger-right trigger-price">{{formatPrice($data.tradeInEstimation)}}
                        руб.
                    </div>
                </div>

                <div class="trigger-row">
                    <div class="trigger-half trigger-left trigger-text">Оценка Bright Park</div>
                    <div class="trigger-half trigger-right trigger-price trigger-price-accent">
                        {{formatPrice($data.brightParkEstimation)}} руб.
                    </div>
                </div>
            </div>
        </div>

        <section id="count_button" class="buttons_other mt-20">
            <div class="item-buttons-other">
                <button v-on:click="showPrices" class="btn btn-primary">Рассчитать стоимость</button>
            </div>
        </section>

        <div id="warning" class="model-choose-text" style="color: darkred;" hidden>
            <p>Заполните все поля!</p>
        </div>

        <div id="special_offer_text" class="model-choose-text" hidden>
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
            host_url: window.location.protocol + '//' + window.location.host,
            step_one: false,
            step_two: false,
            step_three: false,
            step_four: false,
            models: [],
            model_objects: [],
            modifications: [],
            selected_model: null,
            selected_modification: null,
            selected_brand: null,
            selected_year: null,
            selected_mileage: null,
            selected_tech_param_id: null,
            estimation: null,
            tradeInEstimation: 0,
            brightParkEstimation: 0,
            mileage: [
                {label: 'До 10 000', value: 5000},
                {label: '10 000 - 30 000', value: 20000},
                {label: '30 000 - 50 000', value: 40000},
                {label: '50 000 - 75 000', value: 62000},
                {label: '75 000 - 100 000', value: 90000},
                {label: '100 000 - 150 000', value: 1250000},
                {label: '150 000 - 200 000', value: 1250000},
                {label: 'более 200 000', value: 1250000}
            ],
            years: []
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
                axios.get(this.host_url + '/api/get_brand_models', {
                    params: {
                        model_id: input.id
                    }
                })
                    .then((response) => {
                        this.models = response.data.models;
                    })
                    .catch((error) => {
                        console.log(error);
                    })
                    .finally(() => {
                    });

                if (this.selected_brand != null && this.selected_brand !== input.code) {
                    this.selected_model = null;
                    this.selected_modification = null;
                    this.selected_year = null;
                    this.selected_mileage = null;
                    this.selected_tech_param_id = null;
                    this.estimation = null;
                    this.tradeInEstimation = 0;
                    this.brightParkEstimation = 0;
                    this.step_two = false;
                    this.step_three = false;
                    this.step_four = false;
                }
                this.step_one = true;
                this.selected_brand = input;
                //this.$children[1].disabled = false;
            },

            stepTwo: function (input) {
                axios.get(this.host_url + '/api/get_complectations/' + this.selected_brand.code.toString() + '/' + input.code.toString(),
                    {})
                    .then((response) => {
                        this.modifications = response.data.modifications;
                    });

                if (this.selected_model != null) {
                    this.selected_tech_param_id = null;
                    this.selected_year = undefined;
                    this.selected_mileage = null;
                    this.estimation = null;
                    this.tradeInEstimation = 0;
                    this.brightParkEstimation = 0;
                    this.step_three = false;
                    this.step_four = false;
                }

                this.step_two = true;
                this.selected_model = input;
            },

            stepThree: function (input) {
                this.step_three = true;
                this.selected_tech_param_id = input;

                var currentYear = new Date().getFullYear(), years = [];

                var startYear = 1980;

                while (currentYear >= startYear) {
                    years.push({label: currentYear, value: currentYear});
                    currentYear--;
                }

                this.years = years;
            },

            stepFour: function (input) {
                this.step_four = true;
                this.selected_year = input;
                console.log(input);

                if (this.selected_mileage != null){
                    console.log(this.selected_mileage);
                    this.getEstimation();
                }
            },

            stepFive: function (input) {
                this.selected_mileage = input;
                this.getEstimation();
            },

            getEstimation: function () {
                let data = {
                    'km_age': this.selected_mileage.value,
                    'year': this.selected_year.value,
                    'tech_param_id': this.selected_tech_param_id.tech_param_id
                };

                axios(
                    {
                        method: 'post',
                        url: this.host_url + '/api/get_estimation',
                        data: data

                    })
                    .then((response) => {
                        this.estimation = response.data.estimation;
                        this.brightParkEstimation = this.estimation['prices']['tradein']['to'];
                        this.tradeInEstimation = this.estimation['prices']['tradein']['from'];
                    });
            },

            formatPrice(value) {
                let val = (value / 1).toFixed(2).replace('.', ',');
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            },

            showPrices: function () {
                if(this.estimation) {
                    let warning = document.getElementById('warning');
                    let prices_block = document.getElementById('prices_block');
                    let count_button = document.getElementById('count_button');
                    let special_offer_text = document.getElementById('special_offer_text');
                    warning.hidden = true;
                    prices_block.hidden = false;
                    count_button.hidden = true;
                    special_offer_text.hidden = false;
                } else {
                    let warning = document.getElementById('warning');
                    warning.hidden = false;
                }
            }
        }
    };
</script>

<style lang="scss">

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
                border: 2px solid #000; //rgba(60, 60, 60, 0.26);
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
