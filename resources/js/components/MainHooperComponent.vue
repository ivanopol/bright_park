<template>
    <section>
        <hooper class="main-screen-wrap" :autoPlay="true" :playSpeed="6000" :wheelControl="false" :transition="600" :infiniteScroll="true">
             <slide class="odd">
                <div class="asset-container">
                    <picture>
                        <source srcset="/build/images/main/mobile/main_granta_red.jpg, /build/images/main/mobile/main_granta_red.jpg 2x" media="(max-width: 580px)">
                        <source srcset="/build/images/main/tablet/main_granta_red.jpg, /build/images/main/tablet/main_granta_red.jpg 2x" media="(max-width: 1365px)">
                        <source srcset="/build/images/main/desktop/main_granta_red.jpg, /build/images/main/desktop/main_granta_red.jpg 2x" media="(min-width: 1366px)">
                        <img class="asset-image" src="/build/images/main/mobile/main_granta_red.jpg" srcset="/build/images/main/mobile/main_granta_red.jpg, /build/images/main/mobile/main_granta_red.jpg 2x" alt="Брайт Парк: Доплата 40 000 рублей при обмене на Lada Granta" />
                    </picture>
                </div>
                <div class="product-content">
                    <p class="title-tagline bold">Выгода 10%<br> по госпрограмме на <br>LADA в сентябре</p>
                    <div class="item-buttons">
                        <a :href="city + '/granta/sedan'" id="main__slider__benefit-40000-details" class="btn btn-primary event">Подробнее о модели</a>
                        <a :href="city + '/stocks/doplata-40-000-rublej-pri-obmene-na-lada-granta'" id="main__slider__benefit-40000-action" class="btn btn-secondary event">Условия акции</a>
                    </div>
                </div>
            </slide>
            <slide class="even">
                <div class="asset-container">
                    <picture>
                        <source srcset="/build/images/main/mobile/main_vesta_gray.jpg, /build/images/main/mobile/main_vesta_gray.jpg 2x" media="(max-width: 580px)">
                        <source srcset="/build/images/main/tablet/main_vesta_gray.jpg, /build/images/main/tablet/main_vesta_gray.jpg 2x" media="(max-width: 1365px)">
                        <source srcset="/build/images/main/desktop/main_vesta_gray.jpg, /build/images/main/desktop/main_vesta_gray.jpg 2x" media="(min-width: 1366px)">
                        <img class="asset-image" src="/build/images/main/mobile/main_vesta_gray.jpg"
                         srcset="/build/images/main/mobile/main_vesta_gray.jpg, /build/images/main/mobile/main_vesta_gray.jpg 2x" alt="Брайт Парк: LADA Vesta по обновленной госпрограмме" />
                    </picture>
                </div>
                <div class="product-content">
                    <p class="title-tagline bold">Кредит от 3.5%<br> на LADA</p>
                    <div class="item-buttons">
                        <a :href="city + '/vesta/sedan'" id="main__slider__lada-vesta-benefit-10-details" class="btn btn-primary event">Подробнее о модели</a>
                        <a :href="city + '/stocks/lada-vesta-vygoda-10-po-gosprogramme'" id="main__slider__lada-vesta-benefit-10-action" class="btn btn-secondary event">Условия акции</a>
                    </div>
                </div>
            </slide>
            <slide class="odd">
                <div class="asset-container">
                    <picture>
                        <source srcset="/build/images/main/mobile/main_granta_gray.jpg, /build/images/main/mobile/main_granta_gray.jpg 2x" media="(max-width: 580px)">
                        <source srcset="/build/images/main/tablet/main_granta_gray.jpg, /build/images/main/tablet/main_granta_gray.jpg 2x" media="(max-width: 1365px)">
                        <source srcset="/build/images/main/desktop/main_granta_gray.jpg, /build/images/main/desktop/main_granta_gray.jpg 2x" media="(min-width: 1366px)">
                        <img class="asset-image" src="/build/images/main/mobile/main_granta_gray.jpg"
                            srcset="/build/images/main/mobile/main_granta_gray.jpg, /build/images/main/mobile/main_granta_gray.jpg 2x" alt="Брайт Парк: LADA Granta 0% первоначальный взнос" />
                    </picture>
                </div>
                <div class="product-content">
                    <p class="title-tagline bold">0% первоначальный взнос при покупке LADA</p>
                    <div class="item-buttons">
                        <a :href="city + '/granta/sedan'" id="main__slider__lada-granta-0-firstpay-details" class="btn btn-primary event">Подробнее о модели</a>
                        <a :href="city + '/stocks/lada-granta-0-pervonachalnyj-vznos'" id="main__slider__lada-granta-0-firstpay-action" class="btn btn-secondary event">Условия акции</a>
                    </div>
                </div>
            </slide>
            <slide class="even">
                <div class="asset-container">
                    <picture>
                        <source srcset="/build/images/main/mobile/main_vesta_red.jpg, /build/images/main/mobile/main_vesta_red.jpg 2x" media="(max-width: 580px)">
                        <source srcset="/build/images/main/tablet/main_vesta_red.jpg, /build/images/main/tablet/main_vesta_red.jpg 2x" media="(max-width: 1365px)">
                        <source srcset="/build/images/main/desktop/main_vesta_red.jpg, /build/images/main/desktop/main_vesta_red.jpg 2x" media="(min-width: 1366px)">
                        <img class="asset-image" src="/build/images/main/mobile/main_vesta_red.jpg"
                             srcset="/build/images/main/mobile/main_vesta_red.jpg, /build/images/main/mobile/main_vesta_red.jpg 2x" alt="Брайт Парк: Обмен на LADA Vesta выше рыночной цены" />
                    </picture>
                </div>
                <div class="product-content">
                    <p class="title-tagline bold">40 000 рублей<br> выгода при обмене авто на LADA</p>
                    <div class="item-buttons">
                        <a :href="city + '/granta/sedan'" id="main__slider__exchange-lada-vesta-details" class="btn btn-primary event">Подробнее о модели</a>
                        <a :href="city + '/stocks/obmen-na-lada-vesta-vyshe-rynochnoj-ceny'" id="main__slider__exchange-lada-vesta-action" class="btn btn-secondary event">Условия акции</a>
                    </div>
                </div>
            </slide>
            <hooper-pagination slot="hooper-addons"></hooper-pagination>
        </hooper>
    </section>
