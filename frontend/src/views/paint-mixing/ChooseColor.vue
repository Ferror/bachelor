<template>
    <MixingLoader v-if="loader" />
    <MixingSuccess v-if="mixSuccess" />
    <MixingFail v-if="mixFail" message="The backend service failed" />

    <div style="width: 100%;" v-if="loader === false && mixSuccess === false && mixFail === false">
        <div class="choose-color">
            <BaseColor
                :class-name="base.name"
                :lock="base.lock"
                :caption="base.caption"
            />

            <Plus />

            <div>
                <ColorPicker />
                <div style="height: 20px;"></div>
            </div>

            <Plus v-if="activeSecondColor && visible" />

            <div v-if="activeSecondColor && visible" style="display: flex;flex-direction: column;">
                <ColorPicker />
                <Button v-if="true" label="Remove" class="p-button-sm p-button-text" style="height: 20px;" @click="removeColorPicker()" />
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
import MixingFail from "./MixingFail";
import MixingLoader from "./MixingLoader";
import MixingSuccess from "./MixingSuccess";
import Plus from "./Plus";
import client from "@/clients/PaintMixerClient";
import RedGreenBlue from "@/models/RedGreenBlue";

export default {
    name: "ChooseColor",
    components: {
        MixingSuccess,
        MixingLoader,
        MixingFail,
        BaseColor,
        ColorPicker,
        Plus,
    },
    data: function () {
        return {
            base: this.$store.state.configuration.base,
            activeSecondColor: false,
            loader: false,
            mixSuccess: false,
            mixFail: false,
            visible: true,
        };
    },
    methods: {
        removeColorPicker: function () {
            this.visible = false;
            this.activeSecondColor = false;
            document.getElementById("add-color-button").style.display = 'block';
        },
        addColorPicker: function () {
            if (this.activeSecondColor) {
                return;
            }

            this.visible = true;
            this.activeSecondColor = true;
            document.getElementById("add-color-button").style.display = 'none';
        },
        mixColors: async function () {
            this.loader = true;

            const colors = [];

            document.querySelectorAll('.color-picker').forEach((picker) => {
                const hex = picker.value;
                const r = parseInt(hex.slice(1, 3), 16) / 255;
                const g = parseInt(hex.slice(3, 5), 16) / 255;
                const b = parseInt(hex.slice(5, 7), 16) / 255;

                colors.push(new RedGreenBlue(r, g, b));
            });

            const base = this.$store.state.configuration.base.model;

            colors.push(
                new RedGreenBlue(
                    base.r / 255,
                    base.g / 255,
                    base.b / 255,
                )
            );

            try {
                const response = await this.sleep(function () {
                    return client.mixColors(colors);
                });

                let color = response.data;

                this.loader = false;
                this.mixSuccess = true;
                this.mixFail = false;

                color = await this.sleep(function () {
                    return {
                        r: Math.floor(color.r * 255),
                        g: Math.floor(color.g * 255),
                        b: Math.floor(color.b * 255),
                    };
                })

                this.mixSuccess = false;
                this.$store.commit('PaintMixingNextStep', 2);
                this.$store.commit('PaintMixingPresentResult', color);
            } catch (error) {
                this.loader = false;
                this.mixSuccess = false;
                this.mixFail = true;
            }
        },
        sleep: async function (callback) {
            return new Promise((resolve) => {
                setTimeout(() => {
                    resolve(callback());
                }, 1000);
            });
        },
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
