<template>
    <section id="single_course" class="mt-5 pt-5">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <img src="../assets/img/my/img.jpg" alt="" class="img-fluid thumb_image img-thumbnail">
                    <h1 class="my-2">Web Development With Laravel</h1>
                    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus sapiente asperiores quasi minima vero dolores architecto odit magnam dignissimos! Minus qui voluptatibus quae, pariatur cupiditate eligendi? At quibusdam nobis, doloribus magnam quos blanditiis ad fugit repellat? Voluptas alias, ea illum sequi provident nam ullam, voluptates ipsam fuga pariatur quis animi incidunt natus? Hic magnam minus qui eius omnis error nostrum aut excepturi fugiat atque deleniti, labore a. Quos quaerat id veritatis, aliquam accusamus perspiciatis? Omnis aperiam assumenda incidunt commodi, quisquam atque totam, ad saepe possimus sapiente unde porro! Doloribus ipsam animi reiciendis alias doloremque aliquam necessitatibus, numquam a rem eum?</p>

                <h4>About Course</h4>
                <ul>
                     <li><span class="text-muted"><b>Duration</b> : 5hr</span></li>
                    <li><span class="text-muted"><b>Videos</b> : 10+</span></li>
                    <li><b>Tags : </b><span class="badge rounded-pill bg-primary mx-1">PHP</span>
                    <span class="badge rounded-pill bg-primary mx-1">WEB</span>
                    <span class="badge rounded-pill bg-primary mx-1">Laravel</span>
                    </li>
                </ul>
    <hr>
                <!-- course videos -->
                <h4>Course Videos</h4>
                <div class="videos">
                    <div class="accordion accordion-flush" :id="`accordionFlushExample_${i}`" v-for="i in 15" :key="i">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" :data-bs-target="`#flush-collapseOne_${i}`" aria-expanded="false" >
                            Accordion Item # {{ i }}
                        </button>
                        </h2>
                        <div :id="`flush-collapseOne_${i}`" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" :data-bs-parent="`accordionFlushExample_${i}`">
                        <div class="accordion-body">
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <div class="ratio ratio-21x9">
  <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
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
    export default {
        
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
