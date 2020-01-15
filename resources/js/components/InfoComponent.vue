<template>
    <section class="block block_1">
        <div class="block-text">
            <h2>{{ models[number].title }}</h2>
            <p>{{ models[number].text }}</p>
        </div>
        <div class="block-img">
            <img :src="'./img/blocks/block_01.png'" alt="">
        </div>
    </section>
</template>

<script>
    export default {
        name: 'App',
        props : ['number'],
        data: function () {
            return {
                models: [
                    {
                        title: '<span class="c_orange">Сочетая</span> самое лучшее 1',
                        text: '1 Компактный внешне и удивительно просторный внутри. Быстрый, но экономичный. Способный одинаково успешно ездить в любых погодных условиях и в городе, и на трассе, и по проселку. Красивый, комфортный, недорогой. Казалось бы, автомобиль не может сочетать в себе так много плюсов, но LADA Granta — это под силу.',
                        url: './img/blocks/block_01.png'
                    },
                    {
                        title: '<span class="c_orange">Сочетая</span> самое лучшее 2',
                        text: '2 Компактный внешне и удивительно просторный внутри. Быстрый, но экономичный. Способный одинаково успешно ездить в любых погодных условиях и в городе, и на трассе, и по проселку. Красивый, комфортный, недорогой. Казалось бы, автомобиль не может сочетать в себе так много плюсов, но LADA Granta — это под силу.',
                        url: './img/blocks/block_02.png'
                    }
                ]
            }
        }
    };
</script>

<style lang="scss">
    @import "./resources/sass/info.scss";
</style>
