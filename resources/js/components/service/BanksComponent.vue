<template>
    <div class="container_bg_gray">
        <section class="banks-logos container">
            <h2>Банки Партнеры</h2>
            <ul>
                <li>
                    <img src="/build/images/main/banks/ph-bank.png" alt="PH Банк">
                </li>
                <li>
                    <img src="/build/images/main/banks/vtb.png" alt="ВТБ">
                </li>
                <li>
                    <img src="/build/images/main/banks/setelem.png" alt="Сетелем">
                </li>
                <li>
                    <img src="/build/images/main/banks/sovkom-bank.png" alt="СовкомБанк">
                </li>
                <li>
                    <img src="/build/images/main/banks/uralsib.png" alt="УРАЛСИБ">
                </li>
                <li>
                    <img src="/build/images/main/banks/rusfinance.png" alt="РУСФИНАНС БАНК">
                </li>
                <li>
                    <img src="/build/images/main/banks/rosgosstrakh.png" alt="Росгосстрах Банк">
                </li>
                <li>
                    <img src="/build/images/main/banks/tinkoff.png" alt="Тинькофф">
                </li>
            </ul>
        </section>
    </div>
</template>

<script>
    export default {
        name: "Banks",
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
    .banks-logos {
        h2 {
            font-family: PragmaticaLightCBold, Helvetica, sans-serif;
            text-align: center;
            margin: 60px auto;
            padding: 0 20px;
            span {
                display: inline-block;
            }
        }

        ul {
            display: flex;
            flex-flow: wrap;
            justify-content: center;
            padding: 0 15px;
            li {
                width: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 25px;
                max-width: 195px;

                img {
                    width: 90%;
                    max-width: 140px;
                }
            }
        }

        @media only screen and (min-width: 580px) {
            & {
                padding-bottom: 30px;
            }

            h2 {
                margin: 80px auto;
            }

            ul {

                li {
                    width: 23%;
                    margin-bottom: 30px;
                }
            }
        }

        @media only screen and (min-width: 1366px) {
            ul {

                li {
                    width: 23%;
                    margin-bottom: 30px;
                    max-width: unset;
                    img {
                        width: 75%;
                        max-width: unset;
                    }
                }
            }
        }
    }
</style>
