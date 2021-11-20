<template>
    <Modal
        title="Choose base color"
        :currentStep="currentStep"
        :steps="steps"
    />
</template>

<script>
import Modal from "./paint-mixing/Modal";

// import PaintMixerClient from "@/clients/PaintMixerClient";
// PaintMixerClient.mix();

export default {
    name: "PaintMixing",
    components: {
        Modal,
    },
    data: () => {
        const steps = {
            chooseBase: "choose-base",
            chooseColor: "choose-color",
        };

        return {
            steps: steps,
            currentStep: steps.chooseColor,
        }
    }
}
</script>

<style src="@/assets/style.css"></style>
