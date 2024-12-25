<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Đăng nhập - Laptop Store</title>
  <!-- loader-->
  <link href="assets/auth/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/auth/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/auth/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/auth/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/auth/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/auth/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/auth/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper" class="d-flex align-items-center justify-content-center min-vh-100">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center mb-4">
				<h1 class="text-white">Laptop Store</h1>
			</div>
			<div class="col-xl-5 col-lg-6 col-md-8">
				<div class="card card-authentication1 mx-auto my-5">
					<div class="card-body">
					 <div class="card-content p-2">
					  <div class="card-title text-uppercase text-center py-3">Sign In</div>
					    <form method="POST" action="{{ route('login') }}">
					    	@csrf
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<div class="position-relative has-icon-right">
									<input type="email" id="email" name="email" class="form-control input-shadow" placeholder="Enter Email" required>
									<div class="form-control-position">
										<i class="icon-envelope-open"></i>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="sr-only">Password</label>
								<div class="position-relative has-icon-right">
									<input type="password" id="password" name="password" class="form-control input-shadow" placeholder="Enter Password" required>
									<div class="form-control-position">
										<i class="icon-lock"></i>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-6">
									<div class="icheck-material-white">
										<input type="checkbox" id="remember" name="remember" />
										<label for="remember">Remember me</label>
									</div>
								</div>
								<div class="form-group col-6 text-right">
									<a href="reset-password.html">Reset Password</a>
								</div>
							</div>
							<button type="submit" class="btn btn-light btn-block">Sign In</button>
							<div class="text-center mt-3">Sign In With</div>
						  
						 <div class="form-row mt-4">
							<div class="form-group mb-0 col-6">
							 <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
							</div>
							<div class="form-group mb-0 col-6 text-right">
							 <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
							</div>
						</div>
						 </form>
						</div>
					 </div>
					 <div class="card-footer text-center py-3">
					   <p class="text-warning mb-0">Do not have an account? <a href="{{ route('register') }}"> Sign Up here</a></p>
					 </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets/auth/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/auth/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/auth/js/bootstrap.min.js') }}"></script>
	
  <!-- sidebar-menu js -->
  <script src="{{ asset('assets/auth/js/sidebar-menu.js') }}"></script>
  
  <!-- Custom scripts -->
  <script src="{{ asset('assets/auth/js/app-script.js') }}"></script>
  <script>
	// Kiểm tra theme đã lưu
	const savedTheme = localStorage.getItem('theme') || 'bg-theme1';
	document.body.className = `bg-theme ${savedTheme}`;

	// Hàm thay đổi theme
	function switchTheme(theme) {
		const body = document.body;
		// Xóa tất cả class bg-theme cũ
		body.className = body.className.replace(/bg-theme\d+/g, '');
		// Thêm theme mới
		body.className = `bg-theme ${theme}`;
		// Lưu vào localStorage
		localStorage.setItem('theme', theme);
	}
	</script>
  
</body>
</html>
