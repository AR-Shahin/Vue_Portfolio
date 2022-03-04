<template>
<div style="overflow:hidden">
<Navbar/>
  <router-view/>
    <footer-section/>
</div>
</template>

<style>

</style>
<script>
import FooterSection from '@/components/sections/FooterSection.vue';

import Navbar from '@/components/MainNavbar.vue';
export default {
    components:{Navbar,FooterSection}
}
</script>
