<template>
    <div class="plate" v-observe-visibility="{ callback: visibilityChanged,   intersection: {
    threshold: 0,
    }, }">
        <transition name="slide-fade" v-on:enter="enter">
            <p v-if="show" v-html="text"></p>
            <span class="disclaimer" v-html="disclaimer"></span>
        </transition>
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
.plate {
    width: 100%;
    background: rgb(239,116,48);
    background: linear-gradient(90deg, rgba(239,116,48,1) 0%, rgba(250,182,45,1) 100%);
    max-width: 1980px;
    margin: -10px auto 0;
    padding: 25px 20px 15px;

    p {
        font-size: 20px;
        color: #000;
        line-height: 28px;
        text-align: center;
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
}

</style>
