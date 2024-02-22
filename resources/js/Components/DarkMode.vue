<template>
    <button @click="toggleDarkMode" class="mb-1 mr-3">
        <font-awesome-icon :icon="isDarkMode ? ['fas', 'sun'] : ['fas', 'moon']" size="lg" />
    </button>
</template>

<script>
import { ref, onMounted } from 'vue';

export default {
    name: 'DarkMode',
    setup() {
        const isDarkMode = ref(false);

        onMounted(() => {
            const savedTheme = localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            isDarkMode.value = savedTheme === 'dark';
            updateTheme();
        });

        function toggleDarkMode() {
            isDarkMode.value = !isDarkMode.value;
            console.log('Toggling dark mode:', isDarkMode.value);
            updateTheme();
        }

        function updateTheme() {
            const themeValue = isDarkMode.value ? 'dark' : 'light';
            document.body.setAttribute('data-bs-theme', themeValue); // Toggle the data-bs-theme attribute
            localStorage.setItem('theme', themeValue);
        }


        return { isDarkMode, toggleDarkMode };
    },
};
</script>
<style>


</style>
