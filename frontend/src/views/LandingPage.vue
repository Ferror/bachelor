<template>
    <LandingPageDesktop
        v-if="breakpoints.desktop.matches"
    />

    <LandingPageMobile
        v-if="breakpoints.mobile.matches"
    />
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
        const breakpoints = useBreakpoints({
            mobile: 959, // max-width: 959px
            desktop: [960] // min-width: 960px
        });

        return {
            breakpoints
        };
    },
};
</script>

<style src="@/assets/style.css"></style>
