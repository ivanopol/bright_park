<template>
    <section id="classified">
        <div class="dropdown-group-title">Оцените свой автомобиль</div>
        <div class="container dropdown-group">
            <select class="dropdown">
                <option selected="selected">Марка</option>
            </select>
            <select>
                <option selected="selected">Модель</option>
            </select>
            <select>
                <option selected="selected">Год выпуска</option>
            </select>
            <select>
                <option selected="selected">Комплектация</option>
            </select>
            <select>
                <option selected="selected">Пробег</option>
            </select>
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
    export default {
        name: 'App',
        components: {
        }
    };
</script>

<style lang="scss" scoped >

</style>
