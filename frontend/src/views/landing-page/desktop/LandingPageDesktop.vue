<template>
    <div class="landing-page-desktop screen">
        <Navigation />
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

        <ColorSpacer />

        <div class="flex-col">
            <div class="text" style="margin: 40px 0;">
                <Text title="landing.shareSection.title" content="landing.shareSection.content" />
                <div class="group-39" style="display: flex; justify-content: center; align-items: center;">
                    <img class="group" src="@/assets/social-group.svg" alt="" />
                </div>
            </div>

            <div class="text" style="margin: 40px 0;">
                <PaintResult />
                <Text title="landing.paintSection.title" content="landing.paintSection.content"  />
            </div>
        </div>
        <Footer />
    </div>
</template>

<script>
import Navigation from "./Navigation";
import ColorSpacer from "./ColorSpacer";
import Text from "./Text";
import PaintResult from "./PaintResult";
import Footer from "./Footer";

export default {
    name: "LandingPageDesktop",
    components: {
        ColorSpacer,
        Text,
        Navigation,
        PaintResult,
        Footer,
    },
};
</script>

<style scoped>
.landing-page-desktop {
    background-color: var(--desert-storm);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
}

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

.flex-col {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    min-height: 800px;
    width: 960px;
    margin: 0 auto;
}

.text {
    display: flex;
    position: relative;
    width: 960px;
}

.group-39 {
    display: flex;
    height: 400px;
    width: 480px;
}

.group {
    height: 176px;
    width: 155px;
}
</style>
