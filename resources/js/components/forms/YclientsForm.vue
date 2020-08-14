<template>
    <section :class="'block form inline-form ' + form_class">
        <div class="block-text" v-if="form_h1">
            <h2 v-html="form_h1"></h2>
        </div>
        <div class="form-wrapper">
            <p class="note_1" v-if="form_title">{{form_title}}</p>
            <a :id="form_id + '__button'" class="btn btn-primary btn-position ms_booking event" >Записаться</a>
            <a :id="form_id + '__call'" :href="'tel:' + cities.active.phone" class="btn btn-primary callibri_phone btn-position green event">Позвонить</a>
        </div>
    </section>
</template>

<script>

export default {
    name: 'YclientsForm',
    props: {
        cities : {
            type: Object
        },
        button_text: {
            default: "Записаться",
            type: String
        },
        form_h1: {
            default: "<span class=\"c_orange\">Попробуйте</span> сами",
            type: String
        },
        form_title: {
            default: "Расширенный тест-драйв в Брайт парке",
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
        form_class: {
            default: '',
            type: String
        },
        form_type: {
            default: 1,
            type: Number
        },
        goal: {
            default: '',
            type: String
        }
    }
}
</script>

<style lang="scss" >
.inline-form {
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
}

@media only screen and (max-width: 580px) {
    .mobile_white_bg {
        background: #fff;
        padding: 40px 30px;
        border-radius: 20px;
        width: 90%;
        max-width: 340px;
        margin: 40px auto;

        h2 {
            color: #000;
        }

        .form-wrapper {
            padding: 0;
        }

        form {
            margin-bottom: 0;
        }

        form > * {
            width: 100%;
        }
    }
}
</style>
