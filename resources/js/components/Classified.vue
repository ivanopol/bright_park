<template>
    <section id="classified">
        <div class="option-text">Оцените свой автомобиль</div>
        <div class="dropdown-group">
            <v-select placeholder="Марка" taggable :options="[]">
 <!--               <slot name="spinner">
                    <div class="spinner" v-show="mutableLoading">Загрузка...</div>
                </slot>-->
                <slot name="no-options">Извините, совпадений не найдено</slot>
            </v-select>
<!--            <div class="select_wrap">
                <select class="dropdown">
                    <option selected="selected">Марка</option>
                </select>
            </div>
            <div class="select_wrap">
                <select>
                    <option selected="selected">Модель</option>
                </select>
            </div>
            <div class="select_wrap">
                <select>
                    <option selected="selected">Год выпуска</option>
                </select>
            </div>
            <div class="select_wrap">
                <select>
                    <option selected="selected">Комплектация</option>
                </select>
            </div>
            <div class="select_wrap">
                <select>
                    <option selected="selected">Пробег</option>
                </select>
            </div>-->
        </div>

        <div class="trigger-wrap">
            <p class="trigger-wrap-text">
                Рыночная оценка <span class="model-count-text">666 руб</span> <br/>
                Оценка Bright Park <span class="model-count-text">666 руб</span>
            </p>
        </div>

        <div class="model-choose-text">
            <p>Предложение действует до 16 января</p>
        </div>

        <div class="button-wrapper-row">
            <button class="hollow-button-halfsize hollow-button-recolored">
                <a href='/trade_in_cash'>Наличный расчет</a>
            </button>
            <button class="hollow-button-halfsize hollow-button-recolored">
                <a href="/trade_in_credit">В кредит</a>
            </button>
        </div>
    </section>
</template>

<script>
    import vSelect from 'vue-select';
    import 'vue-select/dist/vue-select.css';

    export default {
        name: 'App',
        components: {
            vSelect
        }
    };
</script>

<style lang="scss" scoped >

    .dropdown-group {
        margin: 0 28px;
        .select_wrap {
            position: relative;
            margin-bottom: 18px;

            &:after {
                content: '';
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
        }
        select {
            width: 100%;
            background-color: #eef2f7;
            border: none;
            border-radius: 6px;
            display: inline-block;
            font: inherit;
            line-height: 1.5em;
            text-align: center;
            box-sizing: border-box;
            height: 42px;
            padding: 0 17px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            color: #9299a2;
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
