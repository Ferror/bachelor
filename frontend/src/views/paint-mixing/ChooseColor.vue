<template>
    <MixingLoader v-if="loader" />

    <MixingSuccess v-if="mixSuccess" />
    <MixingFail v-if="mixFail" />

    <Result v-if="mixResult" :color="color" />

    <div style="width: 100%;" v-if="loader === false && mixSuccess === false && mixFail === false && mixResult === false">
        <div class="choose-color">
            <BaseColor
                :class-name="base.name"
                :lock="base.lock"
                :caption="base.caption"
            />

            <Plus />

            <ColorPicker :removable="false" />

            <Plus v-if="activeSecondColor" />

            <ColorPicker v-if="activeSecondColor" :removable="true" />

            <Plus v-if="activeThirdColor" />

            <ColorPicker v-if="activeThirdColor" :removable="true" />
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
import Result from "./Result";
import RedGreenBlue from "@/models/RedGreenBlue";

export default {
    name: "ChooseColor",
    components: {
        Result,
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
            activeThirdColor: false,
            loader: false,
            mixSuccess: false,
            mixFail: false,
            mixResult: false,
            color: null,
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

                console.log(response.data.model);
                const color = response.data.model;

                this.loader = false;
                this.mixSuccess = true;
                this.mixFail = false;

                this.color = await this.sleep(function () {
                    return {
                        r: color.r * 255,
                        g: color.g * 255,
                        b: color.b * 255,
                    };
                })

                this.mixResult = true;
                this.mixSuccess = false;
            } catch (error) {
                console.log('error', error);
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
