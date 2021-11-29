<template>
    <div style="text-align: center;">
        <img class="bucket" src="@/assets/bucket-fail.svg" alt="Bucket loader">
        <h2 class="t-2 valign-text-middle roboto-normal-black-20px">The error occurred</h2>
        <p class="p-2 roboto-normal-black-12px">{{ message }}</p>
    </div>
</template>

<script>
export default {
    name: "MixingFail",
    props: {
        message: String,
    }
}
</script>

<style scoped>
.t-2 {
    letter-spacing: 2px;
    line-height: 40px;
    text-align: center;
}

.p-2 {
    letter-spacing: 1px;
    line-height: 25px;
}
</style>
