<template>
    <section class="block form inline-form">
        <div class="block-text">
            <h2><span class="c_orange">Попробуйте</span> сами</h2>
        </div>
        <div class="form-wrapper">
            <p class="note_1">Расширенный тест-драйв в Брайт парке</p>
            <form action="#" id="form_test-drive" method="POST" name="feedback" @submit="send">
                <input id="name" type="text" class="" name="name" placeholder="Имя" required>
                <the-mask id="phone" pattern=".{18,}" mask="+# (###)-###-##-##" type="tel" required="true"
                          placeholder="Телефон"></the-mask>
                <button :click="send">Записаться</button>
                <div id="warning" class="model-choose-text" style="color: darkred;" hidden>
                    <p>Введите 11-значный номер!</p>
                </div>
                <div id="success" class="model-choose-text" style="color: darkgreen;" hidden>
                    <p>Заявка отправлена!</p>
                </div>
            </form>
        </div>
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
        props: [],
        data: function () {
            return {
                phone: ''
            };
        },
        methods: {
            send: function (event) {
                event.preventDefault();

                let formData = {
                    "phone": this.clearMask(document.getElementById('phone').value),
                    "name": document.getElementById('name').value
                };

                console.log(formData);

                axios(
                    {
                        method: 'post',
                        url: '/send_contact_form',
                        data: formData
                    })
                    .then((response) => {
                        this.clearInput();
                        document.getElementById('success').hidden = false;
                    }).catch((error) => {
                        document.getElementById('warning').hidden = false;
                    this.clearInput();
                })
            },

            clearInput: function () {
                document.getElementById('phone').value = null;
                document.getElementById('name').value = null;
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
                    var ele = document.querySelector("input[id=phone]");
                    attachHandler(ele, "invalid", function () {
                        this.setCustomValidity("Please enter at least 5 characters.");
                        this.setCustomValidity("");
                    });
                });
            }
        }
    }
</script>
