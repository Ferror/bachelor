<template>
    <div class="color-spacer">
        <div class="colors">
            <div class="rectangle-27"></div>
            <div class="rectangle-25"></div>
            <div class="rectangle-22"></div>
            <div class="rectangle-21"></div>
            <div class="rectangle-19"></div>
            <div class="rectangle-20"></div>
            <div class="rectangle-23"></div>
            <div class="rectangle-24"></div>
            <div class="rectangle-26"></div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ColorSpacer',
};
</script>

<style>
.color-spacer {
    background-color: var(--white);
    display: flex;
    height: 160px;
    margin-top: 80px;
    width: 100%;
}

.colors {
    display: flex;
    width: 840px;
    margin: 40px auto;
}

.rectangle-27 {
    background-color: var(--khaki);
    border-radius: 50px;
    height: 40px;
    margin-top: 21px;
    width: 40px;
}

.rectangle-26 {
    background-color: var(--black-coral-pearl);
    border-radius: 50px;
    height: 40px;
    margin-left: 40px;
    margin-top: 21px;
    width: 40px;
}

.rectangle-25 {
    background-color: var(--banana);
    border-radius: 50px;
    height: 50px;
    margin-left: 40px;
    margin-top: 15px;
    width: 50px;
}

.rectangle-24 {
    background-color: var(--deep-cove);
    border-radius: 50px;
    height: 50px;
    margin-left: 40px;
    margin-top: 15px;
    width: 50px;
}

.rectangle-22 {
    background-color: var(--carrot-orange);
    border-radius: 50px;
    height: 60px;
    margin-left: 40px;
    margin-top: 10px;
    width: 60px;
}

.rectangle-23 {
    background-color: var(--jacarta);
    border-radius: 50px;
    height: 60px;
    margin-left: 40px;
    margin-top: 10px;
    width: 60px;
}

.rectangle-21 {
    background-color: var(--salmon-pearl);
    border-radius: 50px;
    height: 70px;
    margin-left: 40px;
    margin-top: 5px;
    width: 70px;
}

.rectangle-20 {
    background-color: var(--indigo);
    border-radius: 50px;
    height: 70px;
    margin-left: 40px;
    margin-top: 5px;
    width: 70px;
}

.rectangle-19 {
    background-color: var(--fuchsia-pink);
    border-radius: 50px;
    height: 80px;
    margin-left: 40px;
    width: 80px;
}
</style>
