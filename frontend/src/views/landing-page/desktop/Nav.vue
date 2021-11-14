<template>
    <div class="nav">
        <h1 class="paint-shop valign-text-middle roboto-normal-white-24px">{{ paintShop }}</h1>
        <div class="create-paint valign-text-middle">{{ stwrzFarb }}</div>
    </div>
</template>

<script>
export default {
    name: "Nav",
    props: ["paintShop", "stwrzFarb"],
};
</script>

<style scoped>
.nav {
    align-items: flex-start;
    background-color: var(--teal-blue);
    display: flex;
    min-width: 1440px;
    padding: 0 240px;
    line-height: 80px;
}

.paint-shop {
    height: 80px;
    letter-spacing: 3px;
    text-align: center;
    width: 240px;
}

.create-paint {
    color: var(--white);
    font-family: var(--font-family-roboto);
    font-size: var(--font-size-xxl2);
    font-weight: 400;
    height: 80px;
    letter-spacing: 0;
    margin-left: 480px;
    text-align: center;
    width: 160px;
}
</style>
