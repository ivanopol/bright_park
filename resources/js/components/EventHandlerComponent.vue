<template>

</template>

<script>
    import axios from "axios";

    export default {
        name: "EventHandlerComponent",
        mounted() {
            let elements = document.getElementsByClassName("event");

            let handle = function() {
                let data = {
                    'btn_id': this.getAttribute("id"),
                    'href': this.getAttribute("href"),
                    'location': window.location.pathname,
                    'timestamp': new Date().toUTCString()
                };

                console.log(data);

                axios(
                    {
                        method: 'post',
                        url: '/api/write_event',
                        data: data
                    });
            };

            //test
/*            var handler = function() {
                var attribute = this.getAttribute("href");
                console.log(attribute);
                alert(attribute);
            };*/

            for (let i = 0; i < elements.length; i++) {
                elements[i].addEventListener('click', handle, false);
            }
        }
    }
</script>

<style scoped>

</style>
