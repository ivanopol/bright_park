<template>
    <hooper class="opinions">
        <slide v-for="review in reviews" :key="reviews.key">
            <blockquote :cite="review.url">
                <p v-html="review.quote"></p>
                <footer v-html="review.author"></footer>
            </blockquote>
        </slide>
        <hooper-pagination slot="hooper-addons"></hooper-pagination>
    </hooper>
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
        props : ['reviews'],
        components: {
            Hooper,
            Slide,
            HooperPagination
        }
    }
</script>
