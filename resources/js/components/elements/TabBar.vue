<template>
    <div>

        <div id="layout" :class="{ active: open }" @click="closeMenu"></div>
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
                <li @click="openMapWindow">
                    <icon-route></icon-route>
                    <span>Маршрут</span>
                </li>
                <li @click="toggleJivo">
                    <icon-chat ></icon-chat>
                    <span>Чат</span>
                </li>
            </ul>

        </section>
        <section id="menu" :class="{ active: open }">
            <div class="close" @click="closeMenu"></div>
            <div class="menu_wrap">
                <v-select class="select_wrap" :components="{OpenIndicator, Deselect}" placeholder="Выбрать город" taggable
                          :options="cities.list" :searchable="false" v-model="cities.active" @input="selected">
                    <div class="spinner">Загрузка...</div>
                    <div slot="no-options">Нет совпадений</div>
                </v-select>

                <div class="models_wrap">
                    <ul class="">
                        <li v-for="model in models" v-bind:key="model.id">
                            <a :href="'/' + cities.active.value + '/' + model.slug + '/' + model.types_preview[0].slug">
                                <div class="title" v-text="model.title"></div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="other_links">
                    <ul>
                        <li>
                            <a :href="'/' + cities.active.value"><div class="title">Главная страница</div></a>
                        </li>
                        <li>
                            <a :href="'/' + cities.active.value + '/contacts'"><div class="title">Контакты</div></a>
                        </li>
                        <li>
                            <a :href="'/' + cities.active.value + '/actions'"><div class="title">Акции</div></a>
                        </li>
                        <li>
                            <a :href="'/' + cities.active.value + '/news'"><div class="title">Новости</div></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="map_window" :class="{ active: openMap }">
            <div class="map_wrap">
                <touch-bar-map-component :coordinates="cities.active.coords.split(', ')"></touch-bar-map-component>
            </div>
        </section>
    </div>
</template>

<script>
    import vSelect from 'vue-select';
    import 'vue-select/dist/vue-select.css';
    import IconMenu from '../icons/tab_bar/IconMenu.vue';
    import IconCall from '../icons/tab_bar/IconCall.vue';
    import IconRoute from '../icons/tab_bar/IconRoute.vue';
    import IconChat from '../icons/tab_bar/IconChat.vue';

export default {
        props: {
            theme: {
                default: 'light',
                type: String
            },
            cities: {
                type: Object
            },
            models: {
                type: Array
            },
        },
        data: function () {
            return {
                open: false,
                jivoOpen: false,
                openMap: false,
                Deselect: {
                    render: createElement => createElement('span'),
                },
                OpenIndicator: {
                    render: createElement => createElement('span', {class: {'toggle': true}}),
                },
            };
        },
        methods: {
            toggleJivo: function() {
                if (this.jivoOpen) {
                    jivo_api.close();
                    this.jivoOpen = false;
                } else {
                    jivo_api.open();
                    this.jivoOpen = true;
                }

            },
            openMenu: function() {
                jivo_api.close();
                return this.open = !this.open;
            },
            closeMenu: function() {
                jivo_api.close();
                return this.open = false;
            },
            selected: function(event) {
                window.location.href = window.location.protocol + '//' + window.location.host + '/' + event.value;
            },
            openMapWindow: function() {
                jivo_api.close();
                return this.openMap = !this.openMap;
            },
            closeMap: function() {
                jivo_api.close();
                return this.openMap = false;
            },
        },
        components: {
            IconMenu,
            IconCall,
            IconRoute,
            IconChat,
            vSelect
        },
    mounted() {
        let jivoScript = document.createElement('script');
        jivoScript.setAttribute('src', '//code-ya.jivosite.com/widget/IFmL6hf3c9');
        document.body.appendChild(jivoScript);

    }
}
</script>

<style lang="scss">
    #layout {

        &.active {
            content: "";
            display: block;
            z-index: 29;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: fixed;
            background-color: rgba(0, 0, 0, 0.3);
            -webkit-transition: all ease-in 0.3s;
            -moz-transition: all ease-in 0.3s;
            -o-transition: all ease-in 0.3s;
            transition: all ease-in 0.3s;
        }
    }

    #menu {
        display: block;
        position: fixed;
        width: 80vw;
        height: 100vh;
        background-color: #000;
        top:0;
        z-index:30;
        padding: 3.2vh 12.75vw;
        margin-left: -200vw;
        /* Переход */
        -webkit-transition: all ease-in 0.3s;
        -moz-transition: all ease-in 0.3s;
        -o-transition: all ease-in 0.3s;
        transition: all ease-in 0.3s;

        .close {
            position: absolute;
            top: 5px;
            right: 5px;
            width: 20px;
            height: 20px;
            color: #FF8351;
            font-weight: bold;
            padding: 12px;
            box-sizing: content-box;
            border-radius: 20px;

            &:before,
            &:after {
                content: "";
                width: 25px;
                height: 2px;
                background-color: #FF8351;
                display: block;
                position: absolute;
            }

            &:before {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                top: 20px;
                left: 10px;
            }

            &:after {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                left: 10px;
                top: 20px;
            }
        }

        &.active {
            margin-left: 0;
        }

        ul {
            li {
                font-family: PragmaticaLightCBold, Helvetica, sans-serif;
                padding: 10px;
            }
        }

        .other_links,
        .models_wrap {
            padding: 0;
            background: none;
            margin-bottom: 3vh;

            ul {
                padding: 0;

                li {
                    padding: 0;
                    width: 100%;
                    display: flex;
                    justify-content: left;
                    flex-wrap: nowrap;
                    border-bottom: 1px solid rgba(255, 255, 255, 0.18);
                    -webkit-box-align: center;
                    align-items: center;
                    a {
                        display:block;
                        width: 100%;
                        //padding: 15px 10px;
                        padding: 6.8% 10px;
                        color: #fff;

                        .title {
                            width: 100%;
                            font-size: 16px;
                            padding-left: 10px;
                            color: #fff;
                            text-transform: uppercase;
                            position: relative;
                            font-weight: normal;
                            &:after {
                                width: 10px;
                                height: 10px;
                                position: absolute;
                                content: "";
                                display: block;
                                -webkit-transform: rotate(45deg);
                                transform: rotate(45deg);
                                border: 2px solid #FF8351;
                                right: 0;
                                top: 0;
                                border-left: none;
                                border-bottom: none;
                            }
                        }
                    }
                }
            }
        }

        .other_links {
            ul li a .title {
                text-transform: none;
                font-family: PragmaticaLightC, Helvetica, sans-serif;
                font-weight: bold;
            }
        }

        .select_wrap {
            position: relative;
            /*margin-bottom: 30px;*/
            margin-bottom: 3vh;
            border-bottom: 1px solid rgba(255, 255, 255, 0.18);

            &.vs--disabled .vs__clear,
            &.vs--disabled .vs__dropdown-toggle,
            &.vs--disabled .vs__open-indicator,
            &.vs--disabled .vs__search,
            &.vs--disabled .vs__selected {
                background-color: #eef2f7;
                border: 2px solid #eef2f7;
                color: #fff;
            }

            .vs__dropdown-toggle {
                background-color: transparent;
                border: 2px solid transparent;
                height: 42px;
                overflow: hidden;
            }

            .vs__search, .vs__search:focus {
                line-height: 2;
                padding: 0 17px;
                color: #fff;
                font-family: PragmaticaLightC, Helvetica, sans-serif;
                font-size: 1em;
                font-weight: bold;
            }

            .vs__selected {
                padding: 0 25px 0 14px;
                height: 34px;
                color:#fff;
                font-weight: bold;
            }

            &.vs--single.vs--open .vs__selected {
                line-height: 2;
                height: 34px;
            }

            &.vs--searching .vs__search {
                color: #fff;
            }

            .vs__actions {
                padding-right: 17px;
            }

            .vs__dropdown-option {
                color: #fff;
                font-weight: normal;
                font-family: PragmaticaLightC, Helvetica, sans-serif;
                border-bottom: 1px solid rgba(255, 255, 255, 0.18)
            }

            .vs__dropdown-option:last-child {
                border-bottom: none;
            }

            .vs__dropdown-menu {
                background-color: #3e3e3e;
            }

            &.vs--open .vs__dropdown-toggle {
                background-color: #000;
                border: 2px solid #000; //rgba(60, 60, 60, 0.26);
                border-bottom: none;
            }

            .vs__dropdown-menu {
               // border: 2px solid transparent;
                border: none;
                border-top: none;
               // background-color: #000;
                color: #000;
                padding: 0;
            }

            .vs__dropdown-option--selected,
            .vs__dropdown-option--highlight {
                background-color: #FF8351;
                color: #000;
            }

            .vs__fade-enter-active,
            .vs__fade-leave-active {
                transition: none;
            }

            .vs__open-indicator {
                transition: none;
            }

            .close {
                display: block;
                position: absolute;
                top: 50%;
                margin-top: -12px;
                right: 40px;
                width: 25px;
                height: 25px;
                background-color: transparent;
                border-radius: 15px;
                border: 1px solid #9299a2;
                cursor: pointer;

                &:before,
                &:after {
                    content: '';
                    display: block;
                    width: 14px;
                    height: 1px;
                    background-color: #9299a2;
                    position: absolute;
                    top: 11px;
                    left: 5px;
                }

                &:after {
                    -webkit-transform: rotate(45deg);
                    transform: rotate(45deg);
                }

                &:before {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg);
                }
            }

            .toggle {
                display: block;
                position: absolute;
                top: 50%;
                margin-top: -11px;
                right: 18px;
                width: 10px;
                height: 10px;
                border: 2px solid #FF8351;
                border-top: none;
                border-left: none;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
            }

            &.vs--open .toggle {
                -webkit-transform: rotate(225deg);
                transform: rotate(225deg);
                margin-top: 0px;
            }
        }
    }

    #panel {
        display: block;
        position: fixed;
        width: 100%;
        bottom: 0;
        left: 0;
        z-index: 40;

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

    #map_window {
        display: block;
        position: fixed;
        width: 100vw;
        height: 60vh;
        background-color: #000;
        top:40vh;
        z-index:30;
        margin-left: -200vw;
        /* Переход */
        -webkit-transition: all ease-in 0.3s;
        -moz-transition: all ease-in 0.3s;
        -o-transition: all ease-in 0.3s;
        transition: all ease-in 0.3s;

        .close {
            position: absolute;
            top: 5px;
            right: 5px;
            width: 20px;
            height: 20px;
            color: #FF8351;
            font-weight: bold;
            padding: 12px;
            box-sizing: content-box;
            border-radius: 20px;

            &:before,
            &:after {
                content: "";
                width: 25px;
                height: 2px;
                background-color: #FF8351;
                display: block;
                position: absolute;
            }

            &:before {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                top: 20px;
                left: 10px;
            }

            &:after {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                left: 10px;
                top: 20px;
            }
        }

        &.active {
            margin-left: 0;
        }

        .map_wrap {
            padding-top: 10%;
            padding-bottom: 10%;
            height: 50%;
            max-height: 60%;
        }
    }

    ._orinationRight_25.wrap_mW {
        right: 0;
        display: none;
    }

    .label_39._bottom_3v._pad100_GR, .label_39._left_2d._pad100_GR, .label_39._right_1y._pad100_GR {
        right: 30px;
        left: auto;
        display: none;
    }

    #jcont {
        bottom: 50px !important;
        z-index: 10 !important;
    }

    .globalClass_ET .mobileContainer_2k {
        z-index: 10 !important;
    }

</style>
