<template>
  <div class="home">
    <hero-section/>
    <hr>
    <about-section/>
    <hr>
    <service-section/>
    <hr>
    <portfolio-section/>
  </div>
</template>

<script>
import HeroSection from '@/components/sections/HeroSection.vue';
import AboutSection from '@/components/sections/AboutSection.vue';
import ServiceSection from '@/components/sections/ServiceSection.vue';
import PortfolioSection from '@/components/sections/PortfolioSection.vue';
// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HeroSection,AboutSection,
    ServiceSection,
    PortfolioSection
    
  }
}
</script>
