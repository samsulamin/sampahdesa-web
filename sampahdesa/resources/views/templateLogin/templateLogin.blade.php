<!DOCTYPE html>
<html>
<head>
	<meta charseet="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>LBS Desa Purbasana</title>
	<!--<link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap_4_3_1/css/bootstrap.min.css')}}">-->
	{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">--}}
	<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/iconkit.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('asset//css/theme.min.css')}}">
	<link rel="icon" type="image/png" href="{{asset('asset/img/elpiji.png')}}">
	<link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('asset/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">
    <!-- modernizr css -->
	<style>
		#chartdiv {
		  width: 100%;
		  height: 500px;
		}
	</style>
</head>
<body>
	
	{{-- memasukan navbar
	@include('navbarDash')--}}
	{{-- Memanggil halaman section main--}}
	@yield('main')	
	{{-- --}}
	@yield('footer')
	
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/html5shiv.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/respond.min.js')}}"></script>
	<!--<script type="text/javascript" src="{{asset('asset/bootstrap_4_3_1/js/bootstrap.min.js')}}"></script>-->
    <script src="{{asset('asset/js/modernizr-2.8.3.min.js')}}"></script>
    <script src="{{asset('asset/js/screenfull.js')}}"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
   	<!-- jquery latest version -->
    <!-- bootstrap 4 js -->
    <script src="{{asset('asset/js/popper.min.js')}}"></script>
    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.slicknav.min.js')}}"></script>
    <!-- others plugins -->
    <script src="{{asset('asset/js/plugins.js')}}"></script>
    <script src="{{asset('asset/js/scripts.js')}}"></script>
	{{--hidden password--}}
	<script type="text/javascript">
		$(document).ready(function(){		
			$('.form-checkbox').click(function(){
				if($(this).is(':checked')){
					$('.formControlPass').attr('type','text');
				}else{
					$('.formControlPass').attr('type','password');
				}
			});
		});
	</script>
	
</body>
</html>