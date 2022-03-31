<template>
  <div class="home">
    <hero-section :social="data.social"/>
    <about-section/>
    <!-- <AnotherVideo/> -->
    <service-section/>
    <!-- {{ data.courses }} -->
    <youtube-section :courses="data.courses"/>
    <portfolio-section/>
    <TestimonialSection/>
    <contact-section :social="data.social"/>

  </div>
</template>

<script>
import HeroSection from '@/components/sections/HeroSection.vue';
import AboutSection from '@/components/sections/AboutSection.vue';
import ServiceSection from '@/components/sections/ServiceSection.vue';
import PortfolioSection from '@/components/sections/PortfolioSection.vue';
import YoutubeSection from '@/components/sections/YoutubeSection.vue';
import ContactSection from '@/components/sections/ContactSection.vue';
import TestimonialSection from '@/components/sections/TestimonialSection.vue';



import { onMounted, reactive } from '@vue/runtime-core';
import axios from 'axios';
import { useStore } from 'vuex';

// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HeroSection,AboutSection,
    ServiceSection,
    YoutubeSection,
    PortfolioSection,
    ContactSection,TestimonialSection

  },
  setup(){
      const store = useStore();
      const url = store.getters.getBaseUrl;
      const data = reactive({
          courses : [],
          social : {},
          sliders : []
      })
      onMounted(() => {
          axios.get(`${url}/courses`)
          .then(res => {
              data.courses = res.data.data
          })

          axios.get(`${url}/social-links`)
          .then(res => {
              data.social = res.data.data
          })

          axios.get(`${url}/sliders`)
          .then(res => {
              data.sliders = res.data.data
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
