<template>

</template>

<script>
    import axios from "axios";

    export default {
        name: "EventHandlerComponent",
        props: ['data'],
        data: () => {
        },
        methods: {
            handleEvent: () => {
                axios(
                    {
                        method: 'post',
                        url: '/api/write_event',
                        data: this.data
                    });
            }
        },

        mounted() {
            this.handleEvent();
        }
    }
</script>

<style scoped>

</style>
