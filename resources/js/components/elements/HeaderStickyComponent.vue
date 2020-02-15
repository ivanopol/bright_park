<template>
    <header  @scroll="handleScroll" :class="{show : scrolled}">
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
    </header>
</template>

<script>
    import LogoBrightPark from '../icons/header/LogoBrightParkMobile.vue';
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
            }
        },
        data: function () {
            return {
                scrolled: false
            };
        },
        methods: {
            handleScroll () {
                this.scrolled = window.scrollY > 78;
            }
        },
        components: {
            LogoBrightPark,
            LogoLada
        },
        created () {
            window.addEventListener('scroll', this.handleScroll);
        },
        destroyed () {
            window.removeEventListener('scroll', this.handleScroll);
        }
    }
</script>

<style scoped lang="scss">
    header {
        z-index: 20;
        width: 100%;
        margin-top: -110px;
        position: fixed;
        -webkit-transition: all ease-in 0.2s;
        -moz-transition: all ease-in 0.2s;
        -o-transition: all ease-in 0.2s;
        transition: all ease-in 0.2s;


        height: 100px;
        background-color: #fff;
        display: flex;
        align-items: flex-end;

        &.show {
            margin-top: -60px;
            opacity: 1;
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.15);

            .logo-wrap {
                opacity: 1;
            }
        }

        &.absolute {
            position: absolute;
        }

        .logo-wrap {
            padding: 10px 15px 5px;
            display: flex;
            justify-content: space-between;
            opacity: 0;
            -webkit-transition: opacity ease-in 0.1s;
            -moz-transition: opacity ease-in 0.1s;
            -o-transition: opacity ease-in 0.1s;
            transition: opacity ease-in 0.1s;

            .logo-bright-park {
                width: 35%;
                height: 25px;
            }

            .logo-lada {
                width: 13%;
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
