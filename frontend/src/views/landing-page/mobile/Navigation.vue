<template>
    <div class="nav">
        <div class="content">
            <div class="paint-shop valign-text-middle">PAINT SHOP</div>
            <router-link to="/mixing">
                <a class="create-paint valign-text-middle">{{ translate("Create Paint") }}</a>
            </router-link>
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
    background-color: var(--teal-blue);
    align-items: flex-start;
    display: flex;
    min-width: 379px;
}

.content {
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.paint-shop {
    color: var(--white);
    font-family: var(--font-family-roboto);
    font-size: var(--font-size-xxxl);
    font-weight: 400;
    height: 75px;
    letter-spacing: 3px;
    text-align: center;
    width: 160px;
}

.create-paint {
    color: var(--white);
    display: block;
    font-family: var(--font-family-roboto);
    font-size: var(--font-size-l);
    font-weight: 400;
    height: 75px;
    letter-spacing: 2px;
    text-align: center;
    width: 135px;
    line-height: 75px;
}

.create-paint:hover {
    cursor: pointer;
    opacity: 0.9;
    text-decoration: underline;
    text-underline-offset: 10px;
}
</style>
