<template>
    <div class="landing-page-mobile screen">
        <Navigation />
        <div class="hero">
            <div class="overlap-group4">
                <div class="title-1 valign-text-middle roboto-normal-black-20px">{{ title1 }}</div>
                <p class="p-1 valign-text-middle">{{ p1 }}</p>
            </div>
        </div>
        <ColorSpacer />
        <Text :title2="textProps.title2" />
        <PaintResult
            :yourColorName="paintResultProps.yourColorName"
            :line3="paintResultProps.line3"
            :rectangle14="paintResultProps.rectangle14"
        />
        <Text :title2="text2Props.title2" :className="text2Props.className" />
        <Footer
            :title="text2Props2.title"
            :contactUs="text2Props2.contactUs"
            :phone="text2Props2.phone"
            :text1="text2Props2.text1"
            :aboutUs="text2Props2.aboutUs"
            :emailGmailCom="text2Props2.emailGmailCom"
        />
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
    props: ["title1", "p1", "aHayc8Props", "textProps", "paintResultProps", "text2Props", "text2Props2"],
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
