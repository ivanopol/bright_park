<template>
    <section>
        <div class="main-screen-wrap" >
            <ul>
                <li>
                    <div class="asset-container">
                        <picture>
                            <source :srcset="offer.img_mobile + ', ' + offer.img_mobile + ' 2x'" media="(max-width: 580px)">
                            <source :srcset="offer.img_tablet + ', ' + offer.img_tablet + ' 2x'" media="(max-width: 1365px)">
                            <source :srcset="offer.img_desktop + ', ' + offer.img_desktop + ' 2x'" media="(min-width: 1366px)">
                            <img class="asset-image" :src="offer.img_mobile" :srcset="offer.img_mobile + ', ' + offer.img_mobile + ' 2x'" :alt="offer.description" />
                        </picture>
                    </div>
                    <div class="product-content">
                        <p class="title-tagline bold" v-html="offer.description"></p>
                        <div class="item-buttons">
                            <vue-countdown :time="5*12*60*60*1000" >
                                <template slot-scope="props">
                                    <div class="countdown">
                                        <div class="countdown-title">
                                            <span>До конца акции</span>
                                        </div>
                                        <div class="countdown-block">{{ props.days }} : {{  props.hours }} : {{  props.minutes }} : {{  props.seconds }}</div>
                                        <div class="countdown-sign">
                                            <span>дня</span>
                                            <span>часов</span>
                                            <span>минут</span>
                                            <span>секунд</span>
                                        </div>
                                    </div>
                                </template>
                            </vue-countdown>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</template>

<script>
    import VueCountdown from '@chenfengyuan/vue-countdown';


    export default {
        name: 'App',
        components: {
            VueCountdown
        },
        props: {
            city: {

            },
            offer: {
                type: Object
            }
        },
        data: function () {
            return {};
        },
        methods: {
        }
    };
</script>


