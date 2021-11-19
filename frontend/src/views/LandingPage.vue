<template>
    <div>
        <landing-page-desktop
            v-bind="landingPageDesktopData"
            v-if="breakpoints.desktop.matches"
        />

        <landing-page-mobile
            v-if="breakpoints.mobile.matches"
            title1="Pomaluj swój świat!"
            p1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu nibh aliquet gravida at mauris ut id commodo. Eu, adipiscing sit et venenatis vitae in pellentesque. Id elementum quam tellus porttitor neque, arcu porta orci vitae."
            :textProps="landingPageMobileData.textProps"
            :paintResultProps="landingPageMobileData.paintResultProps"
            :text2Props="landingPageMobileData.text2Props"
            :text2Props2="landingPageMobileData.text2Props2"
        />
    </div>
</template>

<script>
import LandingPageDesktop from "@/views/landing-page/desktop/LandingPageDesktop";
import LandingPageMobile from "@/views/landing-page/mobile/LandingPageMobile";

import useBreakpoints from "vue-next-breakpoints";

export default {
    name: "LandingPage",
    components: {
        LandingPageMobile,
        LandingPageDesktop,
    },
    data: function () {
        return {
            landingPageDesktopData,
            landingPageMobileData,
        };
    },
    setup: function () {
        // Define your breakpoints with any name
        const breakpoints = useBreakpoints({
            mobile: 959, // max-width: 600px
            desktop: [960] // min-width: 601px
        });

        return {
            // If you want to use different key, feel free do do so, e.g.:
            // mediaqueries: breakpoints
            // and then use mediaqueries.desktop.matches etc.
            breakpoints
        };
    },
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
    p1: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu nibh aliquet gravida at mauris ut id commodo. Eu, adipiscing sit et venenatis vitae in pellentesque. Id elementum quam tellus porttitor neque, arcu porta orci vitae.",
    group: "group.png",
    paintShopInc: "Paint Shop inc.",
    contactUs: "Contact Us",
    aboutUs: "About US",
    phone: "+48 333 444 555",
    emailGmailCom: "email@gmail.com",
    text1: "Paint Shop inc. was created to enable your creativity and freedom of choosing paint colors.",
    text2Props: text2Data,
    paintResultProps: paintResultData,
    text22Props: text22Data,
};

const textData = {
    title2: "Share Your Paint Ideas",
};

const tnDOwLData = {
    title: "Paint Shop inc.",
    contactUs: "Contact Us",
    phone: "+48 333 444 555",
    text1: "email@gmail.com",
    aboutUs: "About US",
    emailGmailCom: "Paint Shop inc. was created to enable your creativity and freedom of choosing paint colors.",
};

const landingPageMobileData = {
    title1: "Pomaluj swój świat!",
    p1: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu nibh aliquet gravida at mauris ut id commodo. Eu, adipiscing sit et venenatis vitae in pellentesque. Id elementum quam tellus porttitor neque, arcu porta orci vitae.",
    textProps: textData,
    paintResultProps: paintResultData,
    text2Props: text2Data,
    text2Props2: tnDOwLData,
};
</script>

<style src="@/assets/landing-page.css"></style>
