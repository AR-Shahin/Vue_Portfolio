<template>
  <div class="home">
    <hero-section/>

  </div>
</template>

<script>
import HeroSection from '@/components/sections/HeroSection.vue'
// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HeroSection
    
  }
}
</script>
