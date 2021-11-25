<template>
    <Modal
        :title="this.$store.getters.GetCurrentStep.title"
        :currentStep="this.$store.getters.GetCurrentStep"
    />
</template>

<script>
import Modal from "@/views/paint-mixing/Modal";

export default {
    name: "PaintMixing",
    components: {
        Modal,
    },
}
</script>

<style src="@/assets/style.css"></style>
