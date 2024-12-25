<script setup>
    import Header from '../Layouts/header.vue'
    import navBar from '../Layouts/navigationBar.vue'
    import Footer from '../Components/footer.vue';
    import { register } from 'swiper/element/bundle';
    import 'swiper/css/pagination';
    import 'swiper/css/navigation';
  
    import 'swiper/css';
    import { ref } from 'vue';
    register();

    const nnavBarOpen = ref(false) 

    const passNavBarOpen = (navBarOpen) => {
        nnavBarOpen.value = navBarOpen
    }

</script>
<template>
    <Head>
        <title> | Trending</title>
        <meta head-key="description" name="description" content="Trending songs"/>
    </Head>
        <Header @item-clicked="passNavBarOpen">
            <template #links>
                <div class="bg-[#0C1E2F] w-full font-nats pt-5">
                    <div class="w-[95%]">
                        <div class="w-full h-[60px] flex gap-x-[10%] pl-[15px] text-[24px] text-white">
                            <div>
                                <Link :href="route('search')"><img class="w-[36px] h-[34px]" src="/public/icons/search.png" alt="search"></Link>
                            </div>
                            <div class="h-[43px] w-[35%] grid rounded-[15px]" :class="{' border-2 border-textRed ': $page.component === 'latest'}">
                                <Link class="justify-self-center" :href="route('latest')" ><p class="col-span-3 ">Latest</p></Link>
                            </div>
                            <div class="h-[43px] w-[35%] grid rounded-[15px] " :class="{' border-2 border-textRed ': $page.component === 'trending'}">
                                <Link class="justify-self-center" :href="route('trending')"><p class="col-span-3">Trending</p></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
            <template #main>
                <div class="text-white w-full">
                    <div class="w-screen">
                        <p class="pl-[10%] font-Nats text-[24px]">Trending songs</p>
                        <div class="text-white h-[200px] w-[100%]">
                            <swiper-container class=" w-[100%] h-[100%] !grid !content-center !pt-0" :slides-per-view="2" :space-between="1" :loop="true"  :modules="modules" :autoplay="{
                                delay: 5000,
                                disableOnInteraction: true,
                                }" >
                                <swiper-slide class="!h-[200px] rounded-[15px] grid "><img src="/public/images/hero1.jpg" alt="" class="place-self-center self-center w-[85%] h-[150px] rounded-[15px] hover:scale-x-110 hover:scale-y-125"></swiper-slide>
                                <swiper-slide class="h-[200px] rounded-[15px] grid "><img src="/public/images/hero2.jpg" alt="" class="place-self-center self-center w-[85%] h-[150px] rounded-[15px] hover:scale-x-110 hover:scale-y-125"></swiper-slide>
                                <swiper-slide class="h-[200px] rounded-[15px] grid "><img src="/public/images/hero3.jpg" alt="" class="place-self-center self-center w-[85%] h-[150px] rounded-[15px] hover:scale-x-110 hover:scale-y-125"></swiper-slide>
                                <swiper-slide class="h-[200px] rounded-[15px] grid "><img src="/public/images/4.jpg" alt="" class="place-self-center self-center w-[85%] h-[150px] rounded-[15px] hover:scale-x-110 hover:scale-y-125"></swiper-slide>
                                <swiper-slide class="h-[200px] rounded-[15px] grid "><img src="/public/images/5.jpg" alt="" class="place-self-center self-center w-[85%] h-[150px] rounded-[15px] hover:scale-x-110 hover:scale-y-125"></swiper-slide>
                                <swiper-slide class="h-[200px] rounded-[15px] grid "><img src="/public/images/6.jpg" alt="" class="place-self-center self-center w-[85%] h-[150px] rounded-[15px] hover:scale-x-110 hover:scale-y-125"></swiper-slide>
                            </swiper-container>
                        </div>
                    </div>

                    <div class="pl-[10%] mb-[50px]">
                        <p class="font-Nats text-[24px]">All songs</p>
                        <div class="flex gap-[3%] pt-3 h-[172px] mb-10">
                            <div class="w-[30%] h-[100%] ">
                                <img src="/public/images/4.jpg" alt="" class="w-[100%] h-[100%] rounded-[15px] object-cover">
                                <p class="font-Nats text-[12px] pt-1 pl-[10%]">Lorem ipsum.</p>
                            </div>
                            <div class="w-[30%] h-[100%]">
                                <img src="/public/images/5.jpg" alt="" class="w-[100%] h-[100%] rounded-[15px] object-cover">
                                <p class="font-Nats text-[12px] pt-1 pl-[10%]"> dolor sit.</p>
                            </div>
                            <div class="w-[30%] h-[100%]">
                                <img src="/public/images/6.jpg" alt="" class="w-[100%] h-[100%] rounded-[15px] object-cover">
                                <p class="font-Nats text-[12px] pt-1 pl-[10%]">amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="flex gap-[3%] pt-3 h-[172px] mb-10">
                            <div class="w-[30%] h-[100%] ">
                                <img src="/public/images/4.jpg" alt="" class="w-[100%] h-[100%] rounded-[15px] object-cover">
                                <p class="font-Nats text-[12px] pt-1 pl-[10%]">Lorem ipsum.</p>
                            </div>
                            <div class="w-[30%] h-[100%]">
                                <img src="/public/images/5.jpg" alt="" class="w-[100%] h-[100%] rounded-[15px] object-cover">
                                <p class="font-Nats text-[12px] pt-1 pl-[10%]"> dolor sit.</p>
                            </div>
                            <div class="w-[30%] h-[100%]">
                                <img src="/public/images/6.jpg" alt="" class="w-[100%] h-[100%] rounded-[15px] object-cover">
                                <p class="font-Nats text-[12px] pt-1 pl-[10%]">amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="flex gap-[3%] pt-3 h-[172px] mb-10">
                            <div class="w-[30%] h-[100%] ">
                                <img src="/public/images/4.jpg" alt="" class="w-[100%] h-[100%] rounded-[15px] object-cover">
                                <p class="font-Nats text-[12px] pt-1 pl-[10%]">Lorem ipsum.</p>
                            </div>
                            <div class="w-[30%] h-[100%]">
                                <img src="/public/images/5.jpg" alt="" class="w-[100%] h-[100%] rounded-[15px] object-cover">
                                <p class="font-Nats text-[12px] pt-1 pl-[10%]"> dolor sit.</p>
                            </div>
                            <div class="w-[30%] h-[100%]">
                                <img src="/public/images/6.jpg" alt="" class="w-[100%] h-[100%] rounded-[15px] object-cover">
                                <p class="font-Nats text-[12px] pt-1 pl-[10%]">amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                    <Footer :navOpen="nnavBarOpen"></Footer>
                </div>
                <navBar :navTrue ="nnavBarOpen"></navBar>
            </template>
        </Header>
</template>