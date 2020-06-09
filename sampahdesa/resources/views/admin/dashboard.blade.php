<!DOCTYPE html>
<html>
<head>
<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
		body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		}

		/*h1, h2, h3, h4, h5, h6, p{
		color: #fff;
		font-weight: 200;
		}*/

		a{
		text-decoration: none;
		}

		/* GRID */

		.grid { max-width: 940px; width: 100%; margin: 0 auto; }

		.four { 
		width: 32.26%; 
		}

		/* COLUMNS */

		.col {
		display: block;
		float:left;
		margin: 1% 0 1% 1.6%;
		}

		.col:first-of-type { margin-left: 0; }

		/* CLEARFIX */

		.cf:before,
		.cf:after {
			content: " ";
			display: table; 
		}

		.cf:after { clear: both; }
		.cf { *zoom: 1; }

		/* GENERAL STYLES FOR BOX AND OVERLAY */

		.box {
		display: block;
		width: 100%;
		height: 200px;
		overflow: hidden;
		background-color: #bbb;
		text-align: center;
		position: relative;
		}

		.overlay{
		width: 100%;
		height:100%;
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		}

		/* SLIDE UP */

		.slide-up .overlay{
		background-color: #ffffff;
		line-height: 200px;
		/*color: #fff;*/
		transform: translateY(100%);
		-webkit-transition: transform 0.5s ease-out;
		-o-transition: transform 0.5s ease-out;
		transition: transform 0.5s ease-out;
		}

		.slide-up .box:hover .overlay{
		transform: translateY(0);
		}

</style>
</head>
<body>
	@include('admin.header')
	<hr>
	<div class="container-fluid">
		@yield('main')	
	</div>
	@yield('script')	
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
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
    jQuery(document).ready(function ()
    {
            jQuery('select[name="country"]').on('change',function(){
               var countryID = jQuery(this).val();
               if(countryID)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/getstates/' +countryID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="state"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="state"]').empty();
               }
            });
    });
    </script>
</body>
</html>