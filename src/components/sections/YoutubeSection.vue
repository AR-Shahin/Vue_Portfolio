<template>
    <section id="youtube_section">
        <div class="container">
            <div class="row text-center">
            <div class="col-12">
                <div class="sec_title wow animate__animated animate__zoomIn">
                    <h2 class="mb-0 pb-1">My Courses</h2>
                    <p class="m-0 p-0">My Free Courses</p>
                </div>
            </div>
        </div>

        <!-- Courses -->
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4 col-12 mb-4" v-for="course in courses" :key="course.id">
                    <div class="card text-center">
                        <div class="card-body">
                            <img :src="`http://127.0.0.1:8000/${course.image}`" alt="" class="img-fluid">
                            <h3 class="card-title my-3">{{course.name}}</h3>
                            <p>{{course.short_des}}</p>
                            <ul>
                                <li><span class="text-muted"><b>Duration</b> : {{course.duration}}hr</span></li>
                                <li><span class="text-muted"><b>Videos</b> : {{course.videos.length}}+</span></li>
                                <li><span class="text-muted"><b>Tags</b> : PHP,Laravel,WEB</span></li>
                                <li class="mt-2"><router-link to="/courses/abc" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> View Course</router-link></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</template>

<script>
import { onMounted } from '@vue/runtime-core'
    export default {
         props: {
             courses : {
                 type : Object
             }
         },
        setup(props){

     
            onMounted(() =>{
                console.log((props.courses[0]))
            })
        }
    }
</script>

<style lang="scss" scoped>
#youtube_section{
    background: #f1c40f2c;
}
</style>
