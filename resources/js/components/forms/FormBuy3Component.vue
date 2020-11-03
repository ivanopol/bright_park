<template>
    <section class="block form form-modal">
        <div class="block-text">
            <p class="form-title">{{form_title}}</p>
            <p class="form-disclaimer" v-html="form_disclaimer" v-if="form_disclaimer"></p>
        </div>
        <form-common :cities="cities"
                     :button_text="button_text"
                     :form_title="form_title"
                     :is_comment="is_comment"
                     :form_id="form_id"
                     :form_type="form_type"
                     :goal="goal"
                      >
        </form-common>
    </section>
</template>

<script>
    import FormCommon from './FormCommon.vue';
    import axios from "axios";

    export default {
        name: 'FormInline',
        props: {
            cities : {
                type: Object
            },
            button_text: {
                default: "Записаться",
                type: String
            },
            form_title: {
                default: "Расширенный тест-драйв в Брайт парке",
                type: String
            },
            form_disclaimer: {
                default: "",
                type: String
            },
            form_id: {
                default: 'form',
                type: String
            },
            is_comment: {
                default: true,
                type: Boolean
            },
            form_type: {
                default: 1,
                type: Number
            },
            goal: {
                default: '',
                type: String
            },
        },
        methods: {
        },
        components: {
            FormCommon,
        },
        mounted() {
        }
    }
</script>

<style lang="scss" scoped>
    #form_test-drive2 button {
        margin-top: 25px;
    }

    .form-modal {


        .block-text {
            padding-top: 30px;
            padding-right: 50px;
            padding-bottom: 30px;
        }

        p.form-title {
            color: #000;
            margin-bottom: 5px;
            font-family: PragmaticaLightCBold, Helvetica, sans-serif;
            text-transform: uppercase;
            text-align: center;
            font-size: 24px;
            line-height: 1.3;
        }

        p.form-disclaimer {
            color: #000;
            font-family: PragmaticaLightC, Helvetica, sans-serif;
            text-align: center;
            font-size: 18px;
            line-height: 1.3;
            width: 90%;
            margin: 0 auto;
        }

        @media only screen and (max-width: 580px) {
            p.form-disclaimer {
                font-size: 15px;
                width: 100%
            }
        }

        @media only screen and (min-width: 580px) {
            p.form-title {
                color: #000;
                font-size: 34px;
            }

            .br-desktop {
                color: green;
                display: block;
            }
        }

        @media only screen and (min-width: 1367px) {

        }

        form {
            margin-bottom: 40px;
        }


        .validation-message-wrap {
            height: auto;
        }
    }
</style>
