<template>
    <div class="c-block">
        <div class="retarget-warning">
            <div class="retarget-warning-row">
                <div class="retarget-warning-icon">
                    <img src="/build/images/icons/icon-warning.svg" alt="Автомобили сильно подорожают в 2020 году">
                </div>
                <div class="retarget-warning-title">Автомобили сильно подорожают в 2020 году</div>
            </div>
            <div class="retarget-warning-body">
                <div class="retarget-warning-row">В 2020 году эсперты ожидают рост цен на автомобили на 7-8%</div>
                <div class="retarget-warning-row retarget-warning-text-source">Источник: autonews.ru</div>
                <a href="#" v-on:click.prevent="show()" class="btn btn-primary retarget-warning-button">Получить лучшие условия</a>
            </div>
        </div>
        <modal name="form-callback" :width="modalWidth" :height="354">
            <form-buy2-component :cities=cities></form-buy2-component>
        </modal>
    </div>
</template>

<script>
    export default {
        name: "App",
        props: ['cities'],
        methods: {
            show () {
                this.$modal.show('form-callback');
            },
            hide () {
                this.$modal.hide('form-callback');
            }
        },
        data () {
            return {
                modalWidth: window.innerWidth -20
            }
        },
        created () {
            this.modalWidth = window.innerWidth -20
        }
    }
</script>


<style lang="scss">
    .buttons_other {
        .item-buttons-other {
            margin-bottom: 40px;
            text-align: center;

            & > a {
                margin-bottom: 15px;
            }

            .btn {
                font-family: PragmaticaLightC, Helvetica, sans-serif;
                width: 85.51vw;
                border-radius: 50px;
                padding: 14px 15px 10px;
            }

            .btn-primary {
                border: 2px solid #FF8351;
                color: #fff;
                background-color: #FF8351;
            }

            .btn-secondary {
                border: 2px solid #000;
                color: #000;
                background-color: transparent;
            }
        }
    }


    @media only screen and (min-width: 576px) {
        .buttons_other {
            .item-buttons-other {
                .btn {
                    width: auto;
                    margin-left: 5px;
                    margin-right: 5px;
                }
            }
        }
    }

</style>
