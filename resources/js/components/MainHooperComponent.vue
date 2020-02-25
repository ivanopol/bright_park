<template>
    <section>
        <hooper class="main-screen-wrap" :wheelControl="false" >
            <slide>
                <div class="asset-container">
                    <img class="asset-image" src="build/images/main/main_granta_red.jpg" alt="Брайт Парк: Доплата 40 000 рублей при обмене на Lada Granta" />
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
                    <img class="asset-image" src="build/images/main/main_vesta_gray.jpg" alt="Брайт Парк: LADA Vesta выгода 10% по госпрограмме" />
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
                    <img class="asset-image" src="build/images/main/main_granta_gray.jpg" alt="Брайт Парк: LADA Granta 0% первоначальный взнос" />
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
                    <img class="asset-image" src="build/images/main/main_vesta_red.jpg" alt="Брайт Парк: Обмен на LADA Vesta выше рыночной цены" />
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

        /*margin-top: 41vh;*/
        position: absolute;
        bottom: 0;
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
       /* background-color: #000;*/
       /* top: -60px;*/
    }

    .main-screen-wrap ul {
        //will-change: scroll-position;
    }


    .main-screen-wrap ul li {
        position: relative;
        display: flex;
        justify-content: center;
    }

    .main-screen {
        margin: -60px 0 40px;
/*
        width: 100%;
        height: 100vh;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        overflow: hidden;
*/

        .asset-container {
            /*background-color: #000;*/
            height: 100%;
        }
        .asset-image {
            object-fit: cover;
            margin: -75px 0 0 0;
            width: 100vw;
            //position: absolute;
            //bottom: 0;
        }

        .product-content {
            position: absolute;
            top: 5%;
            color: white;
            text-align: center;
            height: 78%;

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

            @media only screen and (max-width: 321px) {
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
    }
</style>
