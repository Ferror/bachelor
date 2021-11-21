<template>
    <div style="display: flex;flex-direction: column;">
        <input style="width: 80px; height: 80px;" class="color-picker" type="color">
        <Button v-if="removable" label="Remove" class="p-button-sm p-button-text" style="height: 20px;" />
        <div v-if="!removable" style="height: 20px;"></div>
    </div>
</template>

<script>
export default {
    name: "ColorPicker",
    props: {
        removable: Boolean
    },
}
</script>
