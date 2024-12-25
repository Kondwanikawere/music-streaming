<script setup>
    import { ref, onMounted} from 'vue';
    import { onClickOutside } from '@vueuse/core';
    
    
    const isOpen = ref(false);
    const menu = ref(null)

    onClickOutside(menu, () => {
        isOpen.value = true;
    }, { capture: false });
   

    const timeoutId = ref(null)

    const startHover = ()=>{
        if(hideNavBar.value === true){
            if (timeoutId) {
                clearTimeout(timeoutId); // Clear the existing timeout
            }
            navBarOpen.value = true; // Keep the div visible while hovering
        }
    }

    const startTimeout = ()=>{
        
        if(hideNavBar.value === true){
            if (timeoutId) {
                clearTimeout(timeoutId); // Clear the existing timeout
            }
            
            timeoutId = setTimeout(() => {
                navBarOpen.value = false;  // Hide the div after the timeout
            }, 3000);
        }
    }
   
    const props = defineProps({
        navTrue : {
            type: Boolean,
            Required :true,
            default : true
        },
        hideNav : {
            type: Boolean,
            default: true
        }
    })

    const navBarOpen = ref(props.navTrue);
    const hideNavBar = ref(props.hideNav);

    onMounted(() => {
        navBarOpen.value = true;
    })
   
</script>
<template>
    <slot></slot>
    <Transition appear enter-active-class="transition ease-out duration-300"
                      leave-active-class="transition ease-out duration-500" enter-from-class="opacity-0" leave-to-class="opacity-0">
        <div class="fixed w-full h-[80px] bg-[#0C1E2F] bottom-0 rounded-t-[20px]" v-show="navBarOpen" @mouseleave="startTimeout()"  @mouseover="startHover()" @mousemove="startHover()">
            <div class="flex h-[100%] pl-[5%]">
                <div class="basis-[25%] flex justify-center items-center h-[100%]" >
                    <Link :href="route('home')" preserve-scroll class="flex justify-center items-center font-Nats text-[16px] h-[51px] w-[95%] rounded-[15px]" :class="{' bg-textRed ': $page.component === 'latest' || $page.component === 'trending'}">
                        <img src="/public/icons/home.png" alt="home" class="w-[24px] h-[24px]" title="Home">
                        <p v-if="$page.component === 'latest' || $page.component === 'trending'">Home</p>
                    </Link>
                </div>
                <div class="basis-[25%] flex justify-center items-center h-[100%]">
                    <Link :href="route('downloads')" preserve-scroll class="flex  justify-center items-center font-Nats text-[16px] h-[51px] w-[100%] rounded-[15px]" :class="{' bg-textRed ': $page.component === 'downloads'}">
                        <img src="/public/icons/downloads.png" alt="downloads" class="w-[20px] h-[20px]" title="Downloads">
                        <p v-if="$page.component === 'downloads'">Downloads</p>
                    </Link>
                </div>
                <div class="basis-[25%] flex justify-center items-center h-[100%]">
                    <Link :href="route('favorites')" preserve-scroll class="flex justify-center items-center font-Nats text-[16px] h-[51px] w-[95%] rounded-[15px]" :class="{' bg-textRed ': $page.component === 'favorites'}">
                        <img class="w-[20px] h-[20px]" src="/public/icons/favorites.png" alt="favorites" title="Favorites">
                        <p v-if="$page.component === 'favorites'">favorites</p>
                    </Link>
                </div>

                <div v-if="$page.props.auth.user && $page.component !== 'profile'" class="basis-[25%] flex justify-center items-end h-[100%]">
                    <div class="flex justify-center items-end h-[100%] w-[100%]">
                        <div>
                            <img src="/public/icons/user.png" alt="user" @click="isOpen = !isOpen" class="hover:cursor-pointer w-[30px] h-[30px]" title="User">
                            <p class="pl-[20%] text-[16px] font-Nats">{{ $page.props.auth.user.username }}</p>
                        </div>
                        <Transition appear enter-active-class="transition ease-out duration-300"
                            leave-active-class="transition ease-out duration-500" enter-from-class="opacity-0" leave-to-class="opacity-0">
                            <div class="bg-[#2a3238] absolute bottom-[60px] w-[70px] h-[80px] rounded-[15px] z-100" v-if="isOpen" ref="menu">
                                <div class="flex flex-col gap-y-2 pt-2 divide-y-2 divide-[#4C4A4A]" >
                                    <Link :href="route('profile')" class="pl-[9px]">Profile</Link> 
                                    <Link :href="route('logout')" method="post" as="button" type="button" >Logout</Link>  
                                </div>
                            </div>
                        </Transition> 
                    </div>
                </div>
                <div v-else-if="$page.props.auth.user && $page.component === 'profile'" class="basis-[25%] flex justify-center items-center h-[100%]">
                    <div class="flex justify-center items-center h-[51px] w-[50%] bg-textRed rounded-[15px]">
                        <div>
                            <img src="/public/icons/user.png" alt="user" @click="isOpen = !isOpen" class="hover:cursor-pointer" title="User">
                        </div>
                        <Transition appear enter-active-class="transition ease-out duration-300"
                            leave-active-class="transition ease-out duration-500" enter-from-class="opacity-0" leave-to-class="opacity-0">
                            <div class="bg-[#2a3238] absolute bottom-[60px] w-[70px] h-[80px] rounded-[15px] z-100" v-if="isOpen" ref="menu">
                                <div class="flex flex-col gap-y-2 pt-2 divide-y-2 divide-[#4C4A4A]" >
                                    <Link :href="route('profile')" class="pl-[9px]">Profile</Link> 
                                    <Link :href="route('logout')" method="post" as="button" type="button" >Logout</Link>  
                                </div>
                            </div>
                        </Transition> 
                    </div>
                </div>
                <div v-else class="basis-[25%] flex justify-center items-end h-[100%]">
                    <Link :href="route('login')" >Login</Link>
                </div>
            </div>
        </div>
    </Transition> 
</template>