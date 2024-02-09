<template>
    <div class="container-fluid d-flex justify-content-center align-items-center login-container">
        <div class="signIn-wrapper">
            <div class="signIn-box">
                <div class="signIn-container">
                    <div class="form-container d-flex flex-column align-items-center">
                        <div class="logo-container mb-4"></div>
                        <form class="signIn-form">
                            <div class="mb-3 d-flex justify-content-center">
                                <input type="text" class="form-control input-style" placeholder="E-mail">
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <input type="password" class="form-control input-style" placeholder="Password">
                            </div>
                            <button class="btn btn-outline-secondary mt-4 w-100 justify-content-center align-items-center">
                                <span>Sign In</span>
                            </button>
                            <div class="mt-5">
                                <span class="float-start forgot"> Forgot Password? </span>
                                <span class="float-end signUp"> Sign Up </span>
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
    background-color: #faf7f7;
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
