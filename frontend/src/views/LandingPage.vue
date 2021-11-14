<template>
    <landing-page-desktop v-bind="landingPageDesktopData" />
</template>

<script>
import LandingPageDesktop from "@/views/landing-page/desktop/LandingPageDesktop";

export default {
    name: "LandingPage",
    components: {
        LandingPageDesktop,
    },
    data() {
        return { landingPageDesktopData };
    },
};

const xNavData = {
    paintShop: "Paint Shop",
    stwrzFarb: "Stwórz Farbę",
};

const text2Data = {
    t2: "Share Your Paint Ideas",
};

const paintResultData = {
    yourColorName: "Your Color Name",
    line3: "line-3.png",
    rectangle14: "rectangle-14.png",
};

const text22Data = {
    t2: "Your Paint Mix Result",
    className: "text-2-1",
};

const landingPageDesktopData = {
    t1: "Pomaluj swój świat!",
    p1:
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu nibh aliquet gravida at mauris ut id commodo. Eu, adipiscing sit et venenatis vitae in pellentesque. Id elementum quam tellus porttitor neque, arcu porta orci vitae.",
    group38:
        "group-38.png",
    group:
        "group.png",
    paintShopInc: "Paint Shop inc.",
    contactUs: "Contact Us",
    aboutUs: "About US",
    phone: "+48 333 444 555",
    emailGmailCom: "email@gmail.com",
    text1: "Paint Shop inc. was created to enable your creativity and freedom of choosing paint colors.",
    navProps: xNavData,
    text2Props: text2Data,
    paintResultProps: paintResultData,
    text22Props: text22Data,
};
</script>

<style src="@/assets/landing-page.css"></style>
