<!doctype html>
<html lang="en" dir="ltr">
    <head>
	    <?php include '../layouts/custom-styles.php'; ?>
	</head>

	<body class="ltr login-img">

		<!-- GLOABAL LOADER -->
		<div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOABAL LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div>
				<div class="col col-login mx-auto text-center">
					<a href="index.php">
						<img src="../assets/images/brand/logo.png" class="header-brand-img" alt="">
					</a>
				</div>
				<!-- CONTAINER OPEN -->
				<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
								<form class="login100-form validate-form ">
									<div class="text-center mb-4">
										<img src="../assets/images/faces/6.jpg" alt="lockscreen image" class="avatar avatar-xxl brround mb-2">
										<h4>Elena Gilbert</h4>
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate="Password is required">
										<input class="input100" type="password" name="pass" placeholder="Password">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="fa fa-lock" aria-hidden="true"></i>
										</span>
									</div>
									<div class="container-login100-form-btn">
										<a href="index.php" class="login100-form-btn btn-primary">
											Unlock
										</a>
									</div>
									<div class="text-center pt-2">
										<!-- <span class="txt1">
											I Forgot
										</span> -->
										<a class="txt2" href="forgot-password.php">
											Forgot password
										</a>
									</div>
								</form>
							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-center my-3">
									<a href="javascript:void(0)" class="social-login  text-center me-4">
										<i class="fa fa-google"></i>
									</a>
									<a href="javascript:void(0)" class="social-login  text-center me-4">
										<i class="fa fa-facebook"></i>
									</a>
									<a href="javascript:void(0)" class="social-login  text-center">
										<i class="fa fa-twitter"></i>
									</a>
								</div>
							</div>
						</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
		</div>
		<!-- End GLOABAL LOADER -->

		<?php include '../layouts/custom-scripts.php'; ?> 
			
	</body>
</html>
