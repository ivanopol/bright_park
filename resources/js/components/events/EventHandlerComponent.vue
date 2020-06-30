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
               // let self = this;

                let handle = async (e) => {
                    let is_event = this.checkEvent(e);

                    if (!is_event) {
                        return false;
                    }

                    console.log(e);
/*                    if (this.getAttribute("href")) {
                        event.preventDefault();
                    }

                    let data = {
                        'btn_id': this.getAttribute("id"),
                        'href': this.getAttribute("href"),
                        'location': window.location.pathname,
                        'timestamp': new Date().toISOString(),
                        'event_type': 'button'
                    };

                    await self.sendData(data, this.getAttribute('href'));*/
                };

                document.addEventListener('click', handle, false);

/*                document.addEventListener('click', function (e) {
                    //console.log(e);
                    for (let i = 0; i < e.target.classList.length; i++) {
                        if ('event' == e.target.classList[i]) {
                            handle();
                            //e.target.addEventListener('click', handle, false);
                        }
                    }
                   // console.log(e);
                }, false);*/
                //    console.log(e.target.classList);
                // console.log(e.target.classList.value.indexOf('event'));
                /*                    if(e.target && e.target.id== 'brnPrepend'){
                        //do something
                    }*/
                //});
                /*                this.elements = document.getElementsByClassName("event");



                for (let i = 0; i < this.elements.length; i++) {
                    this.elements[i].addEventListener('click', handle, false);
                }*/
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
