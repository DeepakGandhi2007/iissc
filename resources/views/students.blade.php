<!DOCTYPE html>

<html>

@include('components/header')



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
                                <h1 class="heading">Students</h1>
                                <ul class="text-color-2 breadcrumbs">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li class="action">Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mt-10">PRESENT DOCTORAL STUDENTS</h2>
                            <p class="mt-2 mb-30 about-para">
                            <ul class="student-list">
                                @foreach($students as $data)
                                @if($data->post=="PRESENT DOCTORAL STUDENTS")
                                <li> {{$data->name}}</li>
                                @endif
                                @endforeach


                            </ul>
                            </p>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mt-10">GRADUATED DOCTORAL STUDENTS
                            </h2>
                            <p class="mt-2 mb-30 about-para">
                            <ul class="student-list">
                                @foreach($students as $data)
                                @if($data->post=="GRADUATED DOCTORAL STUDENTS")
                                <li> {{$data->name}}</li>
                                @endif
                                @endforeach

                            </ul>
                            </p>

                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mt-10">GRADUATED M.SC. ENGINEERING (RESEARCH) STUDENTS
                            </h2>
                            <p class="mt-2 mb-30 about-para">
                            <ul class="student-list">
                                @foreach($students as $data)
                                @if($data->post=="GRADUATED M.SC. ENGINEERING (RESEARCH) STUDENTS")
                                <li> {{$data->name}}</li>
                                @endif
                                @endforeach

                            </ul>
                            </p>

                        </div>
                    </div>
                </div>
            </section>

            < @include('components/footer') <div id="bottom" class="bottom-type1 position-relative">
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