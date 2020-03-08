<template>
    <section>
        <hooper class="main-screen-wrap" :wheelControl="false" >
            <slide>
                <div class="asset-container">
                    <picture>
                        <source srcset="build/images/main/mobile/main_granta_red.jpg, build/images/main/mobile/main_granta_red.jpg 2x" media="(max-width: 580px)">
                        <source srcset="build/images/main/tablet/main_granta_red.jpg, build/images/main/tablet/main_granta_red.jpg 2x" media="(max-width: 1365px)">
                        <source srcset="build/images/main/desktop/main_granta_red.jpg, build/images/main/desktop/main_granta_red.jpg 2x" media="(min-width: 1366px)">
                        <img class="asset-image" src="build/images/main/mobile/main_granta_red.jpg" srcset="build/images/main/mobile/main_granta_red.jpg, build/images/main/mobile/main_granta_red.jpg 2x" alt="Брайт Парк: Доплата 40 000 рублей при обмене на Lada Granta" />
                    </picture>
                </div>
                <div class="product-content">
                    <p class="title-tagline bold">Доплата<br> 40 000 рублей<br> при обмене на <span class="highlight">LADA Granta</span></p>
                    <div class="item-buttons">
                        <a :href="city + '/granta/sedan'" class="btn btn-primary">Подробнее о модели</a>
                        <a :href="city + '/granta/sedan/model_details'" class="btn btn-secondary">Условия акции</a>
                    </div>
                </div>
            </slide>
            <slide>
                <div class="asset-container">
                    <picture>
                        <source srcset="build/images/main/mobile/main_vesta_gray.jpg, build/images/main/mobile/main_vesta_gray.jpg 2x" media="(max-width: 580px)">
                        <source srcset="build/images/main/tablet/main_vesta_gray.jpg, build/images/main/tablet/main_vesta_gray.jpg 2x" media="(max-width: 1365px)">
                        <source srcset="build/images/main/desktop/main_vesta_gray.jpg, build/images/main/desktop/main_vesta_gray.jpg 2x" media="(min-width: 1366px)">
                        <img class="asset-image" src="build/images/main/mobile/main_vesta_gray.jpg"
                         srcset="build/images/main/mobile/main_vesta_gray.jpg, build/images/main/mobile/main_vesta_gray.jpg 2x" alt="Брайт Парк: LADA Vesta выгода 10% по госпрограмме" />
                    </picture>
                </div>
                <div class="product-content">
                    <p class="title-tagline bold">LADA Vesta<br> выгода 10%<br> по госпрограмме</p>
                    <div class="item-buttons">
                        <a :href="city + '/vesta/sedan'" class="btn btn-primary">Подробнее о модели</a>
                        <a :href="city + '/vesta/sedan/model_details'" class="btn btn-secondary">Условия акции</a>
                    </div>
                </div>
            </slide>
            <slide>
                <div class="asset-container">
                    <picture>
                        <source srcset="build/images/main/mobile/main_granta_gray.jpg, build/images/main/mobile/main_granta_gray.jpg 2x" media="(max-width: 580px)">
                        <source srcset="build/images/main/tablet/main_granta_gray.jpg, build/images/main/tablet/main_granta_gray.jpg 2x" media="(max-width: 1365px)">
                        <source srcset="build/images/main/desktop/main_granta_gray.jpg, build/images/main/desktop/main_granta_gray.jpg 2x" media="(min-width: 1366px)">
                        <img class="asset-image" src="build/images/main/mobile/main_granta_gray.jpg"
                            srcset="build/images/main/mobile/main_granta_gray.jpg, build/images/main/mobile/main_granta_gray.jpg 2x" alt="Брайт Парк: LADA Granta 0% первоначальный взнос" />
                    </picture>
                </div>
                <div class="product-content">
                    <p class="title-tagline bold">LADA Granta<br>0% первоначальный взнос</p>
                    <div class="item-buttons">
                        <a :href="city + '/granta/sedan'" class="btn btn-primary">Подробнее о модели</a>
                        <a :href="city + '/granta/sedan/model_details'" class="btn btn-secondary">Условия акции</a>
                    </div>
                </div>
            </slide>
            <slide>
                <div class="asset-container">
                    <picture>
                        <source srcset="build/images/main/mobile/main_vesta_red.jpg, build/images/main/mobile/main_vesta_red.jpg 2x" media="(max-width: 580px)">
                        <source srcset="build/images/main/tablet/main_vesta_red.jpg, build/images/main/tablet/main_vesta_red.jpg 2x" media="(max-width: 1365px)">
                        <source srcset="build/images/main/desktop/main_vesta_red.jpg, build/images/main/desktop/main_vesta_red.jpg 2x" media="(min-width: 1366px)">
                        <img class="asset-image" src="build/images/main/mobile/main_vesta_red.jpg"
                             srcset="build/images/main/mobile/main_vesta_red.jpg, build/images/main/mobile/main_vesta_red.jpg 2x" alt="Брайт Парк: Обмен на LADA Vesta выше рыночной цены" />
                    </picture>
                </div>
                <div class="product-content">
                    <p class="title-tagline bold">Обмен на LADA Vesta выше рыночной<br> цены</p>
                    <div class="item-buttons">
                        <a :href="city + '/granta/sedan'" class="btn btn-primary">Подробнее о модели</a>
                        <a :href="city + '/granta/sedan/model_details'" class="btn btn-secondary">Условия акции</a>
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

    .main-screen-wrap {

    }

    .main-screen-wrap.hooper {
        top: 0px;
    }

    .main-screen-wrap ul li {
        position: relative;
    }

    .main-screen {
        margin: -60px 0 40px;

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
                    display: -webkit-box;
                    display: flex;
                    flex-direction: column;
                    justify-content: end;
                    width: 100%;
                    -webkit-box-align: end;
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
                        justify-content: flex-end;
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
                    display: -webkit-box;
                    display: flex;
                    flex-direction: column;
                    justify-content: end;
                    width: 100%;
                    -webkit-box-align: end;
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
                        justify-content: flex-end;
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
                    display: -webkit-box;
                    display: flex;
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    flex-direction: column;
                    -webkit-box-pack: justify;
                    justify-content: center;
                    width: 100%;
                    -webkit-box-align: end;
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

