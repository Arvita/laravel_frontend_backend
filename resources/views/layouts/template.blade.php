<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Laravel</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="scjaya" name="author" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/fonts/style.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">

		<link rel="stylesheet" href="{{ asset('assets/css/main-responsive.css')}}">
		<!--link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/skins/all.css')}}"-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/css/theme_light.css')}}" type="text/css" id="skin_color">
		<link rel="stylesheet" href="{{ asset('assets/css/print.css')}}" type="text/css" media="print"/>
		<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-spinedit/css/bootstrap-spinedit.css')}}" />
 		<link rel="stylesheet" href="{{ asset('assets/plugins/datepicker/css/datepicker.css') }}">
		<!--[if IE 7]>
		<link rel="stylesheet" href=" asset/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->

		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/DT_bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}"/>
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" />
		<link href="{{ asset('assets/plugins/select2/select2.css') }}" rel="stylesheet" />

		@stack('content-css')

		<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">

		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<!-- start: HEADER -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- start: TOP NAVIGATION CONTAINER -->
			<div class="container">
				<div class="navbar-header">
        		<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><span class="clip-list-2"></span></button>
        		<a href="{{url('/')}}" class="navbar-brand">
        <!-- Logo -->
        		<img id="default-logo" src="{{ asset('assets/images/logo.png')}}" alt="Starhotel" >
        		</a>
			</div>
				<div class="navbar-tools">
					<!-- start: TOP NAVIGATION MENU -->
					<ul class="nav navbar-right">
						<!-- start: USER DROPDOWN -->
						{{-- <li><span class="level_user">
							{{ getLevelName($user_status) }}
							</span>
						</li> --}}
						<li class="dropdown current-user">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<img src="{{ asset('assets/images/avatar-1-small.jpg')}}" class="circle-img" alt="">
								<span class="username">{{ $user->username }}</span>
								<i class="clip-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{ url('/profile') }}"><i class="clip-user-5"></i> Change Profile & Password</a></li>
								<li><a href="{{ url('/logout') }}"><i class="clip-exit"></i> Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="main-container">
			@include('layouts.sidebar')
			@yield('content')
		</div>

		<div class="footer clearfix">
			<div class="footer-inner">
				2019 &copy; Apika Coding.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>

		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src=" asset/plugins/respond.min.js"></script>
		<script src=" asset/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src=" asset/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="{{ asset('assets/plugins/jQuery-lib/2.0.3/jquery.js')}}"></script>
		<!--<![endif]-->
		<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}"></script>
		<!--script src="{{ asset('assets/plugins/iCheck/jquery.icheck.min.js')}}"></script-->
		<script src="{{ asset('assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js')}}"></script>
		<script src="{{ asset('assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js')}}"></script>
		<script src="{{ asset('assets/plugins/less/less-1.5.0.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
		<script src="{{ asset('assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js')}}"></script>
		<script src="{{ asset('assets/plugins/moment/min/moment.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/knockout/knockout.js')}}"></script>
		<script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/DataTables/media/js/DT_bootstrap.js') }}"></script>
		<script src="{{ asset('assets/plugins/DataTables/plugins/fnReloadAjax.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('assets/plugins/bootstrap-spinedit/js/bootstrap-spinedit.js')}}"></script>

		<script src="{{ asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/jquery-validation/dist/additional-methods.js') }}"></script>
		<script src="{{ asset('assets/plugins/jquery-validation/lib/jquery.form.js') }}"></script>

		<script src="{{ asset('assets/plugins/select2/select2.min.js')}}"></script>

		<script src="{{ asset('assets/plugins/bootstrap-modal/js/bootstrap-modal.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}"></script>
		<script src="{{ asset('assets/js/modal.js') }}"></script>
		<script src="{{ asset('assets/plugins/blockUI/jquery.blockUI.js')}}"></script>
		<script src="{{ asset('assets/js/block.js') }}"></script>
		<script src="{{ asset('assets/js/main.js')}}"></script>


		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!--
		<script src="{{ asset('assets/plugins/flot/jquery.flot.js')}}"></script>
		<script src="{{ asset('assets/plugins/flot/jquery.flot.pie.js')}}"></script>
		<script src="{{ asset('assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/jquery.sparkline/jquery.sparkline.js')}}"></script>
		<script src="{{ asset('assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
		<script src="{{ asset('assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
		<script src="{{ asset('assets/js/index.js')}}"></script>
	-->


		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				// Index.init();

				//jQuery nested modal css fix
				/*$(document).on('show.bs.modal', '.modal', function () {
						var zIndex = 1050 + (10 * $('.modal:visible').length);
						$(this).css('z-index', zIndex);
						setTimeout(function() {
								$('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
						}, 0);
				});*/
			});
		</script>
		@stack('content-js')
	</body>
	<!-- end: BODY -->
</html>
