<template>
    <header :class="[ absolute ? 'absolute' : '' ]">
        <div class="logo-wrap" :class="theme">
            <div class="logo-bright-park">
                <a :href="'/' + city">
                    <logo-bright-park :theme="theme"></logo-bright-park>
                </a>
            </div>
            <div class="logo-lada">
                <logo-lada :theme="theme"></logo-lada>
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

        &.absolute {
            position: absolute;
        }

        .logo-wrap {
            padding: 15px 15px 5px;
            display: flex;
            justify-content: space-between;

            .logo-bright-park {
                width: 49%;
                height: 25px;
            }

            .logo-lada {
                width: 16%;
                height: 25px;
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
            background: url(/build/images/lada_line.svg) no-repeat;
            width: 100%;
            height: 100%;
            min-height: 31px;
            background-size: 101%;

            p {
                padding-top: 15px;
                padding-right: 15px;
                text-align: right;
                font-weight: bold;
            }
        }
    }
</style>
