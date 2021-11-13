<template>
    <LandingPage v-bind="landingPageData" />
</template>

<script>
import LandingPage from "@/views/LandingPage";

export default {
    name: 'Home',
    components: {
        LandingPage
    },
    data: () => {
        return { landingPageData };
    },
}

const stylePrimaryStateDefaultIconFalseCiData = {
    children: "Stwórz Farbę",
};

const paintResultData = {
    yourColorName: "Your Color Name",
};

const landingPageData = {
    title: "Paint Shop",
    stwrzFarb: "Stwórz Farbę",
    pomalujSwjWiat: "Pomaluj swój świat!",
    text1:
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu nibh aliquet gravida at mauris ut id commodo. Eu, adipiscing sit et venenatis vitae in pellentesque. Id elementum quam tellus porttitor neque, arcu porta orci vitae.",
    text6: "Share Your Paint Ideas",
    text5:
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu nibh aliquet gravida at mauris ut id commodo. Eu, adipiscing sit et venenatis vitae in pellentesque. Id elementum quam tellus porttitor neque, arcu porta orci vitae. Purus tellus arcu sem quam suspendisse. Nisi adipiscing interdum vestibulum, tellus non urna. Ornare vitae hendrerit a est massa neque sem rhoncus, scelerisque.",
    text4: "Your Paint Mix Result",
    text3:
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu nibh aliquet gravida at mauris ut id commodo. Eu, adipiscing sit et venenatis vitae in pellentesque. Id elementum quam tellus porttitor neque, arcu porta orci vitae. Purus tellus arcu sem quam suspendisse. Nisi adipiscing interdum vestibulum, tellus non urna. Ornare vitae hendrerit a est massa neque sem rhoncus, scelerisque.",
    paintShopInc: "Paint Shop inc.",
    contactUs: "Contact Us",
    aboutUs: "About US",
    phone: "+48 333 444 555",
    emailGmailCom: "email@gmail.com",
    text2: "Paint Shop inc. was created to enable your creativity and freedom of choosing paint colors.",
    stylePrimaryStateDefaultIconFalseCi: stylePrimaryStateDefaultIconFalseCiData,
    paintResultProps: paintResultData,
};
</script>

<style scoped>
</style>
