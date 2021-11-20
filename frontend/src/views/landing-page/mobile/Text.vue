<template>
    <div class="text">
        <div class="overlap-group">
            <div class="title-2 valign-text-middle roboto-normal-black-16px">{{ $t(title) }}</div>
            <p class="p-2 valign-text-middle roboto-normal-black-12px">{{ $t(content) }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "Text",
    props: ["title", "content"],
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
    width: 100%;
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
