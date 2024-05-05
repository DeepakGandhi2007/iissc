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
                <div class="container">
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
                            <form method="post" class="comment-form form-submit" action="{{url('ln2save')}}"
                                accept-charset="utf-8" novalidate="novalidate">
                                @csrf
                                <div class="mb3 mt3">
                                    <label class="f-22" for="">Enter Issuer Name</label>
                                    <input type="text" id="Issuer" class="form-control mt-2" name="Issuer" tabindex="2">
                                </div>
                                <div class="mb3 mt3">
                                    <label class="f-22" for="">Select Department</label>
                                    <select name="Department" class="form-control tb-my-input mt-2" id=""
                                        style="height:40px;">
                                        <option value="test">test</option>
                                    </select>
                                </div>
                                <div class="mb3 mt3">
                                    <label class="f-22" for="">Select faculty</label>
                                    <select name="faculty" class="form-control tb-my-input mt-2" id=""
                                        style="height:40px;">
                                        <option value="test">test</option>
                                    </select>
                                </div>
                                <div class="mb3 mt3">
                                    <label class="f-22" for="">Select Product Name</label>
                                    <select name="Product" class="form-control tb-my-input mt-2" id=""
                                        style="height:40px;">
                                        <option value="test">test</option>
                                    </select>
                                </div>
                                <div class="mb3 mt3">
                                    <label class="f-22" for="">Enter Product Quantity In Ltr</label>
                                    <input type="number" id="Quantity" class="form-control mt-2" name="Quantity"
                                        tabindex="2" oninput="calculateTotal()">
                                </div>
                                <div class="mb3 mt3">
                                    <label class="f-22" for="">Enter Container Name</label>
                                    <input type="text" id="Container" class="form-control mt-2" name="Container"
                                        tabindex="2">
                                </div>
                                <div class="mb3 mt3">
                                    <label class="f-22" for="">Total Ammount</label>
                                    <input type="number" id="Total" disabled class="form-control mt-2" name="Total"
                                        tabindex="2">
                                    <input type="hidden" id="tm" name="Totalam">
                                </div>

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
    function calculateTotal() {
        const quantity = parseFloat(document.getElementById('Quantity').value);
        const total = quantity * 16;
        document.getElementById('Total').value = total;
        document.getElementById('tm').value = total;

    }
    </script>
</body>

</html>