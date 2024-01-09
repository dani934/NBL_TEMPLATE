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
									<h1 class="page-title">Nvd3 Charts</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
										<li class="breadcrumb-item active" aria-current="page">Nvd3 Charts</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Bar Chart With Multiple colors</h3>
										</div>
										<div class="card-body">
											<div id="nvd3-chart1" class="h-400"> <svg></svg></div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Bar Chart</h3>
										</div>
										<div class="card-body">
											<svg id="nvd3-chart2" class="h-400"></svg>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Line Chart With Zooming Options</h3>
										</div>
										<div class="card-body">
											<div id="chartZoom">
												<a class="btn btn-outline-secondary btn-sm" id="zoomIn">+</a> <a  class="btn btn-outline-secondary btn-sm" id="zoomOut">-</a>
											</div>
											<div id="nvd3-chart3" class="with-transitions h-400"><svg></svg></div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-1 CLOSED -->

						</div>
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>

			<!-- COUNTRY-SELECTOR MODAL-->
			    <?php include '../layouts/modal.php'; ?>
		    <!-- /COUNTRY-SELECTOR MODAL-->

			<!-- FOOTER -->
			    <?php include '../layouts/footer.php'; ?>
			<!-- FOOTER CLOSED -->

		</div>

		<?php include '../layouts/scripts.php'; ?>

		<!-- NVD3-CHARTS JS -->
		<script src="../assets/plugins/charts-nvd3/d3.min.js"></script>
		<script src="../assets/plugins/charts-nvd3/nv.d3.js"></script>
		<script src="../assets/plugins/charts-nvd3/stream_layers.js"></script>
		<script src="../assets/js/nvd3.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>

	</body>
</html>