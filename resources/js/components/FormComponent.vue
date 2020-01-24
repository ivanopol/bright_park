<template>
    <section class="block form">
        <div class="block-text">
            <h2><span class="c_orange">Попробуйте</span> сами</h2>
            <p class="note_1">Расширенный тест-драйв в Брайт парке</p>
        </div>
        <form action="#" id="form_test-drive" method="POST" name="feedback" @submit="send">
            <input type="text" class="" name="name" placeholder="Имя" required>
            <input
                type="tel"
                v-model="phone"
                name="phone"
                id="phone"
                placeholder="Телефон"
                autocomplete="tel"
                maxlength="14"
                class="form-control"
                v-phone
                pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}"
                required
            />
            <button :click="send">Записаться</button>
        </form>
    </section>
</template>

<script>

    Vue.directive('phone', {
        bind(el) {
            el.oninput = function(e) {
                if (!e.isTrusted) {
                    return;
                }

                let x = this.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
                this.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
                el.dispatchEvent(new Event('input'));
            }
        }
    });

    export default {
        name: 'App',
        props : [],
        data: function () {
            return {
                phone: ''
            };
        },
        methods: {
            send(event) {
                event.preventDefault();
            }
        }
    }
</script>

