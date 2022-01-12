<template>
    <div class="landing-page-desktop screen">
        <Navigation />

        <Hero />

        <ColorSpacer />

        <div class="flex-col text" style="margin: 40px auto;">
            <Text title="landing.shareSection.title" content="landing.shareSection.content" />
            <div class="group-39" style="display: flex; justify-content: center; align-items: center;">
                <img class="group" src="@/assets/social-group.svg" alt="" />
            </div>
        </div>

        <div class="flex-col text" style="margin: 40px auto;">
            <PaintResult />
            <Text title="landing.paintSection.title" content="landing.paintSection.content" />
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
import Hero from "./Hero";

export default {
    name: "LandingPageDesktop",
    components: {
        Hero,
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

.flex-col {
    align-items: flex-start;
    display: flex;
    width: 960px;
}

.text {
    display: flex;
    position: relative;
    width: 960px;
}

.group-39 {
    display: flex;
    height: 360px;
    width: 480px;
}

.group {
    height: 176px;
    width: 155px;
}
</style>
