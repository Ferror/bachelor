<template>
    <div class="bases">
        <BaseColor
            v-for="base in this.$store.getters.GetAvailableBases"
            :key="base.name"
            :class-name="base.name"
            :caption="base.caption"
            @click="addBase(base.name)"
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
    methods: {
        addBase: function (color) {
            this.$store.commit('PaintMixingNextStep', 1);
            this.$store.commit('PaintMixingAddBase', color);
        }
    },
}
</script>

<style scoped>
.bases {
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
}
</style>
