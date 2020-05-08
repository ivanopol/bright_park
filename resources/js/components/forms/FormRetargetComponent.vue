<template>
    <section class="block form retargeting-form">
        <div class="form-wrapper">
            <h3 v-html="form_title"></h3>
            <form-common :cities="cities"
                         :button_text="button_text"
                         :form_title="form_title"
                         :is_comment="is_comment"
                         :form_id="form_id">
            </form-common>
        </div>
    </section>
</template>

<script>
    import FormCommon from './FormCommon.vue';

    export default {
        name: 'FormRetarget',
        props: {
            cities : {
                type: Object
            },
            button_text: {
                default: "Получить лучшие условия",
                type: String
            },
            form_title: {
                default: "<span class=\"c_orange\">Оставьте</span> заявку сейчас",
                type: String
            },
            form_id: {
                default: 'form',
                type: String
            },
            is_comment: {
                default: true,
                type: Boolean
            }
        },
        components: {
            FormCommon,
        },
    }
</script>

<style lang="scss" scoped>

    .validation-message-wrap {
        height: 52px;
    }
    .retargeting-form {
        margin-bottom: 20px;

        .form-wrapper {
            padding: 0 0 8px;
        }

        @media only screen and (min-width: 580px) {
            .form-wrapper {
                padding: 80px 0 28px;
                width: 450px;
                border-radius: 30px;
                box-shadow: 0 0 15px 5px rgba(0, 0, 0, 0.16), 0 0 30px 10px rgba(0, 0, 0, 0.08);
            }
        }

        p.form-title {
            color: #000;
            margin-bottom: 30px;
            font-family: PragmaticaLightCBold, Helvetica, sans-serif;
            text-transform: uppercase;
            text-align: center;
            font-size: 24px;
            line-height: 1.3;
        }

        @media only screen and (min-width: 580px) {
            p.form-title {
                color: #000;
                margin-bottom: 30px;
                font-size: 34px;
            }
        }

        @media only screen and (min-width: 1367px) {

        }

        form {
            margin-bottom: 40px;
        }
        .block-text {
            padding-top: 30px;
            padding-right: 50px;
        }

        .validation-message-wrap {
            height: auto;
        }
    }
</style>
