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
									<h1 class="page-title">Leaflet Maps</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
										<li class="breadcrumb-item active" aria-current="page">Leaflet Maps</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card" id="map">
										<div class="card-header border-bottom">
											<div class="card-title">Basic</div>
										</div>
										<div class="card-body">
											<div class="h-500" id="leaflet1"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card" id="map2">
										<div class="card-header border-bottom">
											<div class="card-title">With Popup</div>
										</div>
										<div class="card-body">
											<div class="h-500" id="leaflet2"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card" id="map1">
										<div class="card-header border-bottom">
											<div class="card-title">Map With Circle</div>
										</div>
										<div class="card-body">
											<div class="h-500 ht-sm-300 ht-md-400" id="leaflet3"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->

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
			<!-- FOOTER END -->

		</div>

		<?php include '../layouts/scripts.php'; ?>

		<!-- INTERNAL leaflet js -->
		<script src="../assets/plugins/leaflet/leaflet.js"></script>
		<script src="../assets/js/map-leafleft.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>

	</body>
</html>