<template>
    <hooper class="main-screen-wrap">
        <slide>
            <div class="asset-container">
                <img class="asset-image" src="build/images/main_bg.jpg" alt="" />
            </div>
            <div class="product-content">
                <p class="title-model">LADA Vesta</p>
                <p class="title-tagline">Доплата при обмене <span>40 000 руб.</span></p>
            </div>
        </slide>
        <slide>
            <div class="asset-container">
                <img class="asset-image" src="build/images/main_bg.jpg" alt="" />
            </div>
            <div class="product-content">
                <p class="title-model">LADA Vesta</p>
                <p class="title-tagline">Доплата при обмене <span>40 000 руб.</span></p>
            </div>
        </slide>
        <slide>
            <div class="asset-container">
                <img class="asset-image" src="build/images/main_bg.jpg" alt="" />
            </div>
            <div class="product-content">
                <p class="title-model">LADA Vesta</p>
                <p class="title-tagline">Доплата при обмене <span>40 000 руб.</span></p>
            </div>
        </slide>
        <hooper-pagination slot="hooper-addons"></hooper-pagination>
    </hooper>
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
    .main-screen-wrap .hooper-pagination {
        top: 65vh;

        .hooper-indicator:hover, .hooper-indicator.is-active {
            background-color: #fff;
            border-color: #fff;
        }

        .hooper-indicator {
            width: 16px;
            height: 16px;
            border: 2px solid #fff;
            background-color: #ccc;
            border-radius: 8px;
            margin: 0 4px;
            -webkit-transition: all ease-out 0.3s;
            -moz-transition: all ease-out 0.3s;
            -o-transition: all ease-out 0.3s;
            transition: all ease-out 0.3s;
        }
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
