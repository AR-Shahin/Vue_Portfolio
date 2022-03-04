<template>
  <div class="home">
    <hero-section/>

    <about-section/>

    <service-section/>
    <youtube-section/>
    <portfolio-section/>
  </div>
</template>

<script>
import HeroSection from '@/components/sections/HeroSection.vue';
import AboutSection from '@/components/sections/AboutSection.vue';
import ServiceSection from '@/components/sections/ServiceSection.vue';
import PortfolioSection from '@/components/sections/PortfolioSection.vue';
import YoutubeSection from '@/components/sections/YoutubeSection.vue';
// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HeroSection,AboutSection,
    ServiceSection,
    YoutubeSection,PortfolioSection
  }
}
</script>
,
    FooterSection
