/******************************************
*  src/components/XNav.vue
******************************************/

<template>
    <div class="nav">
        <div class="overlap-group1-1">
            <h1 class="title valign-text-middle roboto-normal-white-24px">{{ paintShop }}</h1>
            <div class="stwrz-farb valign-text-middle roboto-normal-white-18px-2">{{ stwrzFarb }}</div>
        </div>
    </div>
</template>

<script>
export default {
    name: "XNav",
    props: ["paintShop", "stwrzFarb"],
};
</script>

<style>
.nav {
    align-items: flex-start;
    display: flex;
    margin-left: 4px;
    min-width: 1444px;
}

.overlap-group1-1 {
    align-items: flex-start;
    background-color: var(--teal-blue);
    display: flex;
    min-width: 1440px;
    padding: 0 240px;
}

.title {
    height: 80px;
    letter-spacing: 3.6px;
    text-align: center;
    width: 240px;
}

.stwrz-farb {
    height: 80px;
    letter-spacing: 0;
    margin-left: 480px;
    text-align: center;
    width: 160px;
}
</style>
