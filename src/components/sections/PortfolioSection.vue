<template>
    <section id="portfolio_section">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <div class="sec_title wow animate__animated animate__zoomIn">
                    <h2 class="mb-0 pb-1">My Portfolio</h2>
                    <p class="m-0 p-0">My Recent Work</p>
                    <p class="m-0 p-0" style="background: red;color:white">NB : This section isn't dynamic yet!!</p>
                </div>
            </div>
        </div>

        <div id="portfolio">
            <div class="row ">
                    <div class="col-12 col-sm-6 col-md-4 mb-4 wow animate__animated animate__fadeInUp"
                        data-wow-delay=".5s" v-for="i in 6" :key="i">
                        <div class="card">
                            <div class="card-body">
                                <div class="img_box text-center">
                                    <a href="" class="popup"><img
                                            src="../../assets/img/about/bug.png" alt="" class="img-fluid" /></a>
                                    <div class="img-content">
                                        <h6 class="mt-3"><i
                                                style="color: #6d214f; font-size: 14px;">Processing!!!</i>
                                        </h6>
                                        <h5>Shahin</h5>
                                        <a href="" class="btn btn-block btn-outline-info mt-1"><i
                                                class="fa fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 text-center">
            <a href="{{ route('projects.index') }}" class="btn btn-outline-info btn-lg border-gradinant">See More <i
                    class="fa fa-link"></i></a>
        </div>
    </div>
</section>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>
#portfolio_section{
    background: rgba(214, 162, 232, 0.17);
}
#portfolio {
    margin-top: 25px;
}
#portfolio_section .card{
    box-shadow: 0 8px 6px -6px black;
    transition: .6s;
}
#portfolio_section .card:hover{
    box-shadow: none;
}
</style>
