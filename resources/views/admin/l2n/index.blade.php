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
                            </span> Public Event
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span></span> 
                            </ul>
                        </nav>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body table-responsive">
                                    <table class="table table-striped">
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
                                                <th> Print </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i =0; @endphp
                                            @foreach($l2n as $data)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$data->Issuer}}</td>
                                                <td>{{$data->Department}}</td>
                                                <td>{{$data->faculty}}</td>
                                                <td>{{$data->Product}}</td>
                                                <td>{{$data->Quantity}}</td>
                                                <td>{{$data->Container}}</td>
                                                <td>{{$data->Ammount}}</td>
                                                <td>{{$data->created_at}}</td>
                                                <td><button class="btn btn-primary download-btn"
                                                        onclick="downloadPDF({{$data->id}})">Download</button></td>

                                            </tr>
                                            @php $i++; @endphp
                                            @endforeach
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
    function downloadPDF(id) {
        fetch(`/admin/get-l2n-details/${id}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);

                const pdf = new jsPDF();
                pdf.text(`Issuer Name: ${data[0].Issuer}`, 10, 10);
                pdf.text(`Department: ${data[0].Department}`, 10, 20);
                pdf.text(`Faculty: ${data[0].faculty}`, 10, 30);
                pdf.text(`Product Name: ${data[0].Product}`, 10, 40);
                pdf.text(`Product Quantity In Ltr: ${data[0].Quantity}`, 10, 50);
                pdf.text(`Container Name: ${data[0].Container}`, 10, 60);
                pdf.text(`Total Ammount: ${data[0].Ammount}`, 10, 70);
                pdf.save(`l2n_${id}_details.pdf`);
            })
            .catch(error => {
                console.error('Error fetching l2n details:', error);
            });
    }
    </script>


</body>

</html>