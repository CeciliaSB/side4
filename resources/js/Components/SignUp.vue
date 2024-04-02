<template>
    <div class="container-fluid d-flex justify-content-center align-items-center login-container" >
        <div class="signIn-wrapper">
            <div class="signIn-box">
                <div class=" signIn-container" >
                    <div class="card d-flex flex-column align-items-center h-100">
                        <div class="logo-container mb-4"></div>
                        <Vueform class="signIn-form " @submit.prevent="submitForm">
                            <div class="row mb-3 d-flex justify-content-center">
                                <TextElement
                                        type="text"
                                        :override-class="{
                                        input: 'form-control rounded-0 input-style',
                                        inputContainer: '',
                                        container: ''
                                       }"
                                       name="username"
                                       placeholder="Username"
                                       v-model="user.name"
                                       required
                                />
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <TextElement
                                    type="text"
                                    :override-class="{
                                        input: 'form-control rounded-0 input-style',
                                        inputContainer: '',
                                        container: ''
                                    }"
                                    name="email"
                                    placeholder="E-mail"
                                    v-model="user.email"
                                    required
                                />
                            </div>

                            <div class="mb-3 d-flex justify-content-center">
                                <TextElement
                                    type="password"
                                    :override-class="{
                                        input: 'form-control rounded-0 input-style',
                                        inputContainer: '',
                                        container: ''
                                    }"
                                    name="password"
                                    placeholder="Password"
                                    v-model="user.password"
                                    required
                                />
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <TextElement
                                    type="password"
                                    :override-class="{
                                        input: 'form-control rounded-0 input-style',
                                        inputContainer: '',

                                    }"
                                    name="password_confirmation"
                                    placeholder="Confirm password"
                                    v-model="user.password_confirmation"
                                    required
                                />
                            </div>
                            <button class="btn btn-outline-secondary mt-4 w-100 justify-content-center align-items-center">
                                <span>Sign Up</span>
                            </button>
                            <div class="mt-5">
                                <span class=" d-flex justify-content-center forgot"> Have an account?  </span>
                            </div>
                        </Vueform>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios"


export default {
    name: 'Sign Up',

    data() {
        return {
            user: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
            },
        };
    },
    methods: {
        async submitForm() {
            try {
                console.log();
                const response = await axios.post('/register', this.user);
                console.log(response.data);
            } catch (error) {
                console.error(error);
                /*if (error.response && error.response.data) {
                    alert(error.response.data.message);
                }*/
            }
        },

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
    height: 580px !important;
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
    width: 340px !important;
}
.forgot{
    color: #919aa8;
}
.signUp{
    color: #919aa8;
}
</style>
