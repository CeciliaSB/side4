<template>
    <div class="container" >
        <Navbar />
        <router-view />
    </div>
</template>

<script>
import Navbar from './Navbar.vue';

export default {
    components: {
        Navbar
    }
};
</script>
<style>

</style>
