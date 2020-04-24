<template>
    <section class="block form form-modal">
        <div class="block-text">
            <p class="form-title">{{form_title}}</p>
        </div>
        <form action="#" id="form_test-drive2" method="POST" name="feedback" @submit="send">
            <input id="name_modal" type="text" class="" name="name" placeholder="Имя" required>
            <the-mask id="phone_modal" pattern=".{18,}" mask="+# (###)-###-##-##" type="tel" required="true"
                      placeholder="Телефон"></the-mask>
            <button id="form_test_drive_2" class="event" :click="send">{{button_text}}</button>

            <div class="validation-message-wrap">
                <div id="warning" class="model-choose-text validation-message" v-show="error">
                    <p>Введите 11-значный номер</p>
                </div>
                <div id="success" class="model-choose-text validation-message" v-show="success">
                    <p>Заявка отправлена!</p>
                </div>
            </div>
        </form>
    </section>
</template>

<script>
    import axios from 'axios';
    import VueTheMask from 'vue-the-mask'

    Vue.use(VueTheMask);

    export default {
        name: 'App',
        beforeMount() {
            this.attachHandler();
        },
        props: {
            cities : {
                type: Array
            },
            button_text: {
                default: "Отправить",
                type: String
            },
            form_title: {
                default: "Заполните форму",
                type: String
            }
        },
        data: function () {
            return {
                phone: '',
                success: false,
                error: false
            };
        },
        methods: {
            send: function (event) {
                event.preventDefault();

                let formData = {
                    "phone": this.clearMask(document.getElementById('phone_modal').value),
                    "name": document.getElementById('name_modal').value,
                    "responsible_id": this.cities.active.bitrix_responsible_id
                };

                axios(
                    {
                        method: 'post',
                        url: '/send_contact_form',
                        data: formData
                    })
                    .then((response) => {
                        this.clearInput();
                        this.success = true;
                    }).catch((error) => {
                        this.error = true;
                    this.clearInput();
                })
            },

            clearInput: function () {
                document.getElementById('phone_modal').value = null;
                document.getElementById('name_modal').value = null;
            },

            clearMask: function(value) {
              return value.replace(/\D/g,'');
            },

            showModal: function() {
            },

            attachHandler: function () {
                function attachHandler(el, evtname, fn) {
                    if (el.addEventListener) {
                        el.addEventListener(evtname, fn.bind(el), false);
                    } else if (el.attachEvent) {
                        el.attachEvent('on' + evtname, fn.bind(el));
                    }
                }

                attachHandler(window, "load", function () {
                    var ele = document.querySelector("input[id=phone_modal]");
                    attachHandler(ele, "invalid", function () {
                        this.setCustomValidity("Please enter at least 5 characters.");
                        this.setCustomValidity("");
                    });
                });
            }
        }
    }
</script>

<style lang="scss">
    #form_test-drive2 button {
        margin-top: 25px;
    }

    .form-modal {
        #warning,
        #success {
            text-align: center;
            line-height: 1.2;
            margin: 18px auto;
            border-radius: 8px;
            padding: 15px;
            font-size: 16px;
            max-width: 340px;

        }

        #warning {
            p {
                color: darkred;
            }
        }

        #success {
            background-color: #dafbcc;

            p {
                margin: 0 !important;
                color: darkgreen;
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

            #success,
            #error {
                margin-bottom: 0;
            }
        }
    }
</style>
