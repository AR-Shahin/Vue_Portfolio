<template>
<div class="row">

    <div class="col-md-4">
         <carousel :items-to-show="1" :autoplay=1 :wrapAround=true :transition=300>
    <slide v-for="slide in  paths.data " :key="slide">
        <!-- {{ paths.data[slide] }} -->
     <img src="../assets/img/my/img.png" alt="" class="img-fluid">
     <!-- <img src="../assets/img/my/img.jpg" alt="" class="img-fluid"> -->
     <!-- <img src="../assets/img/my/img.png" alt="" class="img-fluid">
     <img src="../assets/img/my/img.png" alt="" class="img-fluid"> -->
    </slide>

  </carousel>
        
    </div>
</div>
 
</template>

<script>
// If you are using PurgeCSS, make sure to whitelist the carousel CSS classes
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide } from 'vue3-carousel';
import { reactive } from '@vue/reactivity';

export default {
  name: 'App',
  components: {
    Carousel,
    Slide,
  },

  setup(){
      const paths = reactive({
          'data' : [
          '../assets/img/my/img.png','../assets/img/my/img.jpg'
      ],
      'ars' : ['https://picsum.photos/200/300?random=1','https://picsum.photos/200/300?random=2','https://picsum.photos/200/300?random=3']
      }
      )

      return {
          paths
      }
  }
};
</script>
