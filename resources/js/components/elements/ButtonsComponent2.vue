<template>
    <section class="buttons-block container p-top-40">
        <ul class="buttons-block-list">
            <li>
                <img id="main__image-buttons__profitable-credit" class="buttons-block-list-credit event" src="/build/images/main/buttons_block/profitable_credit.png" alt="Брайт Парк: выгодный кредит"
                     v-on:click.prevent="show('Рассчитать кредит', 'с&nbsp;комфортным первоначальным взносом и&nbsp;ежемесячным&nbsp;платежом', 'main__modal-image-buttons-profitable-credit_', 'Отправить', 1, 'credit')"/>
            </li>
            <li>
                <img id="main__image-buttons__exchange" class="buttons-block-list-exchange event" src="/build/images/main/buttons_block/exchange.png" alt="Брайт Парк: обмен"
                v-on:click.prevent="show('Оценить авто', 'по&nbsp;телефону за 15 минут по&nbsp;цене&nbsp;выше&nbsp;рынка', 'main__modal-image-buttons-exchange_', 'Отправить', 1, 'obmen')"/>
            </li>
            <li>
                <img id="main__image-buttons__special-offer" class="buttons-block-list-special-offer event" src="/build/images/main/buttons_block/special_offer.png" alt="Брайт Парк: Получить специальное предложение"
                     v-on:click.prevent="show('Получить предложение', 'с&nbsp;максимальной выгодой в&nbsp;ноябре', 'main__modal-image-buttons-special-offer_', 'Отправить', 1, 'special_offer')"/>
            </li>
            <li>
                <img id="main__image-buttons__test-drive" class="buttons-block-list-test-drive event" src="/build/images/main/buttons_block/test_drive.png" alt="Брайт Парк: тест-драйв"
                v-on:click.prevent="show('Записаться на тест-драйв', 'в&nbsp;удобное для вас время на&nbsp;любую&nbsp;модель&nbsp;LADA', 'main__modal-image-buttons-test-drive_', 'Записаться', 1, 'test_drive')"/>
            </li>
        </ul>

        <modal name="form-callback2" height="auto" :adaptive="true">
            <div :id="form_id + '_close'" class="close event" @click="hide"></div>
            <form-buy3-component :cities="cities"
                                 :form_title="form_title"
                                 :form_disclaimer="form_disclaimer"
                                 :form_id="form_id"
                                 :button_text="button_text"
                                 :form_type="form_type"
                                 :goal="goal">
            </form-buy3-component>
        </modal>
    </section>
</template>

<script>
    export default {
        name: "Buttons2",
        props: ['cities'],
        data: function () {
            return {
                modalWidth: window.innerWidth -20,
                form_id: '',
                form_title: '',
                form_disclaimer: '',
                button_text: '',
                form_type: 1,
                goal: '',
                uri_params: window.location.search,
            }
        },
        components: {},
        methods: {
            show (title, disclaimer, form_id, button_text, form_type, goal) {
                this.form_title = title;
                this.form_disclaimer = disclaimer;
                this.form_id = form_id;
                this.button_text = button_text;
                this.form_type = form_type; // 1 - обычная форма, 2 - форма сервиса
                this.goal = goal;
                this.$modal.show('form-callback2');
                () => {
                    callibriInit();
                }
            },
            hide () {
                this.$modal.hide('form-callback2');
            },
        },
        created () {
            this.modalWidth = window.innerWidth -20
        },
    }
</script>

<style scoped lang="scss">
    .buttons-block {
        &-list {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            li {
                width: 49%;
                padding: 10px;
                cursor: pointer;

                &:hover img {
                    filter: brightness(110%);
                }
            }

            img {
                width: 100%;
                height: 100%;
                transition: all .3s ease;
            }
        }
    }

    @media only screen and (max-width: 579px) {
        .buttons-block {
            margin-top: 60px
        }
    }


    @media only screen and (min-width: 580px) {
        .buttons-block {
            &-list {
                flex-wrap: nowrap;
            }
        }
    }
</style>
