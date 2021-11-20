<template>
    <div :class="[className]">
        <div class="overlap-group border-1px-black">
            <img v-if="lock" class="lock" alt="Locked base color" :src="require('@/assets/' + lock + '.png')" />
        </div>
        <div class="caption valign-text-middle roboto-normal-black-12px">{{ caption }}</div>
    </div>
</template>

<script>
export default {
    name: "BaseColor",
    props: [
        "lock",
        "caption",
        "className"
    ],
};
</script>

<style scoped>
.dark-grey .overlap-group {
    background-color: #444444;
}

.white .overlap-group {
    background-color: #ffffff;
}

.grey .overlap-group {
    background-color: #888888;
}

.black .overlap-group {
    background-color: #000000;
}

.overlap-group {
    background-color: #cccccc;
    display: flex;
    width: 80px;
    height: 80px;
    justify-content: center;
    align-items: center;
}

.lock {
    height: 34px;
    width: 24px;
}

.caption {
    height: 15px;
    letter-spacing: 1px;
    margin-top: 6px;
    text-align: center;
    width: 75px;
}
</style>
