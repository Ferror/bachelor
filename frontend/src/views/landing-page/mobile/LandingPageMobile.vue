<template>
    <div class="landing-page-mobile screen">
        <Navigation />
        <div class="hero">
            <div class="overlap-group4">
                <h1 class="title-1 valign-text-middle roboto-normal-black-20px">{{ $t('landing.hero.title') }}</h1>
                <p class="p-1 valign-text-middle">{{ $t('landing.hero.content') }}</p>
            </div>
        </div>
        <ColorSpacer />
        <Text title="landing.shareSection.title" content="landing.shareSection.content" />
        <PaintResult />
        <Text title="landing.paintSection.title" content="landing.paintSection.content" />
        <Footer />
    </div>
</template>

<script>
import Navigation from "./Navigation";
import ColorSpacer from "./ColorSpacer";
import PaintResult from "./PaintResult";
import Footer from "./Footer";
import Text from "./Text";

export default {
    name: "LandingPageMobile",
    components: {
        Navigation,
        ColorSpacer,
        PaintResult,
        Footer,
        Text,
    },
};
</script>

<style scoped>
.landing-page-mobile {
    background-color: var(--desert-storm);
    display: flex;
    flex-direction: column;
    height: 100vh;
    min-height: 1515px;
    min-width: 375px;
    overflow: hidden;
    position: relative;
    width: 100%;
}

.hero {
    align-items: flex-start;
    display: flex;
    height: 225px;
    min-width: 379px;
}

.overlap-group4 {
    align-items: center;
    background-color: var(--desert-storm);
    display: flex;
    flex-direction: column;
    min-height: 225px;
    width: 100%;
}

.title-1 {
    height: 75px;
    letter-spacing: 3px;
    text-align: center;
    width: 375px;
}

.p-1 {
    color: var(--black);
    font-family: var(--font-family-roboto);
    font-size: var(--font-size-l);
    font-weight: 400;
    height: 150px;
    letter-spacing: 1px;
    line-height: 20px;
    text-align: center;
    width: 345px;
}
</style>
