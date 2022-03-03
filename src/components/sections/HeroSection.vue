<template>
    <div id="hero-section">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 align-self-center">
                        <div class="hero-text">
                            <span class="intro" style="display: inline-block">Hello, I'm</span>
                            <h1 class="">Anisur Rahman Shahin</h1>
                            <div class="tagline">
                                <div class="cd-intro">
                                    <h6 class="cd-headline letters rotate-2">
                                                <span class="cd-words-wrapper text-left">
                                                    <b class="is-visible">Web Developer</b>
                                                    <b>GraphicDesigner</b>
                                                    <b>Photographer</b>

                                                </span>
                                    </h6>
                                </div> </div>        <!--   <h6 style="font-size: 18px;m-0;p-0"><i>Web Designer</i></h6> -->
                            <div class="hero-social-media " >
                                <ul>
                                    <li><a href="@if($link){{$link->facebook}} @endif" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="@if($link){{$link->twitter}} @endif" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="@if($link){{$link->github}} @endif" target="_blank"><i class="fa fa-github"></i></a></li>
                                    <li><a href="@if($link){{$link->youtube}} @endif" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="@if($link){{$link->linkedin}} @endif" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 text-center">
                        <img src="../../assets/img/hero.png" alt="" class="img-fluid" style=" animation-name: HERO_ANIMATION;animation-duration: 5s; animation-iteration-count: infinite; width:100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

#hero-section {
  padding: 100px 0 10px 0 !important;
  .hero-text {
    text-align: left;
    .intro {
      font-size: 18px;
      font-weight: 400;
    }
    h1 {
      margin: 5px 0;
      font-weight: 600;
    }
  }
}

.hero-social-media {
  margin-top: 20px;
  ul {
    display: flex;
    padding: 0;
    li {
      display: inline-block;
      margin-right: 10px;
      background: #55e6c1;
      height: 40px;
      width: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #2d3436;
      border: 1.5px solid transparent;
      transition: 0.6s;
      a {
        color: #fff;
        font-size: 18px;
      }
      &:nth-child(1) {
        background: #3b5999;
      }
      &:nth-child(2) {
        background: #55acee;
      }
      &:nth-child(3) {
        background: #09b83e;
      }
      &:nth-child(4) {
        background: #cd201f;
      }
      &:nth-child(5) {
        background: #0077b5;
      }
      &:hover {
        border: 1.5px solid #f1c40f;
        margin-top: -5px;
      }
    }
  }
}

</style>
