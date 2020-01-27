<template>
    <header class="fixed">
        <div class="logo-wrap">
            <div class="logo-bright-park">
                <a href="/home">
                    <logo-bright-park :theme="theme"></logo-bright-park>
                </a>
            </div>
            <div class="logo-lada">
                <logo-lada :theme="theme"></logo-lada>
            </div>
        </div>
        <div class="lada-line" v-if="line">
            <p id="model-active"></p>
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
                default: 'dark',
                type: String,
            },
            line: {
                default: true,
                type: Boolean
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
        z-index: 1000;

        .logo-wrap {
            padding: 15px 15px 0 15px;
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
        }
        .lada-line {
            background: url(/build/images/lada_line.svg) no-repeat;
            width: 100%;
            height: 100%;
            background-size: 101%;

            p {
                padding-top: 20px;
                padding-right: 15px;
                text-align: right;
                font-weight: bold;
            }
        }
    }
</style>
