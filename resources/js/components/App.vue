<template>
    <div id = "app">
        <navigation></navigation>
        <router-view></router-view>
        <footer></footer>
    </div>
</template>
<script>
import Navigation from './NaviComponent.vue'
import Footer from './footerComponent.vue'
    export default {
        components: {
            'navigation' : Navigation,
            'footer' : Footer
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
