<template>
    <section id="single_course" class="mt-5 pt-5">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <img :src="imageUrl()" alt="" class="img-fluid thumb_image img-thumbnail">
                    <div class="d-flex justify-content-between">
                    <h1 class="my-2">{{data.course.name}} </h1>
                    <router-link class="btn btn-sm btn-link" to="/">Home</router-link>
                    </div>
                    <p class="lead">{{data.course.long_des}}</p>

                <h4>About Course</h4>
                <ul>
                     <li><span class="text-muted"><b>Duration</b> : {{data.course.duration}}hr</span></li>
                    <li><span class="text-muted"><b>Videos</b> : {{typeof(data.course.videos)}}+</span></li>
                    <li><b>Tags : </b><span class="badge rounded-pill bg-primary mx-1">PHP</span>
                    <span class="badge rounded-pill bg-primary mx-1">WEB</span>
                    <span class="badge rounded-pill bg-primary mx-1">Laravel</span>
                    </li>
                </ul>
    <hr>
                <!-- course videos -->
                <h4>Course Videos</h4>
                <div class="videos">
                    <div class="accordion accordion-flush" :id="`accordionFlushExample_${video.id}`" v-for="video in data.course.videos" :key="video.id">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" :data-bs-target="`#flush-collapseOne_${video.id}`" aria-expanded="false" >
                            {{ video.title }}
                        </button>
                        </h2>
                        <div :id="`flush-collapseOne_${video.id}`" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" :data-bs-parent="`accordionFlushExample_${video.id}`">
                        <div class="accordion-body">
                            <h5>{{ video.title }}</h5>
                            <div class="ratio ratio-21x9">
  <iframe :src="video.link" :title="video.title" allowfullscreen></iframe>
  
</div>
                        </div>
                        </div>
                    </div>

                    </div>
                </div>
                </div> <!-- body -->
            </div>
        </div>
    </section>
</template>

<script>

import { onMounted, reactive } from '@vue/runtime-core';
import axios from 'axios';
import { useStore } from 'vuex';
import { useRoute } from 'vue-router';
    export default {
        setup(){
            const data = reactive({
                course : {}
            });
            const store = useStore();
            const url = store.getters.getBaseUrl;
            const route = useRoute();
            const slug = route.params.slug;
             const imageUrl = (path="default.png") => `https://laravel-portfolio-api.herokuapp.com/${path}`;
            onMounted(() => {
            axios.get(`${url}/courses/${slug}`)
            .then(res => {
                data.course = res.data.data;
            })
        })
            return{
                data,imageUrl
            }
        }
    }
</script>

<style lang="scss" scoped>
#single_course{
    background: #1abc9c2f;
}

.thumb_image{
    height: 60vh;
    width: 100vw;
}
</style>
