<template>
    <div :class="[`text-2`, className || ``]">
        <div class="overlap-group-1">
            <div class="t-2 valign-text-middle roboto-normal-black-20px">{{ t2 }}</div>
            <p class="p-2 valign-text-middle roboto-normal-black-16px">
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
    name: "Text2",
    props: ["t2", "className"],
};
</script>

<style scoped>
.text-2 {
    align-items: flex-start;
    display: flex;
    height: 320px;
    margin-top: 36px;
    min-width: 444px;
}

.overlap-group-1 {
    align-items: center;
    background-color: var(--white);
    border-radius: 5px;
    box-shadow: 0 8px 26px #00000040;
    display: flex;
    flex-direction: column;
    min-height: 320px;
    width: 440px;
}

.t-2 {
    height: 80px;
    letter-spacing: 2px;
    line-height: 80px;
    text-align: center;
    width: 440px;
}

.p-2 {
    height: 204px;
    letter-spacing: 1px;
    line-height: 25px;
    margin-left: 9.17px;
    width: 403px;
}

.text-2.text-2-1 {
    margin-left: 40px;
    margin-top: 40px;
}

.text-2.text-2-1 .p-2 {
    height: 200px;
}
</style>
