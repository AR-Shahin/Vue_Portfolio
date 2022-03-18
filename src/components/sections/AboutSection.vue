<template>
<section id="about_section">
   <div class="container">
      <div class="row">
         <div class="col-12 col-sm-6 col-md-6 align-self-center">
            <div class="myImage_slider">
               <div class="owl-carousel about_slider">
                  <div class="single-slider-image ">
                     <carousel :items-to-show="1" :autoplay="2000" :wrapAround=true :transition=300>
                        <slide v-for="slide in  data.sliders " :key="slide">
                           <div class="img-box">
                               {{  }}
                              <img :src="imgPath(slide.path)" alt="" class="img-fluid w-100" />
                           </div>
                           <div class="pos_content">
                              <span>{{ slide.title }}</span>
                           </div>
                        </slide>
                     </carousel>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-6">
            <div class="heading">
               <h2 class="mb-0 pb-1">About Me</h2>
               <p class="m-0 p-0">My Introduction</p>
            </div>
            <div class="tab_buttons border-1 mt-3">
               <div class="row">
                  <div class="col-12">
                     <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                           <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">About Me</button>
                           <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Skills</button>
                           <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                        </div>
                     </nav>
                     <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                           <p class="mt-2">
                               Hello, I am shahin. I am a student of computer science and engineering at Southeast University. I've been working on Laravel and Vue Js for one year. I've completed an internship a couple of months ago in BK software. During this internship, I've contributed to a couple of projects, like E-commerce,ERP solutions, POS and other stuffs. Currently,I am working on an education management system. Where a student can post their assignments and the teacher can bid this assignment. In this project, per day we handle 1000 user requests. In my leisure time, I make programming related videos on my youtube channel and write content on my website. So that I can learn new technologies and improve my teaching skills.
                           </p>
                           
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                           <div class="card">
                              <div class="card-body">
                                 <div class="row">
                                    <div class="col-12 col-md-4">
                                       <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                          <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                          Frontend
                                          </button>
                                          <button
                                             class="nav-link"
                                             id="v-pills-profile-tab"
                                             data-bs-toggle="pill"
                                             data-bs-target="#v-pills-profile"
                                             type="button"
                                             role="tab"
                                             aria-controls="v-pills-profile"
                                             aria-selected="false"
                                             >
                                          Backend
                                          </button>
                                          <button
                                             class="nav-link"
                                             id="v-pills-messages-tab"
                                             data-bs-toggle="pill"
                                             data-bs-target="#v-pills-messages"
                                             type="button"
                                             role="tab"
                                             aria-controls="v-pills-messages"
                                             aria-selected="false"
                                             >
                                          Others
                                          </button>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-8" id="abt_skill">
                                       <div class="tab-content" id="v-pills-tabContent">
                                          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                             <ul>
                                                <li v-for="skill in skills.frontend" :key="skill">
                                                    <span class="mx-1">{{skill}}</span>
                                                </li>
                                                
                                             </ul>
                                          </div>
                                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                             <ul>
                                                <li v-for="skill in skills.backend" :key="skill">
                                                    <span class="mx-1">{{skill}}</span>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                             <ul>
                                                <li v-for="skill in skills.others" :key="skill">
                                                    <span class="mx-1">{{skill}}</span>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <div class="row">
                              <div class="col-12">
                                 <div class="card" style="border: none;">
                                    <div class="card-body" style="padding: 5px; padding-top: 8px;">
                                       <table class="table table-bordered">
                                          <thead>
                                             <tr>
                                                <th>Phone</th>
                                                <td><span>+8801754100439</span></td>
                                             </tr>
                                             <tr>
                                                <th>Email</th>
                                                <td>
                                                   <span>
                                                   <a href="">mdshahinmije96@gmail.com</a>
                                                   </span>
                                                </td>
                                             </tr>
                                             <tr>
                                                <th>Address</th>
                                                <td><span>Mohakhali,Dhaka,Bangladesh</span></td>
                                             </tr>
                                             <tr>
                                                <th>Resume</th>
                                                <td><a href="" class="btn btn-link">Resume Link</a></td>
                                             </tr>
                                          </thead>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</template>

<script>
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide } from 'vue3-carousel';
import { reactive } from '@vue/reactivity';

    export default {
        components: {
        Carousel,
        Slide,
    },
    setup(){
        const data = reactive({
            'sliders' : [
                {'title' : 'Codding','path' : 'img.jpg'},
                {'title' : 'Photo Shotting','path' : 'img.png'},
                {'title' : 'Teaching C Programming','path' : 'img2.JPG'},
                {'title' : 'Programming Contest Prize','path' : 'img3.JPG'},
                {'title' : 'Taking Class at SEU','path' : 'img4.JPG'},
            ],
        });
        const path = "https://laravel-portfolio-api.herokuapp.com/images/my/img.png"
        const skills = reactive({
            'frontend' : ['HTML5','CSS3','BOOTSTRAP4','WordPress','JAVASCRIPT','JQUERY','Vue','Nuxt','Tailwind CSS'],
            'backend' : ['PHP','AJAX','AXIOS','MYSQL','LARAVEL','Lumen'],
            'others' : ['GIT','GITHUB','GITLAB','Mark Down','Adobe Photoshop'],
        });
        const imgPath = (el)=>{
            return `https://laravel-portfolio-api.herokuapp.com/images/my/${el}`
        }
        return{
            data,imgPath,skills,path
        }
    }
    }
</script>

<style lang="css" scoped>
.myImage_slider{}
.myImage_slider .owl-dots{
    display: none;
}
.myImage_slider .single-slider-image{
    position: relative;
}
.myImage_slider .single-slider-image .pos_content{
    position: absolute;
    right: 0;
    bottom: 0;
    background: #6D214F;
    color: #fff;
    padding: 10px;
    border-top-left-radius: 5px;
}
    #about_section ul li{
        display: inline-block;
    }
    #about_section ul li span{
        background: #F8EFBA;
        display: inline-block;
        padding: 5px;
        font-size: 14px;
        font-weight: 500;
        margin-top: 5px;
        border-radius: 2px;
        transition: .6s;
        color: #182C61;
    }
    #about_section ul li span:hover{
        color: #111;
    }
    
</style>
