<template>
    <div class="modal">
        <div class="overlap-group">
            <div class="group-30">
                <img
                    class="symbol-x"
                    src="@/assets/symbol-x.png"
                />
            </div>
            <div class="group-29">
                <div class="lorem-ipsum-title-mo valign-text-middle roboto-normal-black-20px">
                    {{ title }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal",
    props: ["title"],
};
</script>

<style scoped>
.modal {
    align-items: flex-start;
    background-color: var(--desert-storm);
    border-radius: 5px;
    box-shadow: 0 8px 26px #0000004c;
    display: flex;
    height: 510px;
    left: 0;
    min-width: 750px;
    position: absolute;
    top: 0;
}

.overlap-group {
    height: 75px;
    position: relative;
    width: 752px;
}

.group-30 {
    background-color: var(--mist-gray);
    border-radius: 23px;
    display: flex;
    height: 45px;
    left: 690px;
    position: absolute;
    top: 15px;
    width: 45px;
}

.symbol-x {
    height: 25px;
    margin-left: 10px;
    margin-top: 10px;
    width: 25px;
}

.group-29 {
    display: flex;
    height: 75px;
    left: 0;
    position: absolute;
    top: 0;
    width: 752px;
}

.lorem-ipsum-title-mo {
    flex: 1;
    letter-spacing: 0;
    margin-left: 9.97%;
    margin-right: 10.24%;
    width: 600px;
}
</style>
