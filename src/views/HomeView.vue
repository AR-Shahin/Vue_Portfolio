<template>
  <div class="home">
    <hero-section/>
    <about-section/>
    <!-- <AnotherVideo/> -->
    <service-section/>
    <!-- {{ data.courses }} -->
    <youtube-section :courses="data.courses"/>
    <portfolio-section/>
    <contact-section/>

  </div>
</template>

<script>
import HeroSection from '@/components/sections/HeroSection.vue';
import AboutSection from '@/components/sections/AboutSection.vue';
import ServiceSection from '@/components/sections/ServiceSection.vue';
import PortfolioSection from '@/components/sections/PortfolioSection.vue';
import YoutubeSection from '@/components/sections/YoutubeSection.vue';
import ContactSection from '@/components/sections/ContactSection.vue';


import { onMounted, reactive } from '@vue/runtime-core';
import axios from 'axios';
import { useStore } from 'vuex';

// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HeroSection,AboutSection,
    ServiceSection,
    YoutubeSection,PortfolioSection,ContactSection
  },
  setup(){
      const store = useStore();
      const url = store.getters.getBaseUrl;
      const data = reactive({
          courses : []
      })
      onMounted(() => {
          axios.get(`${url}/courses`)
          .then(res => {
              data.courses = res.data.data
          })
      })

      return{
          data
      }
  }

}
</script>
,
    VueSlider,
    FooterSection
