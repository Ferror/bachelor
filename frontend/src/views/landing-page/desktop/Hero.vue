<template>
    <div class="hero">
        <div class="group-37">
            <h1 class="t-1 valign-text-middle">{{ $t('landing.hero.title') }}</h1>
            <p class="p-1 valign-text-middle">{{ $t('landing.hero.content') }}</p>
            <div style="text-align: center; margin-top: 25px;">
                <router-link to="/mixing">
                    <Button label="Create Color" class="p-button-lg" />
                </router-link>
            </div>
        </div>
        <img class="group-38" src="@/assets/bucket-drop.svg" />
    </div>
</template>

<script>
export default {
    name: "Hero"
}
</script>

<style scoped>
.hero {
    display: flex;
    height: 480px;
    width: 960px;
    margin:  0 auto;
}

.group-37 {
    display: flex;
    flex-direction: column;
    height: 480px;
    width: 50%;
    justify-content: center;
}

.group-38 {
    display: flex;
    width: 50%;
    height: 480px;
}

.t-1 {
    color: var(--black);
    font-family: var(--font-family-roboto);
    font-size: var(--font-size-xxxxl);
    font-weight: 400;
    height: 80px;
    letter-spacing: 3px;
    text-align: center;
    width: 480px;
    line-height: 80px;
}

.p-1 {
    color: var(--black);
    font-family: var(--font-family-roboto);
    font-size: var(--font-size-xxl);
    font-weight: 400;
    height: 160px;
    letter-spacing: 2px;
    line-height: 25px;
    width: 480px;
}
</style>
