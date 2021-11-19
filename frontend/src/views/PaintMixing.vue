<template>
    <choose-base />
</template>

<script>
import ChooseBase from "@/views/paint-mixing/ChooseBase";
import PaintMixerClient from "@/clients/PaintMixerClient";

PaintMixerClient.mix();

export default {
    name: "PaintMixing",
    components: {
        ChooseBase,
    },
}
</script>

<style scoped src="@/assets/paint-mixing.css"></style>
