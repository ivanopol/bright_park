<template>
    <section class="banner">
        <div class="banner-assets">
            <picture>
                <source srcset="/build/images/main/mobile/service.jpg, /build/images/main/mobile/service.jpg 2x" media="(max-width: 580px)">
                <source srcset="/build/images/main/tablet/service.jpg, /build/images/main/tablet/service.jpg 2x" media="(max-width: 1365px)">
                <source srcset="/build/images/main/desktop/service.jpg, /build/images/main/desktop/service.jpg 2x" media="(min-width: 1366px)">
                <img class="asset-image" src="/build/images/main/mobile/service.jpg" srcset="/build/images/main/mobile/service.jpg, /build/images/main/mobile/service.jpg 2x" alt="Сервис Брайт Парка" />
            </picture>
        </div>
        <div class="banner-content">
            <div class="bottom-left">
                <span>Сервис<br> Брайт Парка</span>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "Buttons",
        props: {
            cities: {
                default: {},
                type: Object
            },
        },
        data: function () {
            return {};
        },
        components: {}
    }
</script>

<style scoped lang="scss">
    // Banner mobile
    @media only screen and (max-width: 580px) {
        .banner {
            height: calc(100vh - 105px);
            margin: -35px auto 0;
            position: relative;
            overflow: hidden;

            &-assets {

                img {
                    width: 100%;
                    height: 100vh;
                    object-fit: cover;
                }
            }

            &-content {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;

                .bottom-left {
                    font-family: PragmaticaLightCBold, Helvetica, sans-serif;
                    font-size: 28px;
                    color: #fff;
                    text-transform: uppercase;
                }
            }
        }
    }

</style>
