<template>
    <div class="landing-page-desktop screen">
        <Navigation />
        <div class="hero">
            <div class="group-37">
                <div class="t-1 valign-text-middle">{{ t1 }}</div>
                <div class="p-1 valign-text-middle">{{ p1 }}</div>
            </div>
            <img class="group-38" src="@/assets/bucket-drop.svg" />
        </div>

        <ColorSpacer />

        <div class="flex-col">
            <div class="text">
                <Text :t2="text2Props.t2" />
                <div class="group-39">
                    <img class="group" src="@/assets/social-group.svg" />
                </div>
            </div>
            <div class="text">
                <PaintResult />
                <Text :t2="text22Props.t2" :className="text22Props.className" />
            </div>
        </div>
        <Footer
            :paintShopInc="paintShopInc"
            :contactUs="contactUs"
            :aboutUs="aboutUs"
            :phone="phone"
            :emailGmailCom="emailGmailCom"
            :text1="text1"
        />
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
    props: [
        "t1",
        "p1",
        "group",
        "paintShopInc",
        "contactUs",
        "aboutUs",
        "phone",
        "emailGmailCom",
        "text1",
        "navProps",
        "text2Props",
        "paintResultProps",
        "text22Props",
    ],
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
    background-color: var(--desert-storm);
    display: flex;
    height: 400px;
    margin-left: 36px;
    width: 480px;
}

.group {
    height: 176px;
    margin-left: 162px;
    margin-top: 120px;
    width: 155px;
}
</style>
