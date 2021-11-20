<template>
    <div class="footer">
        <div class="overlap-group">
            <div class="flex-col-1">
                <div class="paint-shop-inc valign-text-middle roboto-normal-white-24px-2 t-2">
                    PAINT SHOP INC.
                </div>
                <div class="flex-row roboto-normal-white-18px">
                    <div class="contact-us valign-text-middle">{{ $t('footer.contactUs') }}</div>
                    <div class="about-us valign-text-middle">{{ $t('footer.aboutUs') }}</div>
                </div>
            </div>
            <div class="flex-row-1 roboto-normal-white-16px">
                <div class="flex-col-2">
                    <div class="flex-col-item valign-text-middle">{{ $t('footer.phone') }}</div>
                    <div class="flex-col-item valign-text-middle">{{ $t('footer.email') }}</div>
                </div>
                <p class="text-1">{{ $t('footer.aboutUsContent') }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Footer',
}
</script>

<style scoped>
.footer {
    align-items: flex-start;
    display: flex;
    height: 240px;
    width: 100%;
}

.overlap-group {
    align-items: center;
    background-color: var(--heavy-metal);
    display: flex;
    flex-direction: column;
    min-height: 240px;
    width: 100%;
}

.flex-col-1 {
    align-items: center;
    display: flex;
    flex-direction: column;
    min-height: 120px;
    width: 800px;
}

.paint-shop-inc {
    height: 80px;
    letter-spacing: 3px;
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
    letter-spacing: 3px;
    width: 400px;
}

.about-us {
    height: 40px;
    letter-spacing: 3px;
    text-align: right;
    width: 400px;
}

.flex-row-1 {
    align-items: flex-end;
    display: flex;
    height: 80px;
    min-width: 800px;
}

.flex-col-2 {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    min-height: 80px;
    width: 400px;
}

.flex-col-item {
    height: 40px;
    letter-spacing: 2px;
    width: 400px;
}

.text-1 {
    letter-spacing: 2px;
    margin-left: 80px;
    min-height: 75px;
    text-align: right;
    width: 320px;
}
</style>
