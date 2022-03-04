<template>
<div style="overflow:hidden">
<Navbar/>
  <router-view/>
</div>
</template>

<style>

</style>
<script>
import Navbar from '@/components/MainNavbar.vue';
export default {
    components:{Navbar}
}
</script>
