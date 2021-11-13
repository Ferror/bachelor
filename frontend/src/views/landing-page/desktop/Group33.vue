/******************************************
*  src/components/Group33.vue
******************************************/

<template>
    <div class="group-33">
        <div class="group-37">
            <div class="pomaluj-swj-wiat valign-text-middle roboto-normal-black-24px">
                {{ pomalujSwjWiat }}
            </div>
            <div class="text-1 valign-text-middle roboto-normal-black-18px">{{ text7 }}</div>
        </div>
        <img
            class="group-38"
            data-id="55:1219"
            src="group-38.svg"
        />
    </div>
</template>

<script>
export default {
    name: "Group33",
    components: {
    },
    props: ["pomalujSwjWiat", "text7", "stylePrimaryStateDefaultIconFalseCi"],
};
</script>

<style>
.group-33 {
    align-items: flex-start;
    display: flex;
    height: 327px;
    margin-right: 59.54px;
    margin-top: 80px;
    min-width: 900px;
}

.group-37 {
    align-items: center;
    display: flex;
    flex-direction: column;
    min-height: 302px;
    position: relative;
    width: 484px;
}

.pomaluj-swj-wiat {
    height: 80px;
    letter-spacing: 0;
    margin-right: 4px;
    text-align: center;
    width: 480px;
}

.text-1 {
    height: 160px;
    letter-spacing: 0.9px;
    line-height: 23px;
    margin-right: 4px;
    width: 480px;
}

.group-38 {
    align-self: flex-end;
    height: 322px;
    margin-bottom: -0.18px;
    margin-left: 147px;
    width: 276px;
}
</style>
