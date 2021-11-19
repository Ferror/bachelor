<template>
    <div :class="[`text`, className || ``]">
        <div class="overlap-group">
            <div class="title-2 valign-text-middle roboto-normal-black-16px">{{ title2 }}</div>
            <p class="p-2 valign-text-middle roboto-normal-black-12px">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu nibh aliquet gravida at mauris ut id commodo. Eu,
                adipiscing sit et venenatis vitae in pellentesque. Id elementum quam tellus porttitor neque, arcu porta orci
                vitae. Purus tellus arcu sem quam suspendisse. Nisi adipiscing interdum vestibulum, tellus non urna. Ornare
                vitae hendrerit a est massa neque sem rhoncus, scelerisque.
            </p>
        </div>
    </div>
</template>

<script>
export default {
    name: "Text",
    props: ["title2", "className"],
};
</script>

<style scoped>
.text {
    align-items: flex-start;
    display: flex;
    height: 300px;
    min-width: 379px;
}

.overlap-group {
    align-items: center;
    background-color: var(--desert-storm);
    display: flex;
    flex-direction: column;
    min-height: 300px;
    width: 375px;
}

.title-2 {
    height: 75px;
    letter-spacing: 2px;
    text-align: center;
    width: 375px;
}

.p-2 {
    height: 202px;
    letter-spacing: 1px;
    line-height: 20px;
    width: 345px;
}

.text.text-1 {
    margin-top: 37px;
}

.text.text-1 .p-2 {
    height: 187px;
}
</style>
