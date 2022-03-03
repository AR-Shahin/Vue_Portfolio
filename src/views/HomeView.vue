<template>
  <div class="home">
    <hero-section/>
    <hr>
    <about-section/>
    <hr>
    <service-section/>
  </div>
</template>

<script>
import HeroSection from '@/components/sections/HeroSection.vue';
import AboutSection from '@/components/sections/AboutSection.vue';
import ServiceSection from '@/components/sections/ServiceSection.vue';
// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HeroSection,AboutSection,
    ServiceSection
    
  }
}
</script>
