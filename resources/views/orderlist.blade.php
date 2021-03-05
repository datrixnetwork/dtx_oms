<!DOCTYPE html>

<html>

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
   


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <link href="{{ URL::asset('css/orderlist.css') }}" rel="stylesheet">
</head>

<body>

    @extends('layouts.applist')   
    @section('content')
<div class="container mb-2">
    <div class="pb-5"></div>
    <div class="table-overflow">
        <table class="table table-bordered data-table" id="tbl_Orders">

            <thead>

                <tr>
                    <th>No</th>

                    <th>Order No</th>

                    <th>Sold By</th>

                    <th>Buyer Name</th>

                    <th>Action</th>
                </tr>

            </thead>

            <tbody>

            </tbody>

        </table>
    </div>
</div>

@endsection

</body>

   

<script type="text/javascript">

$(document).ready(function () {
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $("#tbl_Orders").DataTable({
    "ajax": {
        "url": "/orderlist",
        //"type": "POST",
        "processing": true,
        "serverSide": true,
    "datetype": "json"
    },
    "columns": [
    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
    {data: 'order_no', name: 'order_no'},
    {data: 'sold_by', name: 'sold_by'},
    {data: 'buyer_name', name: 'buyer_name'},
    {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
});
});
</script>

</html>