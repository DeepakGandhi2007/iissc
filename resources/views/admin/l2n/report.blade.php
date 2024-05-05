<!DOCTYPE html>
<html lang="en">
@include('admin/components/links')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/polyfills.umd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

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
                            </span> 
                        </h3>
                        <nav aria-label="breadcrumb">
                        <form id="filterForm">
    @csrf
    <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"></li>
        <li class="breadcrumb-item active" aria-current="page">
            <label for="">Start Date</label>
            <input type="date" name="start" class="form-control">
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            <label for="">End Date</label>
            <input type="date" name="end" class="form-control">
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            <label for="">Product</label>
            <select name="product" class="form-control" id="">
                <option value="Test">Test</option>
            </select>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            <label for="">Select Guide Name</label>
            <select name="guide" class="form-control" id="">
                <option value="Test">Test</option>
            </select>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            <label for="">Select Department </label>
            <select name="department" class="form-control" id="">
                <option value="Test">Test</option>
            </select>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            <button class="btn btn-primary">Submit</button>
        </li>
    </ul>
</form>

                        </nav>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body table-responsive">
                                    <table class="table table-striped" id="data-table">
                                        <thead>
                                            <tr>
                                                <th> S.NO </th>
                                                <th> Issuer Name </th>
                                                <th> Department </th>
                                                <th> Faculty </th>
                                                <th> Product Name </th>
                                                <th> Product Quantity In Ltr </th>
                                                <th> Container Name </th>
                                                <th> Total Ammount </th>
                                                <th> Date </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/polyfills.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>


    <script>
$(document).ready(function() {
    $('#filterForm').submit(function(event) {
        event.preventDefault(); 

        var formData = $(this).serializeArray();

        $.ajax({
            url: '{{ route('fetch-data') }}', 
            type: 'POST', 
            data: formData, 
            success: function(response) {
                console.log(response);

                // Clear existing table rows
                $('#data-table tbody').empty();

                // Populate table with new data
                $.each(response, function(index, item) {
                    var row = '<tr>' +
                        '<td>' + item.id + '</td>' +
                        '<td>' + item.Issuer + '</td>' +
                        '<td>' + item.Department + '</td>' +
                        '<td>' + item.faculty + '</td>' +
                        '<td>' + item.Product + '</td>' +
                        '<td>' + item.Quantity + '</td>' +
                        '<td>' + item.Container + '</td>' +
                        '<td>' + item.Ammount + '</td>' +
                        '<td>' + item.created_at + '</td>' +
                        '</tr>';
                    $('#data-table tbody').append(row);
                });
            },
            error: function(xhr, status, error) {
                console.error(error); 
            }
        });
    });
});

    </script>
</body>

</html>