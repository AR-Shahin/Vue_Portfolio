<template>
  <div class="home">
    <hero-section/>
    <hr>
    <about-section/>
    <hr>
  </div>
</template>

<script>
import HeroSection from '@/components/sections/HeroSection.vue';
import AboutSection from '@/components/sections/AboutSection.vue';
// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HeroSection,AboutSection
    
  }
}
</script>
