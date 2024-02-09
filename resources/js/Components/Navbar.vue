<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
            <div class="container-fluid">
                <router-link to="/" class="navbar-brand active ml-5" aria-current="page">Home</router-link>
                <ul class="navbar-nav">
                    <li class="nav-item mt-2 mr-5" >
                       <DarkMode />
                    </li>
                    <li class="nav-item">
                        <router-link to="/login" class="nav-link active mr-5" aria-current="page">Sign In</router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>
<script>
import DarkMode from "@/Components/DarkMode.vue";

export default {
    components: {
        DarkMode
    },
    name: 'Navbar',

}
</script>
<style scoped>

</style>
