<template>
    <div>
  <v-typical
    class="blink"
    :steps="[
    'ML Engineer', 2000,
    'Web Developer', 1000,
    'Instructor', 500,
    'Photographer', 1000,
     ]"
    :loop="Infinity"
    :wrapper="'h5'"
  ></v-typical>
    </div>
</template>

<script>
    import VTypical from 'vue-typical';
    export default {
        components:{
            VTypical
        }
    }
</script>

<style lang="scss" scoped>
.blink::after {
  content: '!';
  animation: blink 1s infinite step-start;
}

@keyframes blink {
  50% {
    opacity: 0;
  }
}
</style>
