<template>
    <div>
        <LandingPageDesktop
            v-if="breakpoints.desktop.matches"
        />

        <LandingPageMobile
            v-if="breakpoints.mobile.matches"
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
    data: () => {
        return {};
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

// const FooterContent = {
//     title: "Paint Shop inc.",
//     contactUs: "Contact Us",
//     phone: "+48 333 444 555",
//     text1: "email@gmail.com",
//     aboutUs: "About US",
//     emailGmailCom: "Paint Shop inc. was created to enable your creativity and freedom of choosing paint colors.",
// };
</script>

<style src="@/assets/style.css"></style>
