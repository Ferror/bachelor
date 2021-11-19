<template>
    <div class="paint-result border-1px-black">
        <div class="overlap-group2">
            <div class="your-color-name valign-text-middle roboto-bold-black-12px">
                {{ yourColorName }}
            </div>
            <img class="line-3" :src="line3" />
        </div>
        <img class="rectangle-14" :src="rectangle14" />
    </div>
</template>

<script>
export default {
    name: "PaintResult",
    props: ["yourColorName", "line3", "rectangle14"],
};
</script>

<style scoped>
.paint-result {
    align-items: center;
    background-color: var(--white);
    border-radius: 5px;
    box-shadow: var(--box-shadow);
    display: flex;
    flex-direction: column;
    margin-left: 110px;
    margin-top: 37px;
    min-height: 226px;
    width: 154px;
}

.overlap-group2 {
    height: 30px;
    position: relative;
    width: 154px;
}

.your-color-name {
    height: 30px;
    left: 0;
    letter-spacing: 0;
    position: absolute;
    text-align: center;
    top: 0;
    width: 154px;
}

.line-3 {
    height: 2px;
    left: 8px;
    position: absolute;
    top: 24px;
    width: 139px;
}

.rectangle-14 {
    height: 181px;
    margin-right: 2px;
    width: 139px;
}
</style>
