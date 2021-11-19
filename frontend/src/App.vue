<template>
<!--    <desktop-nav v-if="breakpoints.desktop.matches" />-->
<!--    <mobile-nav v-if="breakpoints.mobile.matches" />-->
<!--    <div id="nav">-->
<!--        <router-link to="/">Home</router-link> |-->
<!--        <router-link to="/about">About</router-link>-->
<!--    </div>-->
    <router-view/>
</template>

<script>
export default {
    name: 'App',
    components: {},
}
</script>

<style>
</style>
