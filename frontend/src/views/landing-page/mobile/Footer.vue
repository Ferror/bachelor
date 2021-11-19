<template>
    <div class="footer">
        <div class="overlap-group-1">
            <div class="title-1-1 valign-text-middle">{{ title }}</div>
            <div class="flex-row">
                <div class="contact-us">
                    <div class="title-2-1 valign-text-middle roboto-normal-white-16px" >{{ contactUs }}</div>
                    <div class="contact-us-item valign-text-middle roboto-normal-white-12px" >{{ phone }}</div>
                    <div class="contact-us-item valign-text-middle roboto-normal-white-12px">{{ text1 }}</div>
                </div>
                <div class="about-us">
                    <div class="title-2-2 valign-text-middle roboto-normal-white-16px" >{{ aboutUs }}</div>
                    <p class="p-2-1 roboto-normal-white-12px">{{ emailGmailCom }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Footer",
    props: ["title", "contactUs", "phone", "text1", "aboutUs", "emailGmailCom"],
};
</script>

<style scoped>
.footer {
    align-items: flex-start;
    display: flex;
    height: 240px;
    min-width: 377px;
}

.overlap-group-1 {
    align-items: center;
    background-color: var(--heavy-metal);
    display: flex;
    flex-direction: column;
    min-height: 240px;
    width: 375px;
}

.title-1-1 {
    color: var(--white);
    font-family: var(--font-family-roboto);
    font-size: var(--font-size-xxxl);
    font-weight: 400;
    height: 80px;
    letter-spacing: 3px;
    text-align: center;
    width: 375px;
}

.flex-row {
    align-items: flex-start;
    display: flex;
    margin-left: 4px;
    min-width: 359px;
}

.contact-us {
    display: flex;
    flex-direction: column;
    height: 120px;
    width: 193px;
}

.title-2-1 {
    height: 40px;
    letter-spacing: 2px;
    width: 150px;
}

.contact-us-item {
    height: 40px;
    letter-spacing: 1px;
    width: 187px;
}

.about-us {
    display: flex;
    flex-direction: column;
    height: 119px;
    margin-left: 9px;
    width: 157px;
}

.title-2-2 {
    height: 40px;
    letter-spacing: 2px;
    margin-left: 28px;
    text-align: right;
    width: 125px;
}

.p-2-1 {
    height: 78px;
    letter-spacing: 1px;
    margin-top: 1px;
    text-align: right;
    width: 150px;
}
</style>
