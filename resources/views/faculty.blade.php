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
                        <div class="col-md-12">
                            <h4>Chairman:</h4>
                            <div class="d-flex justify-content-center mt-10">
                                @foreach($faculty as $data)
                                @if($data->post=="Chairman")


                                <div class="col-md-4">
                                    <div class="wrap-team">
                                        <div class="image"><img src="{{asset($data->image)}}" alt="Labaid"></div>
                                        <div class="title">
                                            <a href="{{url('chairman')}}" class="h5">{{$data->name}}</a>
                                            <div>
                                                <p class="text-center fw-b">{{$data->theydo}}</p>
                                                <p class="text-center fw-5">{{$data->where}}</p>
                                            </div>
                                        </div>
                                        <!-- <div class="socials">
                                            <ul class="widget-socials action">
                                                <li>
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                                @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Faculties:</h4>
                            <div class="md-flex justify-content-center mt-10">

                                @foreach($faculty as $data)
                                @if($data->post=="Faculties")


                                <div class="col-md-4">
                                    <div class="wrap-team">
                                        <div class="image"><img src="{{asset($data->image)}}" alt="Labaid"></div>
                                        <div class="title">
                                            <a href="{{$data->redirect}}" class="h5">{{$data->name}}</a>
                                            <div>
                                                <p class="text-center fw-b">{{$data->theydo}}</p>
                                                <p class="text-center fw-5">{{$data->where}}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endif
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4>POSTDOC/ RESEARCH ASSOCIATE:</h4>
                            <div class="md-flex justify-content-center mt-10">

                                @foreach($faculty as $data)
                                @if($data->post=="POSTDOC/ RESEARCH ASSOCIATE")


                                <div class="col-md-4">
                                    <div class="wrap-team">
                                        <div class="image"><img src="{{asset($data->image)}}" alt="Labaid"></div>
                                        <div class="title">
                                            <a href="" class="h5">{{$data->name}}</a>
                                            <div>
                                                <p class="text-center fw-b">{{$data->theydo}}</p>
                                                <p class="text-center fw-5">{{$data->where}}</p>
                                            </div>
                                        </div>
                                        <!-- <div class="socials">
                                            <ul class="widget-socials action">
                                                <li>
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                                @endif
                                @endforeach



                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <h4>Visiting Faculties :</h4>
                            <div class="md-flex justify-content-center mt-10">
                                @foreach($faculty as $data)
                                @if($data->post=="Visiting Faculties")


                                <div class="col-md-4">
                                    <div class="wrap-team">
                                        <div class="image"><img src="{{asset($data->image)}}" alt="Labaid"></div>
                                        <div class="title">
                                            <a href="" class="h5">{{$data->name}}</a>
                                            <div>
                                                <p class="text-center fw-b">{{$data->theydo}}</p>
                                                <p class="text-center fw-5">{{$data->where}}</p>
                                            </div>
                                        </div>
                                        <!-- <div class="socials">
                                            <ul class="widget-socials action">
                                                <li>
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 md-flex">
                            <div class="col-md-3">
                                <h4 class="mt-25">RETIRED FACULTY</h4>
                                @foreach($faculty as $data)
                                @if($data->post=="RETIRED FACULTY")
                                @if($data->redirect)
                                <a href="{{$data->redirect}}">
                                    <h6 class="mt-20">{{$data->name}}</h6>
                                </a>
                                @else
                                <h6 class="mt-20">{{$data->name}}</h6>

                                @endif
                                @endif
                                @endforeach


                            </div>

                            <div class="col-md-3">
                                <h4 class="mt-25">PROJECT STAFF</h4>

                                @foreach($faculty as $data)
                                @if($data->post=="PROJECT STAFF")
                                @if($data->redirect)
                                <a href="{{$data->redirect}}">
                                    <h6 class="mt-20">{{$data->name}}</h6>
                                </a>
                                @else
                                <h6 class="mt-20">{{$data->name}}</h6>

                                @endif
                                @endif
                                @endforeach


                            </div>

                            <div class="col-md-3">
                                <h4 class="mt-25">OFFICE STAFF</h4>

                                @foreach($faculty as $data)
                                @if($data->post=="OFFICE  STAFF")
                                @if($data->redirect)
                                <a href="{{$data->redirect}}">
                                    <h6 class="mt-20">{{$data->name}}</h6>
                                </a>
                                @else
                                <h6 class="mt-20">{{$data->name}}</h6>

                                @endif
                                @endif
                                @endforeach


                            </div>


                            <div class="col-md-3">
                                <h4 class="mt-25">SUPPORT STAFF</h4>

                                @foreach($faculty as $data)
                                @if($data->post=="SUPPORT STAFF")
                                @if($data->redirect)
                                <a href="{{$data->redirect}}">
                                    <h6 class="mt-20">{{$data->name}}</h6>
                                </a>
                                @else
                                <h6 class="mt-20">{{$data->name}}</h6>

                                @endif
                                @endif
                                @endforeach


                            </div>

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