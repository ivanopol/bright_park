<template>
    <section id="buttons_other" class="buttons_other mt-40">
        <div class="container">
            <div class="item-buttons-other">
                <a id="from_test_drive" href="#" class="btn btn-primary event" v-on:click.prevent="show()">Записаться на тест-драйв</a>
                <a id="form_service" href="#" class="btn btn-secondary event" v-on:click.prevent="show()">Записаться на сервис</a>
            </div>
            <modal name="form-callback" height="auto" :adaptive="true">
                <div class="close" @click="hide"></div>
                <form-buy2-component :cities=cities></form-buy2-component>
            </modal>
        </div>
    </section>
</template>

<script>
   // import {  } from 'hooper';
   // const MODAL_WIDTH = 300;
    export default {
        name: "App",
        props: ['cities'],
        methods: {
            show () {
                this.$modal.show('form-callback');
            },
            hide () {
                this.$modal.hide('form-callback');
            }
        },
        data () {
            return {
                modalWidth: window.innerWidth -20
            }
        },
        created () {
            this.modalWidth = window.innerWidth -20
        }
    }
</script>

<style lang="scss">
    .buttons_other {
        .item-buttons-other {
            margin-bottom: 40px;
            text-align: center;

            & > a {
                margin-bottom: 15px;
            }

            .btn {
                font-family: PragmaticaLightC, Helvetica, sans-serif;
                width: 85.51vw;
                border-radius: 50px;
                padding: 14px 15px 10px;
            }

            .btn-primary {
                border: 2px solid #FF8351;
                color: #fff;
                background-color: #FF8351;
            }

            .btn-secondary {
                border: 2px solid #000;
                color: #000;
                background-color: transparent;
            }
        }
    }


    @media only screen and (min-width: 576px) {
        .buttons_other {
            .item-buttons-other {
                .btn {
                    width: auto;
                    margin-left: 5px;
                    margin-right: 5px;
                }
            }
        }
    }

</style>
