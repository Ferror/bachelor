<template>
    <div class="nav">
        <div class="content">
            <h1 class="paint-shop valign-text-middle roboto-normal-white-24px">PAINT SHOP</h1>
            <a class="create-paint valign-text-middle">{{ translate("Create Paint") }}</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "Navigation",
    methods: {
        translate: (phrase) => phrase
    }
};
</script>

<style scoped>
.nav {
    align-items: flex-start;
    background-color: var(--teal-blue);
    display: flex;
    line-height: 80px;
    width: 100%;
}

.content {
    display: flex;
    margin: 0 auto;
    width: 960px;
    justify-content: space-between;
}

.paint-shop {
    height: 80px;
    letter-spacing: 3px;
    text-align: center;
    text-transform: uppercase;
    width: 240px;
}

.create-paint {
    color: var(--white);
    display: block;
    font-family: var(--font-family-roboto);
    font-size: var(--font-size-xxl);
    font-weight: 400;
    height: 80px;
    letter-spacing: 2px;
    text-align: center;
    width: 160px;
}

.create-paint:hover {
    cursor: pointer;
    opacity: 0.9;
    text-decoration: underline;
    text-underline-offset: 10px;
}
</style>
