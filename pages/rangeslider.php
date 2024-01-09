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
									<h1 class="page-title">Range slider</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Range Slider</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!--div-->
							<div class="card">
								<div class="card-header border-bottom-0">
									<div class="card-title">
										Range Slider
									</div>
								</div>
								<div class="card-body">
									<div class="row row-sm">
										<div class="col-lg-12">
											<input class="rangeslider1" name="example_name" type="text" value="">
										</div>
										<div class="col-lg-12 mt-4">
											<input class="rangeslider2" name="example_name" type="text" value="">
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12 mt-4">
											<input class="rangeslider3" name="example_name" type="text" value="">
										</div>
										<div class="col-lg-12 mt-4">
											<input class="rangeslider4" name="example_name" type="text" value="">
										</div>
									</div>
								</div>
							</div>
							<!--/div-->

							<!--div-->
							<div class="card">
								<div class="card-header border-bottom-0">
									<div class="card-title">
										Range Slider (Modern Skin)
									</div>
								</div>
								<div class="card-body">
									<div class="row row-sm">
										<div class="col-lg-12">
											<input class="rangeslider1" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mt-4">
											<input class="rangeslider2" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12 mt-4">
											<input class="rangeslider3" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mt-4">
											<input class="rangeslider4" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
									</div>
								</div>
							</div>
							<!--/div-->

							<!--div-->
							<div class="card">
								<div class="card-header border-bottom-0">
									<div class="card-title">
										Range Slider (Outline Skin)
									</div>
								</div>
								<div class="card-body">
									<div class="row row-sm">
										<div class="col-lg-12">
											<input class="rangeslider1" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mt-4">
											<input class="rangeslider2" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12 mt-4">
											<input class="rangeslider3" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mt-4">
											<input class="rangeslider4" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
									</div>
								</div>
							</div>
							<!--/div-->
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

		<!-- INTERNAL ion.rangeSlider.min js -->
		<script src="../assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
		<script src="../assets/js/rangeslider.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>

	</body>
</html>