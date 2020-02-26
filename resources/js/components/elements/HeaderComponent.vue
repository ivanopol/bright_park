<template>
    <header :class="[ absolute ? 'absolute' : '' ]">
        <div class="logo-wrap" :class="theme">
            <div class="container logo-wrap-row">
                <div class="logo-bright-park">
                    <a :href="'/' + city">
                        <logo-bright-park :theme="theme"></logo-bright-park>
                    </a>
                </div>
                <div class="logo-lada">
                    <logo-lada :theme="theme"></logo-lada>
                </div>
            </div>
        </div>
        <div class="lada-line" v-if="line">
            <p id="model-active" v-if="car">{{car.reduction}}</p>
        </div>
    </header>
</template>

<script>
    import LogoBrightPark from '../icons/header/LogoBrightPark.vue';
    import LogoLada from '../icons/header/LogoLada.vue';

    export default {
        name: "App",
        props: {
            theme: {
                default: 'light',
                type: String
            },
            line: {
                default: true,
                type: Boolean
            },
            absolute: {
                default: false,
                type: Boolean
            },
            city: {
                type: String
            },
            car: {
                default: null,
                type: Object
            }
        },
        data: function () {
            return {

            };
        },
        components: {
            LogoBrightPark,
            LogoLada
        }
    }
</script>

<style scoped lang="scss">
    .fixed {
        position: fixed;
    }

    header {
        z-index: 1;
        width: 100%;
        position: relative;
        overflow: hidden;

        &.absolute {
         //   position: absolute;
        }

        .logo-wrap {
            .logo-wrap-row {
                padding: 15px 15px 5px;
                display: flex;
                justify-content: space-between;
            }

            .logo-bright-park {
                width: 49%;
                height: 25px;
                display: flex;
                justify-content: flex-start;
                align-items: center;

                a {
                    display: block;
                    float:left;
                    height: 100%;
                }
            }

            .logo-lada {
                width: 16%;
                height: 20px;
                display: flex;
                justify-content: flex-end;
                align-items: center;
            }

            @media only screen and (min-width: 1366px) {
                .logo-bright-park {
                    width: 25%;
                }
                .logo-lada {
                    width: 16%;
                }
            }

            @media only screen and (min-width: 580px) and  (max-width: 890px) {

            }

            @media only screen and (min-width: 891px) and  (max-width: 1365px) {

            }

            &.dark {
                padding-bottom: 10px;
                background-color: #000;
            }
            &.light {
                background-color: #fff;
            }
        }
        .lada-line {
            display: none;
            background: url(/build/images/lada_line.svg) no-repeat;
            width: 112%;
            height: 100%;
            min-height: 31px;
            background-size: 101%;
            margin-top: -2px;


            p {
                padding-top: 15px;
                padding-right: 55px;
                text-align: right;
                font-weight: bold;
            }
        }

        @media only screen and (max-width: 321px) {

            .logo-wrap-row {
                padding: 10px 10px 0 10px;
            }

            .lada-line {
                p {
                    padding: 13px 10px 0 0;
                    font-size: 0.9rem;
                }
            }
        }
    }
</style>