</template>

<script>
    import { Hooper, Slide, Pagination as HooperPagination } from 'hooper';
    import 'hooper/dist/hooper.css';

    export default {
        name: 'App',
        components: {
            Hooper,
            Slide,
            HooperPagination
        },
        props: ['city']
    };
</script>


<style lang="scss" >
    .title-uppercase {
        font-family: PragmaticaLightCBold, Helvetica, sans-serif;
        text-transform: uppercase;
        font-weight: bold;
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
            width: 100%;
            display: flex;
            justify-content: center;

            &.product-content-left {

            }

            .title-model {
                font-family: PragmaticaLightCBold, Helvetica, sans-serif;
                font-size: 213%;
                //font-weight: bold;
                margin-bottom: 10px;

            }

            .title-tagline {
                font-size: 26px;
                //font-weight: bold;
                width: 80vw;
                max-width: 100%;
                margin: 30px auto 0;
                line-height: 1.2;
/*                -webkit-transition: all ease-out 0.5s;
                -moz-transition: all ease-out 0.5s;
                -o-transition: all ease-out 0.5s;
                transition: all ease-out 0.5s;*/

                .text-low {
                    font-size: 70%;
                }


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

            ul li.even {
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

            ul li.odd {
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
            ul li.even,
            ul li.odd {
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

                    &.product-content-left {
                        align-items: flex-start;
                        .title-tagline {
                            width: 30%;
                        }
                    }

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
                    width: 48%!important;
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

