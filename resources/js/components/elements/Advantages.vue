<template>
    <div id="advantages" class="advantages_wrap">
        <p class="h2-text">Брайт Парк</p>
        <h1>Брайт Парк&nbsp;&mdash; федеральный дилер LADA. Компания работает в&nbsp;{{dative}} и&nbsp;ещё 5&nbsp;регионах с&nbsp;2008&nbsp;года.
            Команда Брайт Парка занимается реализацией автомобилей LADA от&nbsp;завода АвтоВАЗ. Главная задача&nbsp;&mdash; безопасная, быстрая и&nbsp;приятная сделка для клиента.</h1>
        <ul class="clarification">
            <li>
                <div class="advantage">
                    <span class="value">500</span>
                    <span class="text" ref="text_04">авто с&nbsp;ПТС в&nbsp;наличии</span>
                    <span class="clarification-item">Подберем авто в&nbsp;нужной комплектации и&nbsp;цвете</span>
                </div>
            </li>
            <li>
                <div class="advantage">
                    <span class="value">12</span>
                    <span class="text" ref="text_01">банков-<br>партнеров</span>
                    <span class="clarification-item">Одобрим кредит (средний показатель&nbsp;&mdash; 98%)</span>
                </div>
            </li>
            <li>
                <div class="advantage">
                    <span class="value">15&nbsp;мин.</span>
                    <span class="text" ref="text_02">на&nbsp;одобрение кредита</span>
                    <span class="clarification-item">Сэкономим ваше время</span>
                </div>
            </li>
            <li>
                <div class="advantage">
                    <span class="value">1&nbsp;час</span>
                    <span class="text" ref="text_03">обмен авто на&nbsp;новенькую LADA</span>
                    <span class="clarification-item">Без лишних документов и&nbsp;долгого ожидания</span>
                </div>
            </li>

        </ul>
    </div>
</template>

<script>
export default {
    name: "Advantages",
    props: {
        dative: {
            default: '',
            type: String
        }
    },
    data: function () {
        return {
        }
    },
    components: {},
    methods: {
        alignBlocks() {
            const text_blocks = this.$refs
            let max_height = 0;

            for (const [key, value] of Object.entries(text_blocks)) {
                value.style.height = 'auto'
            }

            for (const [key, value] of Object.entries(text_blocks)) {
                if (value.clientHeight > max_height) {
                    max_height = value.clientHeight
                }
            }

            for (const [key, value] of Object.entries(text_blocks)) {
                value.style.height = max_height + 'px'
            }
        }
    },
    mounted () {
        this.alignBlocks()
    },
    created() {
        window.addEventListener('resize', this.alignBlocks)
    },
    destroyed () {
        window.removeEventListener('resize', this.alignBlocks)
    },
}
</script>

<style scoped lang="scss">
    ul.clarification {
        margin-bottom: 0;
    }
</style>
