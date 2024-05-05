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
            @include('components/2TOPBAR')

            <!-- title page -->


            <section class="flat-title-page inner">
                <div class="overlay"></div>
                <div class="container-TFL">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title-heading">
                                <h1 class="heading">LN2 <span>...</span></h1>
                                <ul class="text-color-2 breadcrumbs">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li class="action">LN2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container mt-5 mb-5">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" class="comment-form form-submit" action="{{url('loginuser')}}"
                                accept-charset="utf-8" novalidate="novalidate">
                                @csrf
                                <div class="text-wrap clearfix">


                                </div>
                                <fieldset class="email-wrap style-text">
                                    <input type="text" id="email" class="tb-my-input" name="email" tabindex="2"
                                        placeholder="email" value="" aria-required="true" required="">
                                </fieldset>

                                <fieldset class="email-wrap style-text">
                                    <input type="password" id="password" class="tb-my-input" name="password"
                                        tabindex="2" placeholder="password" value="" aria-required="true" required="">
                                </fieldset>

                                <div class=" button">
                                    <input style="background: yellow; color:black" type="submit"
                                        class="sc-button btn-1">

                            </form>
                        </div>
                    </div>
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