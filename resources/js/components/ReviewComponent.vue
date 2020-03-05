<template>
    <section class="block block_4 container">
        <div class="block-text">
            <h2><span class="c_orange">Эксперты</span> о {{model_name}}</h2>
        </div>
        <div class="opinions-wrap">
            <hooper class="opinions">
                <slide v-for="review in reviews" :key="reviews.key">
                    <blockquote :cite="review.url">
                        <p v-html="review.quote"></p>
                        <footer v-html="review.author"></footer>
                    </blockquote>
                </slide>
                <hooper-pagination slot="hooper-addons"></hooper-pagination>
            </hooper>
        </div>
        <div class="trigger-wrap">
            <p>98% клиентов оставили положительные отзывы о&nbsp;{{model_name}}</p>
        </div>
    </section>
</template>

<script>
    import {
        Hooper,
        Slide,
        Pagination as HooperPagination
    } from 'hooper';
    import 'hooper/dist/hooper.css';

    export default {
        name: 'App',
        props : ['reviews', 'model_name'],
        components: {
            Hooper,
            Slide,
            HooperPagination
        }
    }
</script>
