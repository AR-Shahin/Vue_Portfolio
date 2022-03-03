<template>
  <div class="home">
    <hero-section/>

    <about-section/>

    <service-section/>

    <portfolio-section/>
    <footer-section/>
  </div>
</template>

<script>
import HeroSection from '@/components/sections/HeroSection.vue';
import AboutSection from '@/components/sections/AboutSection.vue';
import ServiceSection from '@/components/sections/ServiceSection.vue';
import PortfolioSection from '@/components/sections/PortfolioSection.vue';
import FooterSection from '@/components/sections/FooterSection.vue';
// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HeroSection,AboutSection,
    ServiceSection,
    PortfolioSection,
    FooterSection
  }
}
</script>
,
    FooterSection
