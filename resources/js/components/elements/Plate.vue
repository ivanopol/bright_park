<template>
    <div class="plate" v-observe-visibility="{ callback: visibilityChanged, intersection: { threshold: 0 }, }">
        <transition-group name="slide-fade" tag="div" v-on:enter="enter">
            <div v-if="show" v-bind:key="1">
                <p v-bind:class="{ bold: bold }" v-html="text" ></p>
                <p class="disclaimer" v-html="disclaimer"></p>
            </div>
        </transition-group>
    </div>
</template>

<script>
export default {
    name: 'Plate',
    data: function() {
        return {
            show: false
        }
    },
    props: {
        text: {
            default: '',
            type: String
        },
        disclaimer: {
            default: '',
            type: String
        },
        city: {
            type: String
        },
        bold: {
            default: false,
            type: Boolean
        }
    },
    methods: {
        visibilityChanged (isVisible, entry) {
            this.show = isVisible
        },
        enter: function(el, done) {
            var that = this;
        }
    }
}
</script>

<style lang="scss" >
a.plate-wrap {
    font-weight: normal;
}

.plate {
    width: 100%;
    background: rgb(239,116,48);
    background: linear-gradient(90deg, rgba(239,116,48,1) 0%, rgba(250,182,45,1) 100%);
    max-width: 1980px;
    margin: -10px auto 0;
    padding: 25px 20px 15px;

    a {
        font-weight: normal;
        color: #000;
    }

    p {
        font-size: 20px;
        color: #000;
        line-height: 28px;
        text-align: center;
        margin-bottom: 0;

        &.bold {
            font-weight: bold;
        }
    }

    .disclaimer {
        font-size: 18px;
        line-height: 26px;
        text-align: center;
        color: #000;

        a {
            border-bottom: 1px solid #00000061;
        }
    }

    /* Анимации появления и исчезновения могут иметь */
    /* различные продолжительности и динамику.       */
    .slide-fade-enter-active {
        transition: all 1s ease;
    }
    .slide-fade-leave-active {
        transition: all 1.6s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }
    .slide-fade-enter, .slide-fade-leave-to
        /* .slide-fade-leave-active до версии 2.1.8 */ {
        transform: translateX(-10px);
        opacity: 0;
    }

    @media only screen and (max-width: 580px) {
        .show_desktop {
            display: none;
        }
    }
}

</style>
