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
            <section class="slider home">
                <div class="swiper-container-banner">
                    <div class="swiper-wrapper">
                        @foreach($banner_data as $data)
                        <div class="swiper-slide">
                            @if($data->youtube)
                            <iframe width="100%" height="315"
                                src="https://www.youtube.com/embed/lYmPpnfWU0U?si=oo49P6Q9sgL-JCcE"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                            @else
                            <div style="width: 100%;height:315px">
                                <img src="{{asset($data->image)}}" style="width: 100%;object-fit:cover" alt="">

                            </div>
                            @endif
                        </div>
                        @endforeach


                    </div>

                </div>
            </section>
            <section class="lt-blog wow fadeInUp mt-25 ">
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="inner">
                                <div class="group">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        @foreach($post_data as $data)
                        @if($data->id <= 5) <div class="col-md-3">
                            <div class="post-box">
                                <div class="box-img"><img src="{{asset($data->image)}}" alt="Labaid"></div>
                                <div class="meta text-p wr">by <a href="#" class="user text-color-3">Admin</a>
                                    <span> {{$data->created_at}}</span>
                                </div>
                                <div class="content-post wr">
                                    <h5{{$data->title}} </h5>
                                        <p>{{ strip_tags($data->description) }}
                                        </p>
                                </div>

                            </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="col-md-3">
                        <h3>Recent Publications</h3>
                        <div class="mt-5">
                            @foreach($post_data as $data)
                            @if($data->id > 5)
                            <p class="mt-5">{{$data->title}}</p>
                            <p>
                                @endif
                                @endforeach

                        </div>
                    </div>

                </div>
        </div>
        </section>

        <section class="choose bg-grey p-5">
            <div class="overlay"></div>
            <div class="container-TFL">
                <div class="row">
                    <div class="col-lg-6">
                        @foreach($public_event as $data)
                        <div class="col-left col-style">
                            <div class="content-choose tfanimated wow fadeInUp">
                                <div class="title-section style2 mb29 tfanimated p-5 pt-10">
                                    <h1 class="title">{{$data->title}}</h1>
                                </div>
                                <p class="txt-transform">{{$data->description}}
                                </p>




                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-right col-style wow zoomIn"
                            style="background-image: url('{{asset($data->image)}}');height:200px">
                        </div>
                    </div>
                    @endforeach
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