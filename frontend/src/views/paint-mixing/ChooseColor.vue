<template>
    <div class="choose-color">
        <BaseColor
            class-name="light-grey"
            lock=""
            caption="Light Grey"
        />

        <div>
            <img src="@/assets/plus.svg" alt="plus">
        </div>

        <Button label="Choose Color" />
    </div>
</template>

<script>
import BaseColor from "./BaseColor";

export default {
    name: "ChooseColor",
    components: {
        BaseColor
    },
};
</script>

<style scoped>
.choose-color {
    display: flex;
    width: 100%;
    justify-content: space-around;
    align-items: center;
}

</style>
