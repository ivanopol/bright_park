<template>
    <hooper>
        <slide v-for="review in reviews" :key="reviews.key">
            <p v-html="review.quote"></p>
            <footer v-html="review.author"></footer>
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
