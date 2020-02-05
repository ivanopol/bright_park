<template>
    <section>
        <hooper class="main-screen-wrap">
            <slide>
                <div class="asset-container">
                    <img class="asset-image" src="build/images/main_bg.jpg" alt="" />
                </div>
                <div class="product-content">
                    <p class="title-model">LADA Vesta</p>
                    <p class="title-tagline">Доплата при обмене <span>40 000 руб.</span></p>
                    <div class="item-buttons">
                        <a href="/model/granta/sedan" class="btn btn-primary">Подробнее о модели</a>
                        <a href="" class="btn btn-secondary">Условия акции</a>
                    </div>
                </div>
            </slide>
            <slide>
                <div class="asset-container">
                    <img class="asset-image" src="build/images/main_bg.jpg" alt="" />
                </div>
                <div class="product-content">
                    <p class="title-model">LADA Vesta</p>
                    <p class="title-tagline">Доплата при обмене <span>40 000 руб.</span></p>
                    <div class="item-buttons">
                        <a href="/model/granta/sedan" class="btn btn-primary">Подробнее о модели</a>
                        <a href="" class="btn btn-secondary">Условия акции</a>
                    </div>
                </div>
            </slide>
            <slide>
                <div class="asset-container">
                    <img class="asset-image" src="build/images/main_bg.jpg" alt="" />
                </div>
                <div class="product-content">
                    <p class="title-model">LADA Vesta</p>
                    <p class="title-tagline">Доплата при обмене <span>40 000 руб.</span></p>
                    <div class="item-buttons">
                        <a href="/model/granta/sedan" class="btn btn-primary">Подробнее о модели</a>
                        <a href="" class="btn btn-secondary">Условия акции</a>
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
        }
    };
</script>


<style lang="scss" scoped>
    .item-buttons {
        margin-top: 41vh;
        &>a {
            margin-bottom: 15px;
        }
        .btn {
            width: 85vw;
            border-radius: 50px;
            padding: 14px 15px 10px;

            &.btn-primary {
                border: 2px solid #fff;
                color: #606060;
                background-color: #fff;
            }

            &.btn-secondary {
                border: 2px solid #fff;
                color: #fff;
                background-color: transparent;
            }
        }
    }
    .main-screen-wrap {
        background-color: #000;
    }

    .main-screen-wrap ul li {
        position: relative;
        display: flex;
        justify-content: center;
    }

    .main-screen {
        width: 100%;
        height: 100vh;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        overflow: hidden;

        .asset-container {
            background-color: #000;
            height: 100vh;
        }
        .asset-image {
            object-fit: cover;
            margin: 0;
            width: 100vw;
            //position: absolute;
            //bottom: 0;
        }

        .product-content {
            position: absolute;
            top: 15vh;
            color: white;
            text-align: center;

            .title-model {
                font-size: 213%;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .title-tagline {
                font-size: 150%;

                span {
                    display: block;
                    font-size: 117%;
                    margin-top: 10px;
                }
            }
        }
    }

    @media only screen and (max-width: 321px) {

    }
</style>
