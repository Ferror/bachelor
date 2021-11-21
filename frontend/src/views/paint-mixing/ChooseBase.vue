<template>
    <div class="bases">
        <BaseColor
            class-name="white"
            lock=""
            caption="White"
            @click="addBase(colors.white)"
        />
        <BaseColor
            class-name="light-grey"
            lock="lock-black"
            caption="Light Grey"
        />
        <BaseColor
            class-name="grey"
            lock="lock-white"
            caption="Grey"
        />
        <BaseColor
            class-name="dark-grey"
            lock="lock-white"
            caption="Dark Grey"
        />
        <BaseColor
            class-name="black"
            lock="lock-white"
            caption="Black"
        />
    </div>
</template>

<script>
import BaseColor from "./BaseColor";

export default {
    name: "ChooseBase",
    components: {
        BaseColor,
    },
    data: function () {
        return {
            colors: {
                white: {
                    r: 255,
                    g: 255,
                    b: 255,
                },
            },
        };
    },
    methods: {
        addBase: function (color) {
            this.$store.commit('PaintMixingNextStep', this.$store.state.paintMixing.steps.chooseColor);
            this.$store.commit('PaintMixingAddColor', color);
        }
    },
}
</script>

<style scoped>
.bases {
    display: flex;
    justify-content: space-between;
    width: 460px;
}
</style>
