<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/light/pages/examples/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 17:15:15 GMT -->
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Login | LKPS </title>
	<!-- Favicon-->
	<link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">

	<!-- Plugins Core Css -->
	<link href="<?= base_url() ?>assets/css/app.min.css" rel="stylesheet">

	<!-- Custom Css -->
	<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/css/pages/extra_pages.css" rel="stylesheet" />
</head>

<body class="login-page">
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form action="<?= base_url()?>login/auth" method="post" class="login100-form validate-form" >
					<span class="login100-form-logo">
						<img alt="" src="<?= base_url() ?>assets/images/loading.png">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<i class="material-icons focus-input1001">person</i>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<i class="material-icons focus-input1001">lock</i>
					</div>
					<div class="contact100-form-checkbox">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value=""> Remember me
								<span class="form-check-sign">
									<span class="check"></span>
								</span>
							</label>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center p-t-50">
						<a class="txt1" href="forgot-password.html">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Plugins Js -->

	<script src="<?= base_url() ?>assets/js/app.min.js"></script>

	<!-- Extra page Js -->
	<script src="<?= base_url() ?>assets/js/pages/examples/pages.js"></script>

</body>


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/light/pages/examples/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 17:15:16 GMT -->
</html>
