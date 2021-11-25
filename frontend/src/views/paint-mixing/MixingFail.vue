<template>
    <div>
        <img class="bucket" src="@/assets/bucket-fail.svg" alt="Bucket loader">
        <h2>The error occurred</h2>
        <p>{{ message }}</p>
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
</style>
