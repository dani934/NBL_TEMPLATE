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
									<h1 class="page-title">Morris Charts</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
										<li class="breadcrumb-item active" aria-current="page">Morris Charts</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Area chart</h3>
										</div>
										<div class="card-body">
											<div id="morrisBar2" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Area chart 2</h3>
										</div>
										<div class="card-body">
											<div id="morrisBar3" class="chartsh"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 -->
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Single bar chart</h3>
										</div>
										<div class="card-body">
											<div id="morrisBar4" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Multiple Bar chart</h3>
										</div>
										<div class="card-body">
											<div id="morrisBar5" class="chartsh"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-2 CLOSE -->

							<!-- ROW-3 -->
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">line chart animated</h3>
										</div>
										<div class="card-body">
											<div id="morrisBar6" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">line chart</h3>
										</div>
										<div class="card-body">
											<div id="morrisBar7" class="chartsh"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-3 CLOSE -->

							<!-- ROW-4 OPEN -->
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Donut chart</h3>
										</div>
										<div class="card-body">
											<div id="morrisBar8" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Donut chart with multiple colors</h3>
										</div>
										<div class="card-body">
											<div id="morrisBar9" class="chartsh"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-4 CLOSE -->

						</div>
					</div>
				</div>
				<!-- CONTAINER CLOSE -->
			</div>

			<!-- COUNTRY-SELECTOR MODAL-->
			    <?php include '../layouts/modal.php'; ?>
		    <!-- /COUNTRY-SELECTOR MODAL-->

			<!-- FOOTER -->
			    <?php include '../layouts/footer.php'; ?>
			<!-- FOOTER CLOSED -->

		</div>

		<?php include '../layouts/scripts.php'; ?>

		<!-- MORRIS-CHART JS -->
		<script src="../assets/plugins/morris/raphael-min.js"></script>
		<script src="../assets/plugins/morris/morris.js"></script>
		<script src="../assets/js/morris.js"></script>

		<!-- SIDEBAR JS -->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>

	</body>
</html>