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
        z-index: 2;
        width: 100%;
        margin-top: -50px;
        position: fixed;
        -webkit-transition: margin ease-in 0.3s, opacity linear 0.4s;
        -moz-transition: margin ease-in 0.3s, opacity linear 0.4s;
        -o-transition: margin ease-in 0.3s, opacity linear 0.4s;
        transition: margin ease-in 0.3s, opacity linear 0.4s;

        opacity: 0;

        &.show {
            margin-top: 0;
            opacity: 1;
        }

        &.absolute {
            position: absolute;
        }

        .logo-wrap {
            padding: 10px 15px 5px;
            display: flex;
            justify-content: space-between;

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
