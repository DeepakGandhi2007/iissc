<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->
@include('components/header')



<body class="body header-fixed ds-contact">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="clearfix">
            @include('components/topbar')

            <section class="flat-title-page inner">
                <div class="overlay"></div>
                <div class="container-TFL">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title-heading">
                                <h1 class="heading">Contact Us</h1>
                                <ul class="text-color-2 breadcrumbs">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li class="action">Contact Page</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tf-map">
                <div class="container-TFL">
                    <div class="row">
                        <div class="col-lg-12">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.2928435013896!2d77.56297897373265!3d13.017014213883714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17d683a1fb91%3A0x456be3ea189a2674!2sCentre%20For%20Cryogenic%20Technology!5e0!3m2!1sen!2sin!4v1711102418759!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </section>
            <section class="about h1">
                <div class="overlay"></div>
                <div class="container-TFL">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-right col-style">
                                <div class="content-about tfanimated">
                                    <div class="title-section style2 mb29 tfanimated">
                                        <h6 class="sub-title">Contact Us</h6>
                                        <h1 class="title">Find us here. Contact us
                                            here to find us.</h1>
                                    </div>
                                    <div class="wrap-icon-box">
                                        <div class="icon-box st1">
                                            <div class="img">
                                                <img src="{{asset('frontend/assets/images/icon/contact/contact1.png')}}"
                                                    alt="Labaid">
                                            </div>
                                            <div class="desc">
                                                <p>Contact Phone</p><a href="">080-23601612; 080-22932339</a>
                                            </div>
                                        </div>
                                        <div class="icon-box st2">
                                            <div class="img style">
                                                <img src="{{asset('frontend/assets/images/icon/contact/contact2.png')}}"
                                                    alt="Labaid">
                                            </div>
                                            <div class="desc">
                                                <p>Contact Mail</p><a href="">office.cct@iisc.ac.in</a>
                                            </div>
                                        </div>
                                        <div class="icon-box st2">
                                            <div class="img style">
                                                <img src="{{asset('frontend/assets/images/icon/contact/contact3.png')}}"
                                                    alt="Labaid">
                                            </div>
                                            <div class="desc">
                                                <p>Contact Location</p><a href="">Centre for Cryogenic
                                                    Technology, Indian Institute of Science, Bengaluru, Karnataka,
                                                    INDIA-560012</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="comments">
                <div class="overlay"></div>
                <div class="container-TFL">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="wrap-comment">
                                <div id="respond" class="respond-comment">
                                    <h3 class="title-comment2">Send us a Massage :</h3>
                                    <p class="text pl-2">Phasellus ac consequat turpis, sit amet.Please Required fields
                                        mark
                                        <span>*</span>
                                    </p>
                                    <form method="post" class="comment-form form-submit" action="{{url('messageform')}}"
                                        accept-charset="utf-8" novalidate="novalidate">
                                        @csrf
                                        <div class="text-wrap clearfix">
                                            <fieldset class="name-wrap style-text">
                                                <input type="text" id="name" class="tb-my-input" name="name"
                                                    tabindex="1" placeholder="Your Name" value="" aria-required="true"
                                                    required="">
                                            </fieldset>
                                            <fieldset class="phone-wrap style-text">
                                                <input type="tel" id="phone" class="tb-my-input" name="phone"
                                                    tabindex="1" placeholder="Phone Number" value=""
                                                    aria-required="true" required="">
                                            </fieldset>
                                        </div>
                                        <fieldset class="email-wrap style-text">
                                            <input type="text" id="email" class="tb-my-input" name="email" tabindex="2"
                                                placeholder="email" value="" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset class="message-wrap">
                                            <textarea id="comment-message" name="message" rows="3" tabindex="4"
                                                placeholder="Message" aria-required="true"></textarea>
                                        </fieldset>
                                        <div class=" button">
                                            <input style="background: yellow; color:black" type="submit"
                                                class="sc-button btn-1">

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Footer -->
            @include('components/footer')

            <div id="bottom" class="bottom-type1 position-relative">
                <div class="container-TFL">
                    <div class="bottom-wrap text-center">
                        <div id="wrap-bottom">
                            <span> © Copyright 2022</span>
                            <a href="#">themesflat </a><span class="license">- All
                                Rights
                                Reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom -->
        </div>
    </div>

    <!-- /#page -->

    <!-- /#wrapper -->

    <a id="scroll-top"></a>

    <!-- Javascript -->

    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery-validate.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.easing.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugin.js')}}"></script>
    <script src="{{asset('frontend/assets/js/shortcodes.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    <script src="{{asset('frontend/assets/js/swiper.js')}}"></script>
    <script src="{{asset('frontend/assets/js/countto.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>

</body>

</html>