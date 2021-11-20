<template>
    <div>
        <div class="overlap-group-1">
            <div class="t-2 valign-text-middle roboto-normal-black-20px">{{ translate(title) }}</div>
            <p class="p-2 valign-text-middle roboto-normal-black-16px">{{ translate(content) }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "Text",
    props: ["title", "content"],
    methods: {
        translate: (phrase) => phrase
    }
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
    box-shadow: var(--box-shadow);
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
    margin-left: 9px;
    width: 403px;
}

.text-2.text-2-1 .p-2 {
    height: 200px;
}
</style>
