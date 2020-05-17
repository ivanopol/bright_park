<template>
    <section class="car-services container">
        <h2><span class="c_orange">Наши</span> услуги</h2>

    </section>
</template>

<script>
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
