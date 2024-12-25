<script setup>
    import { ref, defineEmits, watch, onBeforeMount } from 'vue';
    const navBarOpen = ref(false)
    const emit = defineEmits(['item-clicked'])

    const passNavBarOpen = () => {
        navBarOpen.value = !navBarOpen.value
    }

    watch(navBarOpen, () => {
        emit('item-clicked', navBarOpen)
    });
    
   
    onBeforeMount(() => {
        emit('item-clicked', navBarOpen)
    })

</script>
<template>
     <Head>
        <meta head-key="description" name="description" content="Stream and download music"/>
    </Head>
    <div class="relative" >
        <div class="fixed flex flex-col gap-y-4 w-full bg-background z-30">
            <div class="mt-[33px] relative mb-10 w-full">
                <div class="absolute z-20">
                    <img class="pt-4 pl-[15px] hover:cursor-pointer" src="/public/icons/sideMenu.png" alt="sideMenu"  @click="passNavBarOpen" >
                </div>
                <div class="absolute grid w-full z-10" >
                    <p class="text-[32px] text-textRed font-nats justify-self-center">Music Stream</p>
                </div>
            </div>
            <slot name="links"></slot>
        </div>
        <div class="absolute mt-[180px] z-20">
            <slot name="main"></slot>
        </div>
    </div>
</template>