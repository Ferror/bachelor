<template>
    <div class="container-center-horizontal">
        <div class="wybor-podkladu screen">
            <h1 class="title valign-text-middle roboto-normal-white-24px">Paint Shop</h1>
            <div class="overlap-group4">
                <modal loremIpsumTitleMo="Wybierz podkład" />

                <div class="group-24">
                    <base-color
                        class-name="white"
                        lock=""
                        caption="White"
                    />
                    <base-color
                        class-name="light-grey"
                        lock=""
                        caption="Light Grey"
                    />
                    <base-color
                        class-name="grey"
                        lock=""
                        caption="Grey"
                    />
                    <base-color
                        class-name="dark-grey"
                        lock=""
                        caption="Dark Grey"
                    />
                    <base-color
                        class-name="black"
                        lock=""
                        caption="Black"
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Modal from "@/views/paint-mixing/Modal";
import BaseColor from "./BaseColor";

export default {
    name: "ChooseBase",
    components: {
        BaseColor,
        Modal,
    },
}
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css?family=Roboto:400,700");

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

.wybor-podkladu {
    align-items: flex-start;
    background-color: var(--teal-blue);
    display: flex;
    width: 100%;
    min-height: 900px;
}

.title {
    height: 80px;
    letter-spacing: 3.6px;
    text-align: center;
    width: 240px;
    position: absolute;
}

.overlap-group4 {
    border-radius: 5px;
    height: 510px;
    position: relative;
    width: 750px;
    margin: 200px auto;
}

.group-24 {
    display: flex;
    justify-content: space-between;
    height: 97px;
    left: 151px;
    position: absolute;
    top: 218px;
    width: 447px;
}
</style>
