<template>
    <section id="panel" >
        <ul :class="theme">
            <li>
                <icon-menu></icon-menu>
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
        components: {
            IconMenu,
            IconCall,
            IconRoute,
            IconChat
        }
    }
</script>

<style scoped lang="scss">
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
