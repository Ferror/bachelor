<template>
    <div :class="[className]">
        <div class="base border-1px-black">
            <img
                v-if="lock"
                class="lock"
                alt="Locked base color"
                :src="require('@/assets/' + lock + '.png')"
            />
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
.dark-grey .base {
    background-color: #444444;
}

.white .base {
    background-color: #ffffff;
}

.white .base:hover {
    background-color: #eeeeee;
}

.grey .base {
    background-color: #888888;
}

.black .base {
    background-color: #000000;
}

.light-grey .base {
    background-color: #cccccc;
}

.base {
    display: flex;
    width: 80px;
    height: 80px;
    justify-content: center;
    align-items: center;
    margin: 10px;
}

.base:hover {
    cursor: pointer;
    opacity: 0.9;
}

.lock {
    height: 34px;
    width: 24px;
}

.caption {
    height: 20px;
    letter-spacing: 1px;
    text-align: center;
    width: 100%;
}
</style>
