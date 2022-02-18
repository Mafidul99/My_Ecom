
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('admin_assets')}}/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset('admin_assets')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('admin_assets')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('admin_assets')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('admin_assets')}}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{asset('admin_assets')}}/assets/js/pace.min.js"></script>
    <!-------------datatable-------------->
    <link href="{{asset('admin_assets')}}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- Bootstrap CSS -->
	<link href="{{asset('admin_assets')}}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('admin_assets')}}/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('admin_assets')}}/assets/css/app.css" rel="stylesheet">
	<link href="{{asset('admin_assets')}}/assets/css/icons.css" rel="stylesheet">
    <link href="{{asset('admin_assets')}}/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />



    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', ' My_Ecom') }} | | @yield('title') </title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('admin_assets')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">eCommerce</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			@include('admin.inc.admin_nav')
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('admin.inc.admin_header')
		<!--end header -->
		<!--start page wrapper -->
            @section('container')
            @show
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top">
            <i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{asset('admin_assets')}}/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{asset('admin_assets')}}/assets/js/jquery.min.js"></script>
	<script src="{{asset('admin_assets')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset('admin_assets')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{asset('admin_assets')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{asset('admin_assets')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="{{asset('admin_assets')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<!--app JS-->
	<script src="{{asset('admin_assets')}}/assets/js/app.js"></script>
    <script src="{{asset('admin_assets')}}/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@yield('script')

</body>
</html>
