
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
	<!-- Bootstrap CSS -->
	<link href="{{asset('admin_assets')}}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('admin_assets')}}/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('admin_assets')}}/assets/css/app.css" rel="stylesheet">
	<link href="{{asset('admin_assets')}}/assets/css/icons.css" rel="stylesheet">
	<title>Admin Login</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<div class="authentication-header"></div>
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							<img src="{{asset('admin_assets')}}/assets/images/logo-img.png" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign in Admin</h3>
										<p>Don't have an account yet?</p>
									</div>
									<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
										<hr/>
									</div>
									<div class="form-body">
                                        <form action="{{route('admin.auth')}}" method="post" class="row g-3">
                                                    @csrf
                                                    <div class="col-12">
                                                        <label for="email" class="form-label">Email Address</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="Password" class="form-label">Enter Password</label>
                                                        <div class="input-group" id="show_hide_password">
                                                            <input type="password" class="form-control border-end-0" name="password" placeholder="Enter Password" required>
                                                            <a href="javascript:;" class="input-group-text bg-transparent">
                                                                <i class='bx bx-hide'></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                            <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 text-end">
                                                        <a href="#">Forgot Password ?</a>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="bx bxs-lock-open"></i>Sign in</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        New on our platform? <a href="#"> Create an account </a>
                                                    </div>

                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{asset('admin_assets')}}/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{asset('admin_assets')}}/assets/js/jquery.min.js"></script>
	<script src="{{asset('admin_assets')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset('admin_assets')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{asset('admin_assets')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{asset('admin_assets')}}/assets/js/app.js"></script>
    @include('sweetalert::alert')


</body>
</html>
