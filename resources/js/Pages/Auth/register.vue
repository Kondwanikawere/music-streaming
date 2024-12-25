<script setup>
   
    import {useForm} from '@inertiajs/vue3'
    import textInput  from '../../Components/textInput.vue';

    const form = useForm({
        firstName : null,
        surname : null,
        username : null,
        email : null,
        password : null,
        password_confirmation : null,
    })

    const submit = () => {
        form.post(route('register'),{
            preserveScroll: true,
            onError : () => form.reset('password','password_confirmation')
        })
    }
</script>
<template>
    <Head>
        <title> | Register </title>
        <meta head-key="description" name="description" content="The register page"/>
    </Head>
    <div class="flex flex-col ml-[7%] pt-[60px] h-full">
        <div class="grid w-[88%]">
            <p class="font-PetitFormalScript text-textRed text-[30px] justify-self-center">Music stream</p>
        </div> 
       
        <div>
            <form @submit.prevent ="submit" class="flex flex-col text-white w-[90%] text-[20px] pl-[2%] pt-[47px] gap-y-[1.313rem]">
                <textInput name="firstName" v-model="form.firstName" placeholder="FirstName" type="text" :message="form.errors.firstName"></textInput>
                <textInput name="surname" v-model="form.surname" placeholder="surname" type="text" :message="form.errors.surname"></textInput>
                <textInput name="username" v-model="form.username" placeholder="username" type="text" :message="form.errors.username"></textInput>
                <textInput name="email" v-model="form.email" placeholder="email" type="email" :message="form.errors.email"></textInput>
                <textInput name="password" v-model="form.password" placeholder="Password" type="password" :message="form.errors.password"></textInput>
                <textInput name="password_confirmation" v-model="form.password_confirmation" placeholder="Confirm password" type="password"></textInput>
                <div class="flex w-[100%]">
                    <button id="submit" class="bg-textRed h-[45px] rounded-[10px] pr-[8%] w-[100%] disabled:opacity-60" :disabled="form.processing"><p>Sign Up</p></button>
                </div>
            </form> 
        </div> 
       
        <div class="pt-[1.313rem] font-Nats text-[12px] flex flex-col w-[86%]">
            <div class="flex justify-center gap-x-1">
                <p>Already have an account?</p>
                <a :href="route('login')" class="text-textRed"> Sign in</a>
            </div>
            <div class="flex justify-center">
                <p>Or sign in with</p> 
                <p></p>
            </div>     
        </div>
        <div class="flex flex-row gap-x-6 pt-3 justify-center w-[86%] mb-[63px]">
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
</template>