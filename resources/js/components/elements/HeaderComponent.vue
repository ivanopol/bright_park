<template>
    <header>
        <div class="logo-wrap">
            <logo-bright-park></logo-bright-park>
            <logo-lada></logo-lada>
        </div>
        <div class="lada-line">
            <p id="model-active"></p>
        </div>
    </header>
</template>

<script>
    import LogoBrightPark from '../icons/header/LogoBrightPark.vue';
    import LogoLada from '../icons/header/LogoLada.vue';

    export default {
        name: "App",
        components: {
            LogoBrightPark,
            LogoLada
        }
    }
</script>

<style scoped lang="scss">
    header {
        .logo-wrap {
            padding: 15px 15px 0 15px;

            .logo-bright-park {
                background: url(/build/images/logo_bright_park.svg) no-repeat left;
                width: 49%;
                height: 25px;
                background-size: 100%;
                display: inline-block;
            }

            .logo-lada {
                background: url(/build/images/logo_lada.svg) no-repeat right;
                width: 49%;
                height: 25px;
                background-size: 40%;
                display: inline-block;
            }
        }
        .lada-line {
            background: url(/build/images/lada_line.svg) no-repeat;
            width: 100%;
            height: 100%;
            background-size: 101%;

            p {
                padding-top: 20px;
                padding-right: 15px;
                text-align: right;
                font-weight: bold;
            }
        }
    }
</style>
