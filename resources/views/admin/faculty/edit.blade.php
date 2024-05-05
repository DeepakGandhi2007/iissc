<!DOCTYPE html>
<html lang="en">
@include('admin/components/links')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @include('admin/components/navbar')

        <div class="container-fluid page-body-wrapper">
            @include('admin/components/sidebar')

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-home"></i>
                            </span> edit faculty
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span></span> <a class="btn btn-primary" href="">edit
                                        faculty</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
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
                        <div class="col-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form class="forms-sample" action="{{url('faculty-update/'.$faculty[0]->id)}}"
                                        enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Select Post</label>
                                            <select name="post" id="" class="form-control">
                                                <option value="{{$faculty[0]->post}}" selected>
                                                    {{$faculty[0]->post}}
                                                </option>
                                                <option value="Chairman">Chairman</option>
                                                <option value="Faculties">Faculties</option>
                                                <option value="POSTDOC/ RESEARCH ASSOCIATE">POSTDOC/ RESEARCH ASSOCIATE
                                                </option>
                                                <option value="Visiting Faculties">Visiting Faculties</option>
                                                <option value="RETIRED FACULTY">RETIRED FACULTY</option>
                                                <option value="PROJECT STAFF">PROJECT STAFF</option>
                                                <option value="OFFICE  STAFF">OFFICE STAFF</option>
                                                <option value="SUPPORT STAFF">SUPPORT STAFF</option>

                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <div class="input-group col-xs-12">
                                                <input type="hidden" value="{{$faculty[0]->image}}" name="oldimg">
                                                <input type="file" name="image" class="form-control ">
                                            </div>
                                        </div>

                                        <div class="form-group ytiframe">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" name="Name" value="{{$faculty[0]->name}}"
                                                class="form-control " id="exampleInputEmail1" placeholder="Name">
                                        </div>
                                        <div class="form-group ytiframe">
                                            <label for="exampleInputEmail1">Ocuupation</label>
                                            <input type="text" name="Ocuupation" value="{{$faculty[0]->theydo}}"
                                                class="form-control " id="exampleInputEmail1" placeholder="Ocuupation">
                                        </div>

                                        <div class="form-group ytiframe">
                                            <label for="exampleInputEmail1">Where</label>
                                            <input type="text" name="Where" value="{{$faculty[0]->where}}"
                                                class="form-control " id="exampleInputEmail1" placeholder="Where">
                                        </div>

                                        @if($faculty[0]->redirect)

                                        <div class="form-group link">
                                            <label for="exampleInputEmail1">Link</label>
                                            <input type="text" name="Link" value="{{$faculty[0]->redirect}}"
                                                class="form-control " id="exampleInputEmail1"
                                                placeholder="Redirect Link">
                                        </div>
                                        @endif
                                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                @include('admin/components/footer')

            </div>
        </div>
    </div>
    @include('admin/components/scripts')

</body>

</html>