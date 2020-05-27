<template>
    <footer class="block footer">
        <div class="block-text center mb">
            <h2><span class="c_orange">Брайт Парк </span> всегда на связи</h2>
            <p>У&nbsp;вас есть вопросы? Пообщайтесь со&nbsp;специалистом по&nbsp;телефону&nbsp;<span v-if="!mobile" class="callibri_tel">{{phone_formatted}}</span><br>
            <a :href="'tel:' + phone" id="main__footer_call" :data-goal="goal_call" @click="sendGoals(goal_call)" class="btn btn btn-primary btn-position green callibri_button" v-if="mobile">Позвонить</a></p>
            <p>Брайт парк ближе, чем кажется<br></p>
        </div>
        <yandex-map-component :coordinates='coordinates'></yandex-map-component>
    </footer>
</template>

<script>
    export default {
        name: "Footer",
        props: {
            coordinates: {
                type: Array
            },
            phone: {
                type: String
            },
            phone_formatted: {
                default: '',
                type: String
            },
            goal_call: {
                default: '',
                type: String
            },
        },
        data: function () {
            return {
                mobile: false,
            };
        },
        methods: {
            sendGoals: function (goal) {
                if (goal) {
                    let ym_ids = this.getCountersIds();
                    let goalArr = goal.match(/^(.+?):(.+?)$/);
                    let target_goal = goalArr === null ? goal : goalArr[2];

                    ym_ids.forEach(function (item, i, arr) {
                        window["yaCounter" + item].reachGoal(target_goal);
                    });
                }
            },
            getCountersIds: function () {
                var id_list = [];
                window.ym.a.forEach(function(item){
                    id_list.push(item[0]);
                });
                return id_list;
            },
        },
        components: {},
        mounted() {
            this.mobile = document.documentElement.clientWidth <= 580;
        }
    }
</script>

<style scoped lang="scss">
    footer {

        h2 {
            span {
                display: inline;
            }
        }

        padding-bottom: 51px;

        .phone {
            border-bottom: 2px solid #b0c5dc;
            margin-bottom: -2px;
        }

        p {
            /*padding-top: 20px;*/
            font-family: PragmaticaLightCBold, Helvetica, sans-serif;
            font-size: 18px;
        }

        a {
            width: 80%;
        }

        @media only screen and (min-width: 580px) {
            a {
                width: auto;
            }
        }
    }

    @media only screen and (min-width: 1025px) {
        footer {
            padding-bottom:0;
        }
    }
</style>
