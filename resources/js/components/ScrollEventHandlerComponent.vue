<template>
</template>

<script>
    import axios from "axios";

    export default {
        name: "App",
        data: function () {
            return {
                pageHeight: document.body.scrollHeight,
                previousPosition: 0,
                lastKnownPosition: 0,
                timer: 0,
                positions: [],
                ticking: false,
                isScrolling: null
            }
        },
        methods: {
            onScroll: function (event) {
                window.clearTimeout(this.isScrolling);

                this.isScrolling = setTimeout(function () {
                    this.previousPosition = this.lastKnownPosition || 0;
                    this.lastKnownPosition = window.scrollY;

                    let event_data = {
                        'previous_position': this.previousPosition,
                        'position': this.lastKnownPosition,
                        'location': window.location.pathname,
                        'timestamp': new Date().toISOString(),
                        'event_type': 'scroll',
                        'page_height': document.body.scrollHeight
                    };

                    console.log(event_data);

                    axios({
                        method: 'post',
                        url: '/api/write_event',
                        data: event_data
                    });

                }, 1000);

            },
            scrollTest: function () {
                window.clearTimeout(isScrolling);

                this.isScrolling = setTimeout(function () {

                    console.log('Scrolling has stopped.');

                }, 66);
            },
        },
        mounted() {
            window.addEventListener("scroll", this.onScroll, false);
        }
    }
</script>

<style scoped>

</style>