<style lang="scss" >

    .countdown {
        font-family: PragmaticaLightCBold, Helvetica, sans-serif;
        width: 256px;
        margin: 0 auto 15px;
        &-title {
            width: 100%;
            font-size: 20px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        &-block {
            width: 100%;
            border: 4px solid #fff;
            border-radius: 30px;
            font-size: 30px;
            padding: 10px 20px 7px;
            display: inline-block;
            margin-bottom: 10px;

        }

        &-sign {
            width: 100%;
            font-size: 14px;
            display: flex;
            justify-content: space-around;
            & > span {
                display: block;
                width: 25%;
            }
        }

        @media only screen and (min-width: 1366px) {
            & {
                width: 290px;
                &-title {
                    font-size: 24px;
                }

                &-block {
                    font-size: 36px;
                }

                &-sign {
                    font-size: 16px;
                }
            }
        }
    }

    .item-buttons {
        position: absolute;
        bottom: 0;
        width: 85.5vw;
        &>a {
            margin-bottom: 15px;
        }
        .btn {
            width: 100%;
            border-radius: 50px;
            padding: 14px 15px 10px;

            @media only screen and (max-width: 340px) {
                padding: 11px 15px 7px;
            }

            &.btn-primary {
                border: 2px solid #FF8351;
                color: #fff;
                background-color: #FF8351;
            }

            &.btn-secondary {
                border: 2px solid #fff;
                color: #fff;
                background-color: transparent;
            }
        }
    }

    .main-screen-wrap.hooper {
        top: 0px;
    }

    .main-screen-wrap ul li {
        position: relative;
    }

    .main-screen {
        margin: -60px 0 0;

        .asset-container {
            height: 100%;
        }
        .asset-image {
            object-fit: cover;
            margin: -75px 0 0 0;
            width: 100%;
        }

        @media only screen and (min-width: 900px) {
            & {
                margin: -80px auto 0;
                max-width: 1980px;
                max-height: 800px;
                overflow: hidden;
            }
        }

        .product-content {
            position: absolute;
            top: 5%;
            color: white;
            text-align: center;
            height: 78%;
            width: 100vw;
            display: flex;
            justify-content: center;

            .title-model {
                font-family: PragmaticaLightCBold, Helvetica, sans-serif;
                font-size: 213%;
                //font-weight: bold;
                margin-bottom: 10px;

            }

            .title-tagline {
                font-size: 26px;
                //font-weight: bold;
                width: 78vw;
                margin: 30px auto 0;
                line-height: 1.2;
/*                -webkit-transition: all ease-out 0.5s;
                -moz-transition: all ease-out 0.5s;
                -o-transition: all ease-out 0.5s;
                transition: all ease-out 0.5s;*/


                &.bold {
                    font-family: PragmaticaLightCBold, Helvetica, sans-serif;
                    font-size: 26px;
                }

                .highlight {
                    display: block;
                    font-size: 117%;
                }
            }
        }
        @media only screen and (max-width: 321px) {
            .product-content {
                .title-tagline {
                    margin: 40px auto 0;
                    line-height: 1.1;

                    &.bold {
                        font-size: 143%;
                        font-weight: bold;
                    }
                }
            }
        }

        @media only screen and (min-width: 1366px) {
            .main-screen-wrap .hooper-pagination {
                bottom: 5%;
            }

            ul li:nth-child(even) {
                .product-content {
                    position: absolute;
                    top: 0;
                    left: 0;
                    color: white;
                    text-align: center;
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-start;
                    width: 100%;
                    align-items: flex-start;
                    max-width: 1200px;
                    right: 0;
                    margin: 8% auto 0;
                    padding-left: 0;

                    .title-tagline {
                        margin: 0 0 30px;
                        width: 41%;

                        &.bold {
                            font-size: 46px;
                            font-weight: normal;
                            text-align: left;

                            .highlight {
                                font-weight: bold;
                            }
                        }
                    }

                    .item-buttons {
                        position: relative;
                        width: 26%;
                        display: flex;
                        justify-content: flex-start;
                        flex-direction: column;

                        .btn {
                            width: auto;
                            display: block;
                            margin: 0 0 15px 0;
                        }
                    }
                }
            }

            ul li:nth-child(odd) {
                .product-content {
                    position: absolute;
                    top: 0;
                    left: 0;
                    color: white;
                    text-align: center;
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-start;
                    width: 100%;
                    align-items: flex-end;
                    max-width: 1200px;
                    right: 0;
                    margin: 8% auto 0;
                    padding-right: 20px;

                    .title-tagline {
                        margin: 0 0 30px;
                        width: 41%;

                        &.bold {
                            font-size: 46px;
                            font-weight: normal;
                            text-align: right;

                            .highlight {
                                font-weight: bold;
                            }
                        }
                    }

                    .item-buttons {
                        position: relative;
                        width: 26%;
                        display: flex;
                        justify-content: flex-start;
                        flex-direction: column;

                        .btn {
                            width: auto;
                            display: block;
                            margin: 0 0 15px 0;
                        }
                    }
                }
            }
        }

        @media only screen and (min-width: 1366px) and (max-width: 1979px) {
            ul li:nth-child(even),
            ul li:nth-child(odd) {
                .product-content {
                    padding-right: 50px;

                    .title-tagline {
                        margin: 0 0 30px;
                        width: 35%;

                        &.bold {
                            font-size: 36px;
                        }
                    }

                    .item-buttons {
                        width: 22%;
                    }
                }
            }
        }

        @media only screen and (min-width: 580px) and  (max-width: 1365px) {
            .main-screen-wrap .hooper-pagination {
                bottom: 5%;
            }

            ul li {
                .product-content {
                    position: absolute;
                    top: 0;
                    left: 0;
                    color: white;
                    text-align: center;
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    width: 100%;
                    align-items: flex-end;
                    padding-right: 10%;

                    .title-tagline {
                        margin: 30px 0 30px;
                        width: 40%;

                        &.bold {
                            font-size: 30px;
                            font-weight: normal;
                        }
                    }

                    .item-buttons {
                        position: relative;
                        width: 40%;

                        .btn {
                            width: 55%;
                            display: block;
                            margin: 10px auto;
                        }
                    }
                }
            }
        }

        @media only screen and (min-width: 580px) and  (max-width: 1000px) {
            ul li {
                .product-content {
                    padding-right: 0;
                }
                .title-tagline {
                    width: 50%!important;
                    &.bold {
                        font-size: 24px !important;
                    }
                }

                .item-buttons {
                    width: 50%!important;

                    a {
                        font-size: 12px;
                        min-width: 185px!important;
                    }
                }
            }
        }
    }
</style>

