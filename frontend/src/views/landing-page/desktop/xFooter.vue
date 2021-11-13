/******************************************
*  src/components/xFooter.vue
******************************************/

<template>
    <div class="footer">
        <div class="overlap-group-2">
            <div class="flex-col">
                <div class="paint-shop-inc valign-text-middle roboto-normal-white-24px-2">
                    Paint Shop inc.
                </div>
                <div class="flex-row roboto-normal-white-18px">
                    <div class="contact-us valign-text-middle">Contact Us</div>
                    <div class="about-us valign-text-middle">About US</div>
                </div>
            </div>
            <div class="flex-row-1 roboto-normal-white-16px">
                <div class="flex-col-1">
                    <div class="flex-col-item valign-text-middle">+48 333 444 555</div>
                    <div class="flex-col-item valign-text-middle">email@gmail.com</div>
                </div>
                <p class="text-2">
                    Paint Shop inc. was created to enable your creativity and freedom of choosing paint colors.
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "xFooter",
};
</script>

<style>
.footer {
    align-items: flex-start;
    align-self: flex-start;
    display: flex;
    height: 240px;
    margin-top: 40px;
    min-width: 1452px;
}

.overlap-group-2 {
    align-items: center;
    background-color: var(--heavy-metal);
    display: flex;
    flex-direction: column;
    min-height: 240px;
    width: 1440px;
}

.flex-col {
    align-items: center;
    display: flex;
    flex-direction: column;
    min-height: 120px;
    width: 800px;
}

.paint-shop-inc {
    height: 80px;
    letter-spacing: 3.6px;
    text-align: center;
    width: 320px;
}

.flex-row {
    align-items: flex-start;
    display: flex;
    min-width: 800px;
}

.contact-us {
    height: 40px;
    letter-spacing: 2.7px;
    width: 400px;
}

.about-us {
    height: 40px;
    letter-spacing: 2.7px;
    text-align: right;
    width: 400px;
}

.flex-row-1 {
    align-items: flex-end;
    display: flex;
    height: 80px;
    min-width: 800px;
}

.flex-col-1 {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    min-height: 80px;
    width: 400px;
}

.flex-col-item {
    height: 40px;
    letter-spacing: 1.6px;
    width: 400px;
}

.text-2 {
    letter-spacing: 1.6px;
    margin-left: 80px;
    min-height: 75px;
    text-align: right;
    width: 320px;
}
</style>
