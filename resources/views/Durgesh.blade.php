<!DOCTYPE html>

<html>

@include('components/header')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="body header-fixed home1 home counter-scroll tf-counter">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="clearfix">
            @include('components/topbar')

            <!-- title page -->


            <section class="flat-title-page inner">
                <div class="overlay"></div>
                <div class="container-TFL">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title-heading">
                                <h1 class="heading">Faculty & Research</h1>
                                <ul class="text-color-2 breadcrumbs">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li class="action">Faculty & Research</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="team-mb wow fadeInUp">
                <div class="container-TFL">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{asset('faculities/HdoUm2WnCffNgzldwYFi1VfqVJMRVhai2J2MlwEw.jpg')}}" alt="">
                        </div>
                        <div class="col-md-6 mt-10 mb-10">
                            <h4>D.S.NADIG</h4>
                            <h4> Principal Research Scientist</h4>
                            <h5>Indian Institute of Science, Bangalore</h5>
                        </div>


                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <h5>Personal Information</h5>
                            <br>
                            <h6>D. S. NADIG
                            </h6>
                            <p> <i class="fas fa-user-alt"></i> Male</p>
                            <p> <i class="fa fa-home"></i> Department of Instrumentation and Applied Physics Indian
                                Institute of Science</p>
                            <p> <i class="fa fa-map"></i> Bengaluru, Karnataka, India – 560012</p>

                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <h5>Expertise Information</h5>
                            <br>
                            <h6>OPTICS</h6>
                            <p> <i class="fa fa-gear"></i> Cryogenic treatment on metals, cryotribology and mechanical
                                strength properties of materials at cryogenic temperatures, Calibration of propellant
                                level sensors for LOX / LH2.

                                /p>

                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <h5>Experience
                            </h5>
                            <br>
                        </div>
                        <div class="col-md-4">
                            <h6>PRINCIPAL RESEARCH SCIENTIST (2011 – PRESENT)
                            </h6>

                        </div>




                    </div>



                    <div class="row mt-5">
                        <div class="col-md-12">
                            <h5>Qualification
                            </h5>
                            <br>
                        </div>
                        <div class="col-md-4">
                            <h6>M.TECH. (CRYOGENIC ENGINEERING)
                            </h6>
                            <p>IIT KHARAGPUR

                            </p>
                        </div>
                        <div class="col-md-4">
                            <h6>B.E. (MECHANICAL ENGINEERING), </h6>
                            <p>KARNATAKA UNIVERSITY



                            </p>
                        </div>









            </section>

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

    <script>
    var mySwiper = new Swiper('.swiper-container-banner', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        autoplay: {
            delay: 5000, // Delay between slides in milliseconds
            disableOnInteraction: false, // Disable autoplay when user interacts with the slider
        },
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    </script>
</body>

</html>