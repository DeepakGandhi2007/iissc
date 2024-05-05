<!DOCTYPE html>
<html lang="en">
@include('admin/components/links')

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
                            </span> Banner lists
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span></span> <a class="btn btn-primary" href="{{url('admin/add-Banner')}}">Add
                                        Banner</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> S.NO </th>
                                                <th> Title </th>
                                                <th> banner </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i =0; @endphp
                                            @foreach($blog as $data)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$data->title}}</td>
                                                <td> @if($data->image)
                                                    <img src="{{asset($data->image)}}"
                                                        style="width:100px;height:100px;border-radius:0" alt="">
                                                    @else
                                                    <iframe width="100" height="100" src="{{$data->youtube}}"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{url('edit-banner/'.$data->id)}}"><i
                                                            class="mdi mdi-table-edit"></i>Edit</a>
                                                    <a href="{{url('delete-banner/'.$data->id)}}"><i
                                                            class="mdi mdi-delete"></i>Delete</a>
                                                </td>
                                            </tr>
                                            @php $i++; @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$blog->links("pagination::bootstrap-5")}}

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