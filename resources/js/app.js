import { createApp } from 'vue';
import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import '../css/app.css';

import { library } from '@fortawesome/fontawesome-svg-core';
import { fas } from '@fortawesome/free-solid-svg-icons'; // Import all solid icons
import { fab } from '@fortawesome/free-brands-svg-icons'; // Import all brand icons
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { createRouter, createWebHistory } from 'vue-router';
import routes from './routes.js';
import 'bootstrap/dist/css/bootstrap.css'
import axios from "axios";

import './src/style/global.scss';
import AppLayout from "@/Components/AppLayout.vue";
import Login from "@/Components/Login.vue"; // Adjust this path as needed

library.add(fas, fab);

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With']='XMLHttpRequest';


const app = createApp(AppLayout);

const router = createRouter({
    history: createWebHistory(),
    routes
});


app.use(router);
app.component('font-awesome-icon', FontAwesomeIcon)

app.mount('#app');
