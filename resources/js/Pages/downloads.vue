<script setup>
    
    import Header from '../Layouts/header.vue'
    import navBar from '../Layouts/navigationBar.vue'
    import Footer from '../Components/footer.vue';
    import { ref } from 'vue';
   
    const nnavBarOpen = ref(false) 

    const passNavBarOpen = (navBarOpen) => {
        nnavBarOpen.value = navBarOpen
    }

</script>
<template>
    <Head>
        <title> | Latest</title>
        <meta head-key="description" name="description" content="Latest songs"/>
    </Head>
    <Header @item-clicked="passNavBarOpen">
        <template #links>
            <div class="bg-[#0C1E2F] w-full font-nats pt-5">
                <div class="w-[95%]">
                    <div class="w-full h-[60px] flex gap-x-[55%] pl-[15px] text-[24px] text-white">
                        <div>
                            <p>Downloads</p>
                        </div> 
                        <div>
                            <img class="w-[36px] h-[34px]" src="/public/icons/search.png" alt="search">
                        </div> 
                    </div>
                </div>
            </div>
        </template> 
        <template #main>
            <div class="w-full">
                <div class="text-white w-[95%] flex flex-col pl-[4%] divide-y-2 divide-[#4C4A4A] mt-[-10px]">
                    <div class="flex items-center gap-x-[7%] pb-5 pt-6">
                        <div class="h-[160px] w-[40%] rounded-[15px]">
                            <img src="/public/images/9.jpg" alt="" class="w-[100%] h-[100%] rounded-[15px]">
                        </div>
                        <div class="flex flex-col font-Nats text-[14px]">
                            <div class="flex flex-col items-center justify-center pb-2">
                                <p class="text-[24px] grid content-center h-[20px]">Sweet Symphony</p>
                                <p class="text-[20px] text-[#786D6D]">James White</p>
                            </div>
                            <p>Downloaded : 4 hours ago</p>
                            <p>Price : MK10,000</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-[7%] pb-7 pt-6">
                        <div class="h-[160px] w-[40%] rounded-[15px]">
                            <img src="/public/images/10.jpg" alt="" class="w-[100%] h-[100%] rounded-[15px]">
                        </div>
                        <div class="flex flex-col font-Nats text-[14px]">
                            <div class="flex flex-col items-center justify-center pb-2">
                                <p class="text-[24px] grid content-center h-[20px]">Lalala</p>
                                <p class="text-[20px] text-[#786D6D]">Jimmy</p>
                            </div>
                            <p>Downloaded : 4 hours ago</p>
                            <p>Price : MK10,000</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-[7%] pb-7 pt-6">
                        <div class="h-[160px] w-[40%] rounded-[15px]">
                            <img src="/public/images/11.jpg" alt="" class="w-[100%] h-[100%] rounded-[15px]">
                        </div>
                        <div class="flex flex-col font-Nats text-[14px]">
                            <div class="flex flex-col items-center justify-center pb-2">
                                <p class="text-[24px] grid content-center h-[20px]">Happy Day</p>
                                <p class="text-[20px] text-[#786D6D]">Mary</p>
                            </div>
                            <p>Downloaded : 4 hours ago</p>
                            <p>Price : MK10,000</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-[7%] pb-7 pt-6">
                        <div class="h-[160px] w-[40%] rounded-[15px]">
                            <img src="/public/images/12.jpg" alt="" class="w-[100%] h-[100%] rounded-[15px]">
                        </div>
                        <div class="flex flex-col font-Nats text-[14px]">
                            <div class="flex flex-col items-center justify-center pb-2">
                                <p class="text-[24px] grid content-center h-[20px]">Lonely</p>
                                <p class="text-[20px] text-[#786D6D]">love</p>
                            </div>
                            <p>Downloaded : 4 hours ago</p>
                            <p>Price : MK10,000</p>
                        </div>
                    </div>
                </div>
                <Footer :navOpen="nnavBarOpen" class="w-screen"></Footer>
            </div>
            <navBar :navTrue ="nnavBarOpen" ref="navBar"></navBar>
        </template>
    </Header>
</template>