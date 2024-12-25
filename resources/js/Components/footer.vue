<script setup>
    import { ref, onMounted } from 'vue';
    const props = defineProps({
        navOpen: {
            type: Boolean,
            default : true
        }
    })

    const navOpener = ref(props.navOpen);
    
    onMounted(() => {
        navOpener.value = true;
    })
</script>
<template>
    <div class="w-full border-t-2 border-[#4C4A4A] h-[125px]" :class="{'!h-[198px]': navOpener }">
                <div class="w-full h-[118px]">
                    <div class="flex justify-end gap-x-[2%] pt-3 pr-[4%]">
                        <img src="/public/icons/whatsapp.png" alt="whatsapp">
                        <img src="/public/icons/facebook.png" alt="facebook">
                        <img src="/public/icons/instagram.png" alt="instagram">
                        <img src="/public/icons/gmail.png" alt="gmail">
                    </div>
                    <div class="w-full h-[50px] grid mt-3">
                        <p class="font-Nats text-[12px] place-self-center self-center">Copyright © 2024 Mw, Inc</p>
                        <p class="font-Nats text-[12px] place-self-center self-center">Mw is a registered trademark of Mw, Inc.</p>
                        <p class="font-Nats text-[12px] place-self-center self-center">All rights reserved.</p>
                    </div>
                </div>
            </div>
</template>