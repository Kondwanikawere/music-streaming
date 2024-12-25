<script setup>
    import navBar from '../Layouts/navigationBar.vue'
    import Footer from '../Components/footer.vue';
    import { ref } from 'vue';

</script>
<template>
    <Head>
        <title> | Description</title>
        <meta head-key="description" name="description" content="video description"/>
    </Head>
    
    <div class="text-white w-full">            
        <div class="w-full h-[452px] relative">
            <img src="/public/images/6.jpg" alt="song" class="absolute h-[100%] w-[100%] object-cover ">
            <div class="absolute w-[100%] h-[100%] bg-gradient-to-t from-background to-transparent to-15% grid justify-center pt-[406px]">
                <div class="w-[81px] h-[27px] bg-textRed flex justify-center items-center gap-2">
                    <img src="/public/icons/play.png" alt="play" class=" h-[20px] w-[16px]">
                    <p class="font-Nats text-[16px]">Play</p>
                </div>
            </div>
        </div>
        <div class="w-full border-t-2 border-[#212121] pl-[5%] pr-[8%] pt-[10px] mb-[20px]">
            <div class="flex justify-between">
                <p class="text-[24px] font-Nats">Happy Day</p>
                <div class="flex text-[24px] font-Nats gap-[20%] items-center">
                    <img src="/public/icons/rate.png" alt="rate" class="h-[20px] w-[20px]">
                    <p>7.0</p>
                </div>
            </div>
            <div class="flex gap-[2%] font-Nats text-[12px] items-center">
                <p>2024</p>
                <div class="border-2 border-textRed rounded-[5px] h-[13px] w-[7%] grid place-content-center ">
                    <p>
                        0+
                    </p>
                </div>
                <p>4m</p>
                <div class="border-2 border-textRed rounded-[5px] h-[13px] w-[15%] grid place-content-center ">4K UHD</div>
            </div>
            <div class="flex font-Nats text-[12px] justify-center gap-x-[18%] pt-[14px]">
                <div class="flex flex-col items-center">
                    <img src="/public/icons/downloads.png" alt="Download" class="w-[26px] h-[20px]">
                    <p>Download</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/public/icons/rate.png" alt="Rate" class="w-[27px] h-[26px]">
                    <p>Rate</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/public/icons/share.png" alt="share" class="w-[25px] h-[25px]">
                    <p>Share</p>
                </div>
            </div>
            <div class="font-Nats">
                <p class="text-[24px] grid content-center h-[20px]">Overview</p>
                <p class="w-[94%] text-[12px] pt-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation  
                    <span class="text-[#786D6D]"> Read more</span>
                </p>
            </div>
            <div class="flex gap-x-[4%] pt-2">
                <div class="w-[40px] h-[40px] rounded-full border-2 border-textRed">
                    <img src="/public/images/7.jpg" alt="" class="w-[100%] h-[100%] object-cover rounded-full">
                </div>
                <div class="w-[40px] h-[40px] rounded-full border-2 border-textRed">
                    <img src="/public/images/8.jpg" alt="" class="w-[100%] h-[100%] object-cover rounded-full">
                </div>
                <div class="w-[40px] h-[40px] rounded-full border-2 border-textRed">
                    <img src="/public/images/9.jpg" alt="" class="w-[100%] h-[100%] object-cover rounded-full">
                </div>
                <div class="w-[40px] h-[40px] rounded-full border-2 border-textRed flex text-textRed text-[40px] justify-center items-center gap-x-[3px]">
                    <div class="h-[5px] w-[5px] rounded-full bg-textRed"></div>
                    <div class="h-[5px] w-[5px] rounded-full bg-textRed"></div>
                    <div class="h-[5px] w-[5px] rounded-full bg-textRed"></div>
                </div>
            </div>
            <div>
                <p class="text-textRed text-[12px] pt-1">More songs</p>
                <div class="flex pt-[6px] w-[100%] gap-x-[5%] text-[12px] font-Nats">
                    <div class="w-[23%]">
                        <img src="/public/images/9.jpg" alt="" class="h-[77px] w-[100%] rounded-[12px]">
                        <p class="pl-[10%]">song</p>
                    </div>
                    <div class="w-[23%]">
                        <img src="/public/images/10.jpg" alt="" class="h-[77px] w-[100%] rounded-[12px]">
                        <p class="pl-[10%]">song</p>
                    </div>
                    <div class="w-[23%]">
                        <img src="/public/images/11.jpg" alt="" class="h-[77px] w-[100%] rounded-[12px]">
                        <p class="pl-[10%]">song</p>
                    </div>
                    <div class="w-[23%]">
                        <img src="/public/images/12.jpg" alt="" class="h-[77px] w-[100%] rounded-[12px]">
                        <p class="pl-[10%]">song</p>
                    </div>
                </div>
            </div>
        </div>
        <Footer></Footer>
    </div>
    <navBar hideNav="false"></navBar>
    
</template>