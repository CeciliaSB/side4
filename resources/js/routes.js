import Home from '@/Components/Home.vue';
import Login from '@/Components/Login.vue';
import SignUp from "@/Components/SignUp.vue";
import PasswordReset from "@/Components/PasswordReset.vue";

const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/signUp',
        component: SignUp
    },
    {
        path: '/password/reset',
        component: PasswordReset
    }
];

export default routes;
