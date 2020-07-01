<template>

</template>

<script>
    import axios from "axios";

    export default {
        name: "EventHandlerComponent",
        data: () => ({
            elements: [],
        }),
        methods: {
            async sendData(data, href) {
                axios({
                    method: 'post',
                    url: '/api/write_event',
                    data: data
                }).then((response) => {

                    if (href !== '#' && href !== null) {
                        window.location = href;
                    }
                });
            },
            checkEvent(e) {
                let has_class = false
                for (let i = 0; i < e.target.classList.length; i++) {
                    if ('event' === e.target.classList[i]) {
                        has_class = true
                        break
                    }
                }
                return has_class
            },
            addHandler() {
                let handle = async (e) => {
                    let is_event = this.checkEvent(e);
                    let href = null;

                    if (!is_event) {
                        return false;
                    }

                    if (e.target.href) {
                        event.preventDefault();
                        href = e.target.attributes.href.value;
                    }

                    let data = {
                        'btn_id': e.target.id,
                        'href': href,
                        'location': window.location.pathname,
                        'timestamp': new Date().toISOString(),
                        'event_type': 'button'
                    };
                    await this.sendData(data, href);
                };
                document.addEventListener('click', handle, false);
            }
        },

        mounted() {
            this.addHandler()
        },

        destroyed() {
            for (let i = 0; i < this.elements.length; i++) {
                this.sendData(this.elements[i]);
            }
        }
    }
</script>

<style scoped>

</style>
