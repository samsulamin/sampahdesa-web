<!DOCTYPE html>
<html>
<head>
<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
	<style class="cp-pen-styles">
		.btn-fix {
			padding: 0;
			border: none;
			white-space: normal;
		}
	</style>
</head>
<body>
	{{-- memasukan navbar--}}
		@include('admin.navbar')
		<br><br><br><br><br>
		<div class="container-fluid">
			@yield('main')
		</div>
		{{-- @include('admin.footer')--}}
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
	<!-- (Optional) Latest compiled and minified JavaScript translation files -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
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