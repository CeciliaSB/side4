<template>
    <div class="container-fluid d-flex justify-content-center align-items-center login-container" >
        <div class="signIn-wrapper">
            <div class="signIn-box">
                <div class=" signIn-container" >
                    <div class="card d-flex flex-column align-items-center h-100">
                        <div class="logo-container mb-4"></div>
                        <form class="signIn-form">
                            <div class="mb-3 d-flex justify-content-center">
                                <input type="text" class="form-control rounded-0 input-style" placeholder="Username">
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <input type="password" class="form-control rounded-0 input-style" placeholder="Password">
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <input type="text" class="form-control rounded-0 input-style" placeholder="Confirm password">
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <input type="text" class="form-control rounded-0 input-style" placeholder="E-mail">
                            </div>
                            <button class="btn btn-outline-secondary mt-4 w-100 justify-content-center align-items-center">
                                <span>Sign Up</span>
                            </button>
                            <div class="mt-5">
                                <span class=" d-flex justify-content-center forgot"> Have an account?  </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    name: 'Sign Up',
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
