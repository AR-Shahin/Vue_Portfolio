<template>
    <section id="testimonial_section">
        <div class="row text-center mb-5">
            <div class="col-12">
                <div class="sec_title wow animate__animated animate__zoomIn">
                    <h2 class="mb-0 pb-1">My Testimonials</h2>
                    <p class="m-0 p-0">My clients and students reviews!</p>
                </div>
            </div>
        </div>
    <masonry-wall :items="data.sliders" :ssr-columns="1" :column-width="300" :gap="5">
        <template #default="{ item }">
        <div style="">
            <img :src="imgPath(item.path)" alt="" class="img-fluid w-100" />
        </div>
        </template>
    </masonry-wall>
    </section>
  
</template>

<script>
import MasonryWall from '@yeger/vue-masonry-wall';
import { reactive } from '@vue/reactivity';
export default {
    components : {
        MasonryWall
    },
   setup(){
        const data = reactive({
            'sliders' : [
                {'title' : 'Codding','path' : 'img-1.jpg'},
                {'title' : 'Photo Shotting','path' : 'img-2.png'},
            ],
        });
        const skills = reactive({
            'frontend' : ['HTML5','CSS3','BOOTSTRAP4','WordPress','JAVASCRIPT','JQUERY','Vue','Nuxt','Tailwind CSS'],
            'backend' : ['PHP','AJAX','AXIOS','MYSQL','LARAVEL','Lumen'],
            'others' : ['GIT','GITHUB','GITLAB','Mark Down','Adobe Photoshop'],
        });
        const imgPath = (el)=>{
            return `https://laravel-portfolio-api.herokuapp.com/images/testimonial/${el}`
        }
        return{
            data,imgPath,skills
        }
    }
}
</script>



<style lang="scss" scoped>
#testimonial_section{
    background: #fec9576c;
}
</style>
