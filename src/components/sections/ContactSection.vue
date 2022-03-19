<template>
    <section id="contact_section">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <div class="sec_title wow animate__animated animate__zoomIn">
                    <h2 class="mb-0 pb-1">Contact Me</h2>
                    <p class="m-0 p-0">I will be happy to help you. Fill out the form and I'll be in touch as
                        soon as possible.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="contact">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-9">
                    <div class="bg" style="background: #2b62d5;">
                        <div class="bg_content">
                            <div class="row">
                                <div class="col-12 col-md-5" style="background: #245cd1;">
                                    <div class="contact_media mt-4">
                                        <h5>Phone</h5>
                                        <span>
                                            +8801754100439
                                        </span>
                                    </div>
                                    <div class="contact_media">
                                        <h5>Email</h5>
                                        <span>
                                            mdshahinmije96@gmail.com
                                        </span>
                                    </div>
                                    <div class="contact_media">
                                        <h5>Address</h5>
                                        <span>
                                            Mohakhali,Dhaka,Bangladesh
                                        </span>
                                    </div>
                                    <div class="socal_links">
                                        <ul>
                                            <li>
                                                <a
                                                    :href="social.facebook"><i
                                                        class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a
                                                    :href="social.twitter"><i
                                                        class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a
                                                    :href="social.instagram"><i
                                                        class="fa fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a
                                                    :href="social.linkedin"><i
                                                        class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a
                                                    :href="social.github"><i
                                                        class="fa fa-github"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7" style="background: #fff;">
                                    <form id="contactFormHome">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Name"
                                                name="name" id="name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter Your Email"
                                                name="email" id="email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject"
                                                name="subject" id="subject" />
                                        </div>
                                        <div class="form-group">
                                            <textarea name="text" id="text" cols="30" rows="5"
                                                class="form-control"></textarea>
                                        </div>
                                        <div class="form-group text-right">
                                            <input type="submit" class="btn btn-primary" value="Submit" />
                                        </div>
                                    </form>
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
    export default {
        props: {
        social : {
            type : Object
        }
         },
    }
</script>

<style lang="scss" scoped>
#counter_section i {
  font-size: 30px;
  margin-bottom: 5px;
}

#contact {
  margin-top: 25px;
  position: relative;

  .bg {
    padding: 60px 0;
    height: 500px;
  }

  .bg_content {
    padding: 0px;
    background: red;
    position: absolute;
    left: 0%;
    color: #fff;

    h5 {
      font-size: 15px;
      font-weight: 500;
      margin: 0px;
      padding: 0;
    }

    span {
      font-size: 13px;
      font-weight: 400;
      margin: 0px;
      padding: 0;
    }
  }

  .contact_media {
    margin: 5px 0;
  }

  .socal_links {
    margin-right: 100px;

    ul {
      display: flex;
      margin-top: 15px;

      li {
        margin: 0 5px;
        width: 50px;
        padding: 10px 15px;
        background: #5E89E3;
        text-align: center;
        border-radius: 3px;
        color: #fff;
        transition: .6s;

        &:hover {
          transform: scale(0.9);
        }

        a {
          color: #fff;
        }

        &:first-child {
          margin-left: 0;
        }
      }
    }
  }

  form {
    padding-top: 15px;
    input,textarea{
        margin-bottom: 10px;
    }
  }

  .form-control::placeholder {
    font-size: 12px;
  }
}

#link_section {
  background: #293044;
  color: #fff;
  padding: 70px 0;

  h4 {
    margin-bottom: 10px;
    letter-spacing: 1px;
  }

  .links ul li {
    i {
      font-size: 10px;
      color: #ccc;
      margin-right: 5px;
    }

    a {
      color: #ccc;
      font-size: 14px;
    }
  }
}
</style>
