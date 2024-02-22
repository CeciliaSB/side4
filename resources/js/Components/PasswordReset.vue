<template>
    <div class="container-fluid d-flex justify-content-center align-items-center login-container" >
        <div class="signIn-wrapper">
            <div class="signIn-box">
                <div class=" signIn-container" >
                    <div class="card d-flex flex-column align-items-center h-100">
                        <h5 class="mt-5 mb-4 justify-content-center">Password Reset</h5>
                        <form class="mt-3 signIn-form">
                            <div class="card border-info mb-5">
                                <div class="card-body">
                                    <p class="card-text text-justify">Forgot your password? Enter your e-mail address below, and we'll send you an e-mail allowing you to reset it. </p>
                                </div>
                            </div>

                            <div class="mb-3 d-flex justify-content-center">
                                <input type="text" class="form-control rounded-0 input-style" placeholder="E-mail address">
                            </div>
                            <button class="btn btn-outline-success mt-4 w-100 justify-content-center align-items-center">
                                <span>Reset my password</span>
                            </button>
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
