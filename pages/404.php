<!doctype html>
<html lang="en" dir="ltr">
	<head>
	   <?php include '../layouts/custom-styles.php'; ?>

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

	</head>

	<body class="ltr error-bg">
		
	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- End GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
		   <!-- PAGE-CONTENT OPEN -->
			<div class="page-content error-page error2">
				<div class="container text-center">
					<div class="error-template">
						<h2 class="text-white mb-2">404<span class="fs-20">error</span></h2>
						<h5 class="error-details text-white">
							Oops! Some error has occured, Requested page not found!
						</h5>
						<div class="text-center">
							<a class="btn btn-primary mt-5 mb-5" href="index.php"> <i class="fa fa-long-arrow-left"></i> Back to Home </a>
						</div>
                    </div>
				</div>
			</div>
			<!-- PAGE-CONTENT OPEN CLOSED -->
		</div>
		<!-- End PAGE -->

		<?php include '../layouts/custom-scripts.php'; ?> 

	</body>
</html>