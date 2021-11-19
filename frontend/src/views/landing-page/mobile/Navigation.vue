<template>
    <div class="nav">
        <div class="overlap-group5">
            <div class="paint-shop valign-text-middle" v-html="paintshop"></div>
            <div class="create-paint valign-text-middle">{{ stwrzFarb }}</div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Navigation",
    props: ["paintshop", "stwrzFarb"],
};
</script>

<style scoped>
.nav {
    align-items: flex-start;
    display: flex;
    min-width: 379px;
}

.overlap-group5 {
    align-items: flex-start;
    background-color: var(--teal-blue);
    display: flex;
    min-width: 375px;
}

.paint-shop {
    color: var(--white);
    font-family: var(--font-family-roboto);
    font-size: var(--font-size-xxxl);
    font-weight: 400;
    height: 75px;
    letter-spacing: 3px;
    text-align: center;
    width: 80px;
}

.create-paint {
    color: var(--white);
    display: block;
    font-family: var(--font-family-roboto);
    font-size: var(--font-size-l);
    font-weight: 400;
    height: 75px;
    letter-spacing: 2px;
    margin-left: 160px;
    text-align: center;
    width: 135px;
}
</style>
