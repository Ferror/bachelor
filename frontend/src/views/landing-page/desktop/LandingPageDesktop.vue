/******************************************
*  src/components/LandingPageDesktop.vue
******************************************/

<template>
    <div class="container-center-horizontal">
        <div class="landing-page-desktop screen">
            <x-nav
                :paintShop="paintResultProps.paintShop"
                :stwrzFarb="paintResultProps.stwrzFarb"
            />
            <group33
                :pomalujSwjWiat="group33Props.pomalujSwjWiat"
                :text7="group33Props.text7"
                :stylePrimaryStateDefaultIconFalseCi="group33Props.stylePrimaryStateDefaultIconFalseCi"
            />
            <group34 />
            <div class="group-32">
                <div class="overlap-group">
                    <div class="text valign-text-middle roboto-normal-black-20px">{{ text12 }}</div>
                    <p class="text-5 valign-text-middle roboto-normal-black-16px">{{ text11 }}</p>
                </div>
                <img class="group-39" :src="group39" />
            </div>
            <div class="group-31">
                <paint-result
                    :yourColorName="paintResultProps2.yourColorName"
                    :line3="paintResultProps2.line3"
                    :rectangle14="paintResultProps2.rectangle14"
                />
                <div class="overlap-group1">
                    <div class="text valign-text-middle roboto-normal-black-20px">{{ text10 }}</div>
                    <p class="text-3 valign-text-middle roboto-normal-black-16px">{{ text9 }}</p>
                </div>
            </div>
            <x-footer />
        </div>
    </div>
</template>

<script>
import XNav from "./XNav";
import Group33 from "./Group33";
import Group34 from "./Group34";
import PaintResult from "./PaintResult";
import xFooter from "./xFooter";

export default {
    name: "LandingPageDesktop",
    components: {
        XNav,
        Group33,
        Group34,
        PaintResult,
        xFooter,
    },
    props: ["text12", "text11", "group39", "text10", "text9", "paintResultProps", "group33Props", "paintResultProps2"],
};
</script>

<style>
.landing-page-desktop {
    align-items: center;
    background-color: var(--desert-storm);
    display: flex;
    flex-direction: column;
    height: 1760px;
    overflow: hidden;
    position: relative;
    width: 1440px;
}

.group-32 {
    align-items: center;
    display: flex;
    height: 320px;
    margin-right: 171px;
    margin-top: 36px;
    min-width: 789px;
}

.overlap-group {
    align-items: center;
    background-color: var(--white);
    border-radius: 5px;
    box-shadow: 0px 8px 25px
    #00000040;
    display: flex;
    flex-direction: column;
    min-height: 320px;
    width: 440px;
}

.text {
    height: 80px;
    letter-spacing: 0;
    text-align: center;
    width: 440px;
}

.text-5 {
    height: 204px;
    letter-spacing: 0.8px;
    line-height: 25px;
    margin-left: 9.17px;
    width: 403px;
}

.group-39 {
    height: 212px;
    margin-left: 184px;
    margin-top: 23.53px;
    width: 191px;
}

.group-31 {
    align-items: center;
    display: flex;
    height: 320px;
    margin-left: 166px;
    margin-top: 84px;
    min-width: 794px;
    position: relative;
}

.overlap-group1 {
    align-items: center;
    background-color: var(--white);
    border-radius: 5px;
    box-shadow: 0px 8px 25px
    #00000040;
    display: flex;
    flex-direction: column;
    margin-left: 200px;
    min-height: 320px;
    width: 440px;
}

.text-3 {
    height: 200px;
    letter-spacing: 0.8px;
    line-height: 25px;
    margin-left: 9.17px;
    width: 403px;
}
</style>
