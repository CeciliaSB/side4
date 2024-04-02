<template>
    <div class="container-fluid d-flex justify-content-center align-items-center login-container" >
        <div class="signIn-wrapper">
            <div class="signIn-box">
                <div class=" signIn-container" >
                    <div class="card d-flex flex-column align-items-center h-100">
                        <div class="logo-container mb-4"></div>
                        <form class="signIn-form" @submit.prevent="login">
                            <div class="mb-3 d-flex justify-content-center">
                                <input
                                    type="text"
                                    class="form-control rounded-0 input-style"
                                    placeholder="E-mail"
                                    v-model="user.email"
                                    required
                                >
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <input
                                    type="password"
                                    class="form-control rounded-0 input-style"
                                    placeholder="Password"
                                    v-model="user.password"
                                    required
                                >
                            </div>
                            <button class="btn btn-outline-secondary mt-4 w-100 justify-content-center align-items-center">
                                <span>Sign In</span>
                            </button>
                            <div class="mt-5">
                                <router-link to="/password/reset" class="float-start forgot text-decoration-none" aria-current="page"> Forgot Password? </router-link>
                                <router-link to="/signUp" class="float-end signUp text-decoration-none" aria-current="page">Sign Up</router-link>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
import SignUp from "@/Components/SignUp.vue";
import PasswordReset from "@/Components/PasswordReset.vue";


export default {
         data(){
             return {
                 user: {
                     email:'',
                     password:'',
                 },
             }
         },
         components: {
             SignUp,
             PasswordReset
         },
         methods: {
             async login(){
                 try {
                     const response =await axios.post('/login', this.user);
                     this.$router.push({ path: '/' });
                 } catch (error) {
                     console.error(error);
                     if (error.response && error.response.data) {
                         alert(error.response.data.message);
                     }
                 }
             }
         },
         mounted() {
             console.log('Component mounted.')
         }
     }
</script>

<style>
.login-container {
    box-sizing: border-box;
}
.signIn-wrapper {
    width: 658px;
    height: 896px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.signIn-box {
    width: 420px !important;
    height: 750px !important;
    display: flex;
    justify-content: center;
    align-items: center;
}

.signIn-container {
    width: 380px;
    height: 550px;
}
.logo-container {
    width: 380px;
    height: 150px;
}
.signIn-form{
    width: 340px;
}
.input-style{
    color: #919aa8 !important;
}
.forgot{
    color: #919aa8;
}
.signUp{
    color: #919aa8;
}
</style>
