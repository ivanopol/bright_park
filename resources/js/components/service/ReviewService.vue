<template>
    <section class="service-review bg-dark">
        <div class="service-review-layer container">
            <div class="swiper-button-prev" slot="button-prev"></div>
            <div class="swiper-button-next" slot="button-next"></div>
            <swiper class="swiper container-2" ref="mySwiper" :options="swiperOptions">
                <swiper-slide>
                    <div class="swiper__wrap">
                        <div class="swiper__head">
                            <div class="swiper__head-block">
                                <div class="swiper__head-block-name">Ars Vinogradov</div>
                                <div class="swiper__head-block-stars">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper__text">
                            <span>Уже несколько раз проходил ТО и делают хорошо. Удовольствие жать на газ после Брайт Парка!</span>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="swiper__wrap">
                        <div class="swiper__head">
                            <div class="swiper__head-block">
                                <div class="swiper__head-block-name">Ars Vinogradov</div>
                                <div class="swiper__head-block-stars">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper__text">
                            <span>Уже несколько раз проходил ТО и делают хорошо. Удовольствие жать на газ после Брайт Парка!</span>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="swiper__wrap">
                        <div class="swiper__head">
                            <div class="swiper__head-block">
                                <div class="swiper__head-block-name">Ars Vinogradov</div>
                                <div class="swiper__head-block-stars">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper__text">
                            <span>Уже несколько раз проходил ТО и делают хорошо. Удовольствие жать на газ после Брайт Парка!</span>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="swiper__wrap">
                        <div class="swiper__head">
                            <div class="swiper__head-block">
                                <div class="swiper__head-block-name">Ars Vinogradov</div>
                                <div class="swiper__head-block-stars">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper__text">
                            <span>Уже несколько раз проходил ТО и делают хорошо. Удовольствие жать на газ после Брайт Парка!</span>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="swiper__wrap">
                        <div class="swiper__head">
                            <div class="swiper__head-block">
                                <div class="swiper__head-block-name">Ars Vinogradov</div>
                                <div class="swiper__head-block-stars">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper__text">
                            <span>Уже несколько раз проходил ТО и делают хорошо. Удовольствие жать на газ после Брайт Парка!</span>
                        </div>
                    </div>
                </swiper-slide>
            </swiper>
        </div>
    </section>
</template>

<script>
    import { Swiper, SwiperSlide, directive } from 'vue-awesome-swiper'
    import 'swiper/css/swiper.css'

    export default {
        name: "ReviewService",
        props: {},
        data: function () {
            return {
                swiperOptions: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    slidesPerGroup: 1,
                    loop: true,
                    loopFillGroupWithBlank: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    },
                    breakpoints: {
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 0
                        },
                        580: {
                            slidesPerView: 3,
                            spaceBetween: 0
                        },
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        }
                    }
                }
            };
        },
        computed: {
            swiper() {
                return this.$refs.mySwiper.$swiper
            }
        },
        components: {
            Swiper,
            SwiperSlide
        },
        directives: {
            swiper: directive
        },
        mounted() {
        }
    }
</script>

<style scoped lang="scss">
    .swiper-button-prev,
    .swiper-button-next {
        border-color: #FF8351;
        color: #FF8351;
    }

    .service-review-layer {
        position: relative;
    }

    .swiper-slide {
        .swiper__wrap {
            background-color: #fff;
            margin: 30px 10px;
            padding: 20px;
            border-radius: 20px;
        }
    }

    .swiper-container {
        width: 90%;
    }

    @media only screen and (max-width: 580px) {
        .swiper-container {
            max-width: 340px;
        }

        .service-review-layer {
            max-width: 380px;
        }

        .swiper-button-next, .swiper-container-rtl .swiper-button-prev {
            right: 0;
        }

        .swiper-button-prev, .swiper-container-rtl .swiper-button-next {
            left: 0;
        }

        .swiper-button-prev:after, .swiper-button-next:after {
            font-size: 26px;
        }
    }
</style>
