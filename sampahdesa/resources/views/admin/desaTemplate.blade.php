<!DOCTYPE html>
<html>
<head>
<title>Sampahdesa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
	<style class="cp-pen-styles">
		#chartdiv {
			width: 100%;
			height: 500px;
		}
		.btn-fix {
			padding: 0;
			border: none;
		
			white-space: normal;
		}
	</style>
</head>
<body>
	{{-- memasukan navbar--}}
		@include('admin.nv')
		<br> <br> <br> <br> <br>
		<div class="container-fluid">
			@yield('main')
		</div>
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<script>
		$(document).ready( function () {
			$('#myTable').DataTable();
		} );
	</script>
	<script type="text/javascript">
		$('#datepicker').datepicker({
			weekStart: 1,
			daysOfWeekHighlighted: "6,0",
			autoclose: true,
			todayHighlight: true,
		});
		$('#datepicker').datepicker("setDate", new Date());
	</script>
</body>
</html>