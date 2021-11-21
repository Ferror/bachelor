<template>
    <div>
        <img class="bucket" src="@/assets/bucket.svg" alt="Bucket loader">
    </div>
</template>

<script>
export default {
    name: "MixingLoader"
}
</script>

<style scoped>
@keyframes shake-animation {
    0% { transform: rotate(50deg); }
    50% { transform: rotate(-50deg); }
    100% { transform: rotate(50deg); }
}

.bucket {
    animation: shake-animation 2.5s ease-in-out infinite;
}
</style>
