<template>
  <div class="home">
    <hero-section/>
    <about-section/>

    <service-section/>
    <youtube-section/>
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

// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HeroSection,AboutSection,
    ServiceSection,
    YoutubeSection,PortfolioSection,ContactSection
  }
}
</script>
,
    VueSlider,
    FooterSection
