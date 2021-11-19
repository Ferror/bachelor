<template>
    <div class="color-spacer">
        <div class="colors">
            <div class="color"></div>
            <div class="color-1"></div>
            <div class="color-2"></div>
            <div class="color-3"></div>
            <div class="color-4"></div>
            <div class="color-5"></div>
            <div class="color-6"></div>
            <div class="color-7"></div>
            <div class="color-8"></div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ColorSpacer",
};
</script>

<style scoped>
.color-spacer {
    background-color: var(--white);
    display: flex;
    height: 75px;
    width: 375px;
}

.colors {
    display: flex;
    margin-left: 7px;
    margin-top: 19px;
    width: 360px;
}

.color {
    background-color: var(--khaki);
    border-radius: 50px;
    height: 18px;
    margin-top: 10px;
    width: 18px;
}

.color-1 {
    background-color: var(--banana);
    border-radius: 50px;
    height: 22px;
    margin-left: 16px;
    margin-top: 7px;
    width: 22px;
}

.color-2 {
    background-color: var(--carrot-orange);
    border-radius: 50px;
    height: 27px;
    margin-left: 16px;
    margin-top: 5px;
    width: 27px;
}

.color-3 {
    background-color: var(--salmon-pearl);
    border-radius: 50px;
    height: 31px;
    margin-left: 16px;
    margin-top: 2.2px;
    width: 31px;
}

.color-4 {
    background-color: var(--fuchsia-pink);
    border-radius: 50px;
    height: 36px;
    margin-left: 16px;
    width: 36px;
}

.color-5 {
    background-color: var(--indigo);
    border-radius: 50px;
    height: 31px;
    margin-left: 16px;
    margin-top: 2px;
    width: 31px;
}

.color-6 {
    background-color: var(--jacarta);
    border-radius: 50px;
    height: 27px;
    margin-left: 16px;
    margin-top: 5px;
    width: 27px;
}

.color-7 {
    background-color: var(--deep-cove);
    border-radius: 50px;
    height: 22px;
    margin-left: 16px;
    margin-top: 7px;
    width: 22px;
}

.color-8 {
    background-color: var(--black-coral-pearl);
    border-radius: 50px;
    height: 18px;
    margin-left: 16px;
    margin-top: 9px;
    width: 18px;
}
</style>
