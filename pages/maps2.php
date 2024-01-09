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
									<h1 class="page-title">Mapel Maps</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
										<li class="breadcrumb-item active" aria-current="page">Mapel Maps</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h4  class="card-title">Map with links between the plotted cities</h4>
										</div>
										<div class="card-body">
											<div class="mapcontainer4">
												<div class="map pt-0">
													<span>Alternative content for the map</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h4 class="card-title">Static MapelMaps</h4>
										</div>
										<div class="card-body">
											<div class="mapcontainer">
												<div class="map pt-0">
													<span>Alternative content for the map</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h4 class="card-title"> Map with a legend for areas</h4>
										</div>
										<div class="card-body">
											<div class="mapcontainer1">
												<div class="map pt-0">
													<span>Alternative content for the map</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->

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
			<!-- FOOTER END -->

		</div>

		<?php include '../layouts/scripts.php'; ?>


		<!-- INTERNAL Mapel Plugin -->
		<script src="../assets/plugins/mapel/raphael.min.js"></script>
		<script src="../assets/plugins/mapel/jquery.mapael.js"></script>
		<script src="../assets/plugins/mapel/maps/france_departments.js"></script>
		<script src="../assets/plugins/mapel/maps/world_countries.js"></script>
		<script src="../assets/plugins/mapel/maps/usa_states.js"></script>
		<script src="../assets/js/mapelmaps.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>

	</body>
</html>