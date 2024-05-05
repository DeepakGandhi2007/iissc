<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->
@include('components/header')



<body class="body header-fixed bloggird">

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
                                <h1 class="heading">Events</h1>
                                <ul class="text-color-2 breadcrumbs">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li class="action">Events</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="posts">
                <div class="container-TFL">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="wrap-post">
                                @foreach($post_data as $data)
                                @if($data->image && preg_match('/\/\w+\.\w+$/', $data->image))
                                <div class="post-box">
                                    <div class="box-img"><img src="{{asset($data->image)}}" alt="Labaid">
                                    </div>
                                    <div class="meta text-p wr">by <a href="#" class="user text-color-3">Admin</a>
                                        <span> {{$data->created_at}}</span>
                                    </div>
                                    <div class="content-post wr">
                                        <h5><a href=""> {{$data->title}}</a></h5>
                                        <p>{{ strip_tags($data->description) }}</p>
                                    </div>
                                </div>
                                @endif
                                @endforeach


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
                                Reserved</span>
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