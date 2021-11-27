<template>
    <input class="color-picker" type="color">
</template>

<script>
export default {
    name: "ColorPicker",
}
</script>

<style scoped>
.color-picker {
    width: 80px;
    height: 80px;
    margin: 10px;
}

.color-picker:hover {
    cursor: pointer;
    opacity: 0.9;
}
</style>
