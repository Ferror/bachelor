<template>
    <MixingLoader v-if="loader" />

    <MixingSuccess v-if="mixSuccess" />

    <div style="width: 100%;" v-if="loader === false && mixSuccess === false">
        <div class="choose-color">
            <BaseColor
                :class-name="base.name"
                :lock="base.lock"
                :caption="base.caption"
            />

            <div>
                <img src="@/assets/plus.svg" alt="plus">
            </div>

            <ColorPicker />

            <div v-if="activeSecondColor">
                <img src="@/assets/plus.svg" alt="plus">
            </div>

            <ColorPicker v-if="activeSecondColor" />

            <div v-if="activeThirdColor">
                <img src="@/assets/plus.svg" alt="plus">
            </div>

            <div v-if="activeThirdColor">
                <ColorPicker />
            </div>
        </div>

        <div style="margin-top: 30px;display: flex;justify-content: space-evenly;">
            <Button label="Mix" @click="mixColors()" />
            <Button label="Add Color" id="add-color-button" @click="addColorPicker()" />
        </div>
    </div>
</template>

<script>
import BaseColor from "./BaseColor";
import ColorPicker from "./ColorPicker";
import MixingLoader from "./MixingLoader";
import MixingSuccess from "./MixingSuccess";

export default {
    name: "ChooseColor",
    components: {
        MixingSuccess,
        MixingLoader,
        BaseColor,
        ColorPicker,
    },
    data: function () {
        return {
            base: this.$store.state.configuration.base,
            activeSecondColor: false,
            activeThirdColor: false,
            loader: false,
            mixSuccess: false,
        };
    },
    methods: {
        addColorPicker: function () {
            if (this.activeThirdColor) {
                document.getElementById("add-color-button").style.display = 'none';
                // do nothing
                return;
            }

            if (this.activeSecondColor) {
                //add third
                this.activeThirdColor = true;
                document.getElementById("add-color-button").style.display = 'none';

                return;
            }

            this.activeSecondColor = true;
        },
        mixColors: async function () {
            this.loader = true;

            const response = await this.sendBackendRequest();

            this.loader = !response
            this.mixSuccess = response;
        },
        sendBackendRequest: function () {
            return new Promise(resolve => {
                setTimeout(() => {
                    resolve(true);
                }, 2500);
            });
        }
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
