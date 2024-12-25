<script setup>
import textInput  from '../../Components/textInput.vue';
import {useForm} from '@inertiajs/vue3'

const form = useForm({
    email : null,
    password : null,
    remember : null,
})

const submit = () => {
    form.post(route('login'),{
        preserveScroll: true,
        onError : () => form.reset('password')
    })
}
</script>
<template>
    <Head>
        <title> | Sign In </title>
        <meta head-key="description" name="description" content="The register page"/>
    </Head>
    <div class="flex w-full relative">
        <div class="w-full absolute z-10 h-screen">
            <img class="w-full h-full" src="/public/images/signIn.png" alt="Music">
        </div>
        <div class="flex flex-col ml-[7%] pt-[380px] absolute z-20 w-[93%]">
            <div class="grid w-[88%]">
                <p class="font-PetitFormalScript text-textRed text-[30px] justify-self-center">Music stream</p>
            </div>  
            <div>
                <form @submit.prevent ="submit" class="flex flex-col text-white w-[90%] text-[20px] pl-[2%] pt-[47px] gap-y-[1.313rem]">
                    <textInput name="email" v-model="form.email" placeholder="email" type="email" :message="form.errors.email"></textInput>
                    <textInput name="password" v-model="form.password" placeholder="Password" type="password" :message="form.errors.password"></textInput>
                    <div class="flex w-[100%]">
                        <button id="submit" class="bg-textRed h-[45px] rounded-[10px] pr-[8%] w-[100%] disabled:opacity-60" :disabled="form.processing"><p>Sign in</p></button>
                    </div>
                </form>
            </div> 
            <div class="flex gap-x-2 pl-4 pt-2">
                <input type="checkbox" v-model="form.remember" id="remember">
                <label for="remember">Remember me</label>
            </div>
            <div class="pt-[0.5rem] font-Nats text-[12px] flex flex-col w-[86%]">
                <div class="flex justify-center gap-x-1">
                    <p>Is it first time for you?</p>
                    <a :href="route('register')" class="text-textRed"> Sign up now</a>
                </div>
                <div class="flex justify-center">
                    <p>Or sign in with</p> 
                    <p></p>
                </div>     
            </div>
            <div class="flex flex-row gap-x-6 pt-3 justify-center w-[86%] mb-[67px]">
                <a href="">
                    <div class="w-[35px] h-[35px] bg-white rounded-full">
                        <img src="/public/icons/google_icon.png" alt="google" class="w-[30px] h-[30px] pl-[5px] pt-[5px]">
                    </div>
                    
                </a>
                <a href="">
                    <div class="w-[35px] h-[35px]">
                        <img src="/public/icons/facebook_icon.png" alt="facebook">
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>