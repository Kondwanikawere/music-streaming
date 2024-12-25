<script setup>
   
    import {useForm} from '@inertiajs/vue3'
    import textInput  from '../Components/textInput.vue'
    import navBar from '../Layouts/navigationBar.vue'
    import Footer from '../Components/footer.vue'

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
       
        <div class="mb-10">
            <form @submit.prevent ="submit" class="flex flex-col text-white w-[90%] text-[20px] pl-[2%] pt-[47px] gap-y-[1.313rem]">
                <textInput name="firstName" v-model="form.firstName" placeholder="FirstName" type="text" :message="form.errors.firstName"></textInput>
                <textInput name="surname" v-model="form.surname" placeholder="surname" type="text" :message="form.errors.surname"></textInput>
                <textInput name="username" v-model="form.username" placeholder="username" type="text" :message="form.errors.username"></textInput>
                <textInput name="email" v-model="form.email" placeholder="email" type="email" :message="form.errors.email"></textInput>
                <textInput name="password" v-model="form.password" placeholder="Password" type="password" :message="form.errors.password"></textInput>
                <textInput name="password_confirmation" v-model="form.password_confirmation" placeholder="Confirm password" type="password"></textInput>
                <div class="flex w-[100%] justify-center">
                    <button id="submit" class="bg-textRed h-[45px] rounded-[10px] w-[30%] disabled:opacity-60 flex justify-center items-center" :disabled="form.processing"><p> Update</p></button>
                </div>
            </form> 
        </div>
    </div>
    <Footer></Footer>
    <navBar hideNav="false"></navBar>
</template>