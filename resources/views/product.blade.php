<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="  https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src=" https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
            body {
                padding-top: 40px;
            }
        </style>
    </head>
    <body>
   <div class="container">
  <h2>Data Product</h2>
  <hr>
  <p><code>Note*
  Db : test , table :pivot ,view : agregat</code></p>  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="product" class="table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
            <tr class="info">
                <th >Nomor</th>
                <th>Barcode</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Onhold </th>
                <th>Ready </th>
                <th>Delivered </th>
                <th>Packing </th>
                <th>Sent </th>
            </tr>
        </thead>
    </table><hr>
</div>
</div>
</div>
</div>
   </body>
</html>

<script type="text/javascript">
$(function () {
   $('#product').DataTable({
	   "aLengthMenu": [
				[5,5,10, 25, 50, 100, 200, 200, 200, -1],
				[5,5,10, 25, 50, 100, 200,200,200, "All"]
			],
		paging: true,
		processing: true,
		serverSide: true,
		ajax: '{{ url('product/json') }}',
	  columns:
	  	 [	{data: 'barcode',
           render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
          	 }
        	},
            { data: 'barcode', name: 'barcode' },
            { data: 'jumlah', name: 'jumlah' },
            { data: 'total_harga', name: 'total_harga' },
            { data: 'ready', name: 'ready' },
            { data: 'onhold', name: 'onhold' },
            { data: 'delivered', name: 'delivered' },
            { data: 'packing', name: 'packing' ,orderable: true, searchable: true},
            { data: 'sent', name: 'sent' ,orderable: true, searchable: true}
         ]
	});
 });
</script>