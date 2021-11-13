/******************************************
*  src/components/PaintResult.vue
******************************************/

<template>
    <div class="paint-result border-1px-black">
        <div class="overlap-group-1">
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

<style>
.paint-result {
    align-items: flex-start;
    background-color: var(--white);
    box-shadow: 0px 8px 26px
    #00000040;
    display: flex;
    flex-direction: column;
    min-height: 226px;
    width: 154px;
}

.overlap-group-1 {
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
    top: 24px;
    width: 143px;
}

.rectangle-14 {
    height: 170px;
    margin-left: 1.87px;
    margin-top: 3px;
    width: 149px;
}
</style>
