<template>
    <div class="paint-result border-1px-black">
        <div class="overlap-group-2">
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
    align-items: flex-start;
    background-color: var(--white);
    box-shadow: 0 8px 26px #00000040;
    display: flex;
    flex-direction: column;
    margin-left: 166px;
    margin-top: 87px;
    min-height: 226px;
    width: 154px;
}

.overlap-group-2 {
    height: 31px;
    position: relative;
    width: 154px;
}

.your-color-name {
    height: 31px;
    left: 0;
    letter-spacing: 0;
    position: absolute;
    text-align: center;
    top: 0;
    width: 154px;
}

.line-3 {
    height: 2px;
    left: 6px;
    position: absolute;
    top: 25px;
    width: 142px;
}

.rectangle-14 {
    height: 170px;
    margin-left: 2px;
    margin-top: 3px;
    width: 148px;
}
</style>
