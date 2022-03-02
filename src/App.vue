<template>
<Navbar/>
  <router-view/>
</template>

<style>

</style>
<script>
import Navbar from '@/components/MainNavbar.vue';
export default {
    components:{Navbar}
}
</script>
