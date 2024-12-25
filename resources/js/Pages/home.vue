<script setup>
    import Header from '../Layouts/header.vue'
    import navBar from '../Layouts/navigationBar.vue'
    import { register } from 'swiper/element/bundle';
    import 'swiper/css/pagination';
    import 'swiper/css/navigation';
  
    import 'swiper/css';
    register();
    defineOptions({
        layout : Header,
    })
</script>
<template>
    <Head>
        <title> | Home</title>
        <meta head-key="description" name="description" content="The Homepage"/>
    </Head>
    <div class="w-screen">
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
    <navBar></navBar>
</template>