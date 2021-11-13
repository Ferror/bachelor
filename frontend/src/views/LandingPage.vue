import {loadTimelineData} from 'anima-timeline';
/******************************************
*  src/App.vue
******************************************/

<template>
    <landing-page-desktop v-bind="landingPageDesktopData" />
</template>

<script>
import LandingPageDesktop from "./landing-page/desktop/LandingPageDesktop";

export default {
    name: "App",
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

const stylePrimaryStateDefaultIconFalseCiData = {
    children: "Stwórz Farbę",
};

const group33Data = {
    pomalujSwjWiat: "Pomaluj swój świat!",
    text7:
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu nibh aliquet gravida at mauris ut id commodo. Eu, adipiscing sit et venenatis vitae in pellentesque. Id elementum quam tellus porttitor neque, arcu porta orci vitae.",
    stylePrimaryStateDefaultIconFalseCi: stylePrimaryStateDefaultIconFalseCiData,
};

const paintResultData = {
    yourColorName: "Your Color Name",
    line3:
        "line-3.svg",
    rectangle14:
        "rectangle-14.svg",
};

const landingPageDesktopData = {
    text12: "Share Your Paint Ideas",
    text11:
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu nibh aliquet gravida at mauris ut id commodo. Eu, adipiscing sit et venenatis vitae in pellentesque. Id elementum quam tellus porttitor neque, arcu porta orci vitae. Purus tellus arcu sem quam suspendisse. Nisi adipiscing interdum vestibulum, tellus non urna. Ornare vitae hendrerit a est massa neque sem rhoncus, scelerisque.",
    group39:
        "group-39.svg",
    text10: "Your Paint Mix Result",
    text9:
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu nibh aliquet gravida at mauris ut id commodo. Eu, adipiscing sit et venenatis vitae in pellentesque. Id elementum quam tellus porttitor neque, arcu porta orci vitae. Purus tellus arcu sem quam suspendisse. Nisi adipiscing interdum vestibulum, tellus non urna. Ornare vitae hendrerit a est massa neque sem rhoncus, scelerisque.",
    paintResultProps: xNavData,
    group33Props: group33Data,
    paintResultProps2: paintResultData,
};
</script>

<style>
@import url("https://fonts.googleapis.com/css?family=Roboto:400,700");

:root {
    --black:
        rgba(0, 0, 0, 1);
    --deep-cove:
        rgba(19, 15, 64, 1);
    --teal-blue:
        rgba(34, 166, 179, 1);
    --heavy-metal:
        rgba(45, 42, 42, 1);
    --jacarta:
        rgba(48, 51, 107, 1);
    --black-coral-pearl:
        rgba(83, 92, 104, 1);
    --indigo:
        rgba(104, 109, 224, 1);
    --purple-heart:
        rgba(110, 65, 226, 1);
    --conifer:
        rgba(186, 220, 88, 0.902);
    --fuchsia-pink:
        rgba(190, 46, 221, 1);
    --mist-gray:
        rgba(196, 196, 196, 0.2);
    --salmon-pearl:
        rgba(235, 77, 75, 1);
    --carrot-orange:
        rgba(240, 147, 43, 1);
    --khaki:
        rgba(246, 229, 141, 1);
    --desert-storm:
        rgba(248, 248, 248, 1);
    --banana:
        rgba(249, 202, 36, 1);
    --white-2:
        rgba(255, 255, 255, 0.8);
    --white:
        rgba(255, 255, 255, 1);

    --font-size-s: 14px;
    --font-size-m: 16px;
    --font-size-l: 18px;
    --font-size-xl: 20px;
    --font-size-xxl: 24px;
    --font-size-s2: 12px;

    --font-family-roboto: "Roboto";
}

.component-wrapper a {
    display: contents;
    pointer-events: auto;
    text-decoration: none;
}

.component-wrapper * {
    -webkit-font-smoothing: antialiased;
    box-sizing: border-box;
    pointer-events: none;
}

.component-wrapper a *,
.component-wrapper input,
.component-wrapper video,
.component-wrapper iframe {
    pointer-events: auto;
}

.component-wrapper.not-ready,
.component-wrapper.not-ready * {
    visibility: hidden !important;
}

.screen a {
    display: contents;
    text-decoration: none;
}

.container-center-horizontal {
    display: flex;
    flex-direction: row;
    justify-content: center;
    pointer-events: none;
    width: 100%;
}

.container-center-horizontal > * {
    flex-shrink: 0;
    pointer-events: auto;
}

.valign-text-middle {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.listeners-active,
.listeners-active * {
    pointer-events: auto;
}

.hidden,
.hidden * {
    pointer-events: none;
    visibility: hidden;
}
</style>
