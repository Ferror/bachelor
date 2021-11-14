<template>
    <div class="landing-page-desktop screen">
        <Nav :paintShop="navProps.paintShop" :stwrzFarb="navProps.stwrzFarb" />
        <div class="hero">
            <div class="group-37">
                <div class="t-1 valign-text-middle">{{ t1 }}</div>
                <div class="p-1 valign-text-middle">{{ p1 }}</div>
            </div>
            <img class="group-38" :src="group38" />
        </div>
        <ColorSpacer />
        <div class="flex-col">
            <div class="text">
                <text2 :t2="text2Props.t2" />
                <div class="group-39"><img class="group" :src="group" /></div>
            </div>
            <div class="text">
                <div class="group-42">
                    <paint-result
                        :yourColorName="paintResultProps.yourColorName"
                        :line3="paintResultProps.line3"
                        :rectangle14="paintResultProps.rectangle14"
                    />
                </div>
                <text2 :t2="text22Props.t2" :className="text22Props.className" />
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
import Nav from "./Nav";
import ColorSpacer from "./ColorSpacer";
import Text2 from "./Text2";
import PaintResult from "./PaintResult";
import Footer from "./Footer";

export default {
    name: "LandingPageDesktop",
    components: {
        ColorSpacer,
        Nav,
        Text2,
        PaintResult,
        Footer,
    },
    props: [
        "t1",
        "p1",
        "group38",
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
    height: 314px;
    width: 900px;
    margin: 80px auto 0 auto;
}

.group-37 {
    display: flex;
    flex-direction: column;
    height: 240px;
    width: 484px;
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
    font-size: var(--font-size-xxl2);
    font-weight: 400;
    height: 160px;
    letter-spacing: 2px;
    line-height: 25px;
    width: 480px;
}

.group-38 {
    height: 309px;
    margin-left: 147px;
    margin-top: 5px;
    width: 276px;
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

.group-42 {
    background-color: var(--desert-storm);
    display: flex;
    height: 400px;
    position: relative;
    width: 480px;
}
</style>
