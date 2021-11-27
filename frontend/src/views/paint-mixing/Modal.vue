<template>
    <div class="container-center-horizontal">
        <div class="choose-base-color">
            <h1 class="title valign-text-middle roboto-normal-white-24px">Paint Shop</h1>

            <div class="modal">
                <div class="modal-header">
                    <div class="modal-title">
                        <h2 class="title-2 valign-text-middle roboto-normal-black-20px">
                            {{ title }}
                        </h2>
                    </div>
                    <div class="modal-close">
                        <router-link to="/">
                            <a @click="this.$store.commit('PaintMixingRestartFlow')" style="height: 25px;">
                                <img
                                    class="symbol-x"
                                    src="@/assets/symbol-x.png"
                                    alt="Close modal"
                                />
                            </a>
                        </router-link>
                    </div>
                </div>

                <div class="modal-content" style="position: relative;">
                    <ChooseBase v-if="currentStep.name === 'choose-base'" />
                    <ChooseColor v-if="currentStep.name === 'choose-color'" />
                    <Result v-if="currentStep.name === 'present-result'" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ChooseBase from "./ChooseBase";
import ChooseColor from "./ChooseColor";
import Result from "./Result";

export default {
    name: "Modal",
    components: {
        Result,
        ChooseBase,
        ChooseColor,
    },
    props: ["title", "currentStep", "steps"],
    methods: {},
};
</script>

<style scoped>
.modal {
    align-items: flex-start;
    background-color: var(--desert-storm);
    border-radius: 5px;
    box-shadow: var(--box-shadow);
    display: flex;
    height: 470px;
    width: 740px;
    position: relative;
    margin: 100px auto;
    flex-direction: column;
    padding: 15px;
}

.modal-header {
    height: 45px;
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.modal-close {
    background-color: var(--mist-gray);
    border-radius: 50%;
    display: flex;
    height: 45px;
    width: 45px;
    justify-content: center;
    align-items: center;
}

.title-2 {
    letter-spacing: 2px;
}

.symbol-x {
    height: 25px;
    width: 25px;
}

.modal-title {
    display: flex;
    height: 75px;
    margin-left: 10px;
}

.modal-content {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}

.container-center-horizontal {
    display: flex;
    flex-direction: row;
    justify-content: center;
    width: 100%;
    min-height: 100vh;
}

.valign-text-middle {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.choose-base-color {
    align-items: flex-start;
    background-color: var(--teal-blue);
    display: flex;
    width: 100%;
}

.title {
    height: 80px;
    letter-spacing: 3px;
    text-align: center;
    width: 240px;
    position: absolute;
}
</style>
