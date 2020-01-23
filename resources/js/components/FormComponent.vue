<template>
    <section class="block form">
        <div class="block-text">
            <h2><span class="c_orange">Попробуйте</span> сами</h2>
            <p class="note_1">Расширенный тест-драйв в Брайт парке</p>
        </div>
        <form action="#" id="form_test-drive" method="POST" name="feedback" @submit="send">
            <input type="text" class="" name="name" placeholder="Имя">
            <input type="phone" class="" name="phone" placeholder="Телефон">
            <button :click="send">Записаться</button>
        </form>
    </section>
</template>

<script>
    export default {
        name: 'App',
        props : [],
        data: function () {
            return {};
        },
        methods: {
            send(event) {
                event.preventDefault();
            }
        }
    }
</script>

