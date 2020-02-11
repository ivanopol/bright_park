<template>
    <div>
        <section id="panel" >
            <ul :class="theme">
                <li @click="openMenu">
                    <icon-menu ></icon-menu>
                    <span>Меню</span>
                </li>
                <li>
                    <a href="tel:+73422338231">
                    <icon-call></icon-call>
                    <span>Звонок</span>
                    </a>
                </li>
                <li>
                    <icon-route></icon-route>
                    <span>Маршрут</span>
                </li>
                <li>
                    <icon-chat></icon-chat>
                    <span>Чат</span>
                </li>
            </ul>
        </section>
        <section id="menu" :class="{ active: open }">
            <ul>
                <li>Пермь</li>
                <li>Москва</li>
                <li>Магнитогорск</li>
                <li>Ростов-на-Дону</li>
                <li>Екатеринбург</li>
                <li>Волгоград</li>
            </ul>
            <ul>
                <li>Granta</li>
                <li>Vesta</li>
                <li>XRAY</li>
                <li>4x4</li>
                <li>Largus</li>
            </ul>
        </section>
    </div>
</template>

<script>
    import IconMenu from '../icons/tab_bar/IconMenu.vue';
    import IconCall from '../icons/tab_bar/IconCall.vue';
    import IconRoute from '../icons/tab_bar/IconRoute.vue';
    import IconChat from '../icons/tab_bar/IconChat.vue';

    export default {
        props: {
            theme: {
                default: 'light',
                type: String
            }
        },
        data: function () {
            return {
                open: false
            };
        },
        methods: {
            openMenu: function() {
                return this.open = !this.open;
            }
        },
        components: {
            IconMenu,
            IconCall,
            IconRoute,
            IconChat
        }
    }
</script>

<style scoped lang="scss">
    #menu {
        display: block;
        position: fixed;
        width: 100%;
        background-color: #fff;
        bottom:0;
        z-index:4;
        border-radius: 20px 20px 0 0;
        padding: 30px 40px 52px;
        box-shadow: 0 -2px 20px 0 rgba(0, 0, 0, 0.4);
        margin-bottom: -130%;
        /* Переход */
        -webkit-transition: all ease-out 0.5s;
        -moz-transition: all ease-out 0.5s;
        -o-transition: all ease-out 0.5s;
        transition: all ease-out 0.5s;

        &.active {
            margin-bottom: 0%;
        }

        ul {
            li {
                font-family: PragmaticaLightCBold, Helvetica, sans-serif;
                padding: 10px;
            }
        }
    }

    #panel {
        display: block;
        position: fixed;
        width: 100%;
        bottom: 0;
        left: 0;
        z-index: 10;

        ul {

            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            padding: 8px 25px 5px;
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);

            &.light {
                background-color: rgba(255, 255, 255, 0.7);
                span {
                    color: #000;
                }
            }

            &.dark {
                background-color: rgba(0, 0, 0, 0.7);

                span {
                    color: #fff;
                }
            }

            li {
                text-align: center;
                margin: 0 15px;

                & > a div,
                & > div {
                    width: 20px;
                    height: 20px;
                    display: block;
                    margin: 0 auto 2px;
                    font-weight: normal;
                }
                & > a span,
                & > span {
                    font-size: 12px;
                    font-weight: normal;
                }

            }
        }
    }
</style>
