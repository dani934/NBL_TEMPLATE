<!doctype html>
<html lang="en" dir="ltr">
	<head>
	   <?php include '../layouts/styles.php'; ?>
	</head>

	<body class="ltr app sidebar-mini light-mode">

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!-- APP-HEADER -->
				    <?php include '../layouts/app-header.php'; ?>
				<!-- /APP-HEADER -->

				<!--APP-SIDEBAR-->
				    <?php include '../layouts/app-sidebar.php'; ?>
				<!--/APP-SIDEBAR-->

                <!--APP-CONTENT OPEN-->
				<div class="app-content main-content mt-0">
					<div class="side-app">
						 <!-- CONTAINER -->
						 <div class="main-container container-fluid">

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Sweet-Alerts</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
										<li class="breadcrumb-item active" aria-current="page">Sweet-Alerts</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Sample Sweet Alerts</h3>
										</div>
										<div class="card-body">
											<input type='button' class="btn btn-primary mt-2" value='Basic alert' id='swal-basic'>
											<input type='button' class="btn btn-success mt-2" value='Success alert' id='swal-success'>
											<input type='button' class="btn btn-warning mt-2" value='Warning alert' id='swal-warning'>
											<input type='button' class="btn btn-danger mt-2" value='Danger alert' id='swal-danger'>
											<input type='button' class="btn btn-info mt-2" value='Info alert' id='swal-info'>
											<input type='button' class="btn btn-gray mt-2" value='Title alert' id='swal-title'>
											<input type='button' class="btn btn-dark mt-2" value='Passing a parameter' id='swal-parameter'>
											<input type='button' class="btn btn-secondary mt-2" value='With a loader' id='swal-ajax'>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Forms Sweet-alert</h3>
										</div>
										<div class="card-body">
											<div class="form-group">
												<label>Title</label>
												<input type='text' class="form-control" placeholder='Title text' id='title'>
											</div>
											<div class="form-group">
												<label>Message</label>
												<input type='text' class="form-control" placeholder='Your message' id='message'>
											</div>
											<input type='button' class="btn btn-primary mt-2" value='Simple alert' id='but1'>&nbsp;
											<input type='button' class="btn btn-secondary mt-2" value='Alert with title' id='but2'>&nbsp;
											<input type='button' class="btn btn-info mt-2" value='Alert with image' id='swal-image'>&nbsp;
											<input type='button' class="btn btn-warning mt-2" value='With timer' id='swal-timer'>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->
						</div>
						<!-- CONTAINER CLOSED -->
					</div>
				</div>
			</div>

			<!-- COUNTRY-SELECTOR MODAL-->
			    <?php include '../layouts/modal.php'; ?>
			<!-- /COUNTRY-SELECTOR MODAL-->

			<!-- FOOTER -->
			    <?php include '../layouts/footer.php'; ?>
			<!-- FOOTER CLOSED -->

		</div>

		<?php include '../layouts/scripts.php'; ?>

		<!-- Sweet-alert js  -->
		<script src="../assets/plugins/sweet-alert/sweetalert.min.js"></script>
		<script src="../assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>

	</body>
</html>