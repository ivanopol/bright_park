<template>
    <section id="buttons_other" class="buttons_other mt-40">
        <div class="item-buttons-other">
            <a href="" class="btn btn-primary" v-on:click.prevent="show()">Записаться на тест-драйв</a>
            <a href="" class="btn btn-secondary" v-on:click.prevent="show()">Записаться на сервис</a>
        </div>
        <modal name="form-callback" :width="modalWidth" :height="354">
            <form-buy2-component></form-buy2-component>
        </modal>
    </section>
</template>

<script>
    import {  } from 'hooper';
   // const MODAL_WIDTH = 300;
    export default {
        name: "App",
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

<style scoped lang="scss">

</style>
