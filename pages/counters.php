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
									<h1 class="page-title">Counters</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
										<li class="breadcrumb-item active" aria-current="page">Counters</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row row-cards">
								<div class="col-md-12 col-xl-4">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">
												Time Counting From 0
											</h3>
										</div>
										<div class="card-body">
											<div class="example bg-primary-transparent border-primary text-primary">
												<div class="d-sm-flex">
													<span class="mb-sm-0 mb-3"><i class="fs-30 fe fe-clock"></i></span>
													<div class="ms-sm-5 mb-sm-0 mb-3">
														<span id="timer-countup" class="h3"></span>
														<h5 class="mb-0 mt-1">Only 6 min left</h5>
													</div>
													<div class="ms-auto text-sm-end">
														<h5 class="mb-1">Max Bid:</h5>
														<span class="h3 mb-0">$1000</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12 col-xl-4">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">
												Time Counting From 60 to 20
											</h3>
										</div>
										<div class="card-body">
											<div class="example bg-secondary-transparent border-secondary text-secondary">
												<div class="d-sm-flex">
													<span class="mb-sm-0 mb-3"><i class="fs-30 fe fe-clock"></i></span>
													<div class="ms-sm-5 mb-sm-0 mb-3">
														<span id="timer-countinbetween" class="h3"></span>
														<h5 class="mb-0 mt-1">Only 6 min left</h5>
													</div>
													<span class="h1 ms-auto mb-0 mb-sm-0 mb-3">$1000</span>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12 col-xl-4">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">
												Time minutes counter
											</h3>
										</div>
										<div class="card-body">
											<div class="example bg-warning-transparent border-warning text-warning">
												<div class="d-sm-flex">
													<span class="mb-sm-0 mb-3"><i class="fs-30 fe fe-clock"></i></span>
													<div class="ms-sm-5 mb-sm-0 mb-3">
														<span id="timer-countercallback" class="h3"></span>
														<h5 class="mb-0 mt-1">Only 6 min left</h5>
													</div>
													<span class="h1 text-center ms-auto mb-0 mb-sm-0 mb-3 ">$1000</span>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">
												Time Counting days Limit
											</h3>
										</div>
										<div class="card-body text-center">
											<div class="row">
												<div class="col-md-6 mx-auto">
													<div class=" example bg-info br-7 d-f-ai-c-jc-c">
														<i class="fe fe-calendar fs-30 text-white pe-3"></i>
														<span id="timer-outputpattern" class="h3 text-white mb-0"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-1 CLOSED CLOSED -->

							<!-- row -->
							<div class="row">
								<div class="col-sm-12 col-md-12 col-xl-4">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Time Counting From 0</h3>
										</div>
										<div class="card-body text-center">
											<img src="../assets/images/media/illustrate.png" alt="counter-image" class="wd-300 ht-300 ">
											<div class="pb-0 mt-4  bg-primary text-white p-3 br-5">
												<span id="timer-countup1" class="text-26 mb-0"></span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-sm-12 col-md-12 col-xl-4">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Time Counting From 60 to 20</h3>
										</div>
										<div class="card-body text-center">
											<img src="../assets/images/media/illustrate1.png" alt="counter-image" class="wd-300 ht-300 ">
											<div class="mt-4 bg-warning text-white p-3 br-5">
												<span id="timer-countinbetween1" class="text-26 mb-0"></span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-sm-12 col-md-12 col-xl-4">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Time 1 minute counter</h3>
										</div>
										<div class="card-body text-center">
											<img src="../assets/images/media/illustrate2.png" alt="counter-image" class="wd-300 ht-300 ">
											<div class="mt-4 bg-secondary text-white p-3 br-5">
												<span id="timer-countercallback1" class="text-26 mb-0"></span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">
												Day Counter
											</h3>
										</div>
										<div class="card-body text-center">
											<div class="row">
												<div class="col-md-8 mx-auto">
													<div class="count-down row">
														<div class="col-xl-3 col-md-6 countdown  mb-6 mb-xl-0">
															<span class="days text-primary ">35</span>
															<span class="text-dark">Days</span>
														</div>
														<div class="col-xl-3 col-md-6 countdown mb-6 mb-xl-0">
															<span class="hours text-primary me-3">17</span>
															<span class="text-dark">Hrs</span>
														</div>

														<div class="col-xl-3 col-md-6 countdown  mb-6 mb-xl-0">
															<span class="minutes text-primary">50</span>
															<span class="text-dark">Mins</span>
														</div>
														<div class="col-xl-3 col-md-6 countdown ">
															<span class="seconds text-primary">39</span>
															<span class="text-dark">Secs</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- /row -->

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

		<!-- TIME COUNTER JS-->
		<script src="../assets/plugins/counters/jquery.missofis-countdown.js"></script>
		<script src="../assets/plugins/counters/counter.js"></script>

		<!-- COUNT-DOWN JS-->
		<script src="../assets/plugins/counters/count-down.js"></script>
		<script src="../assets/plugins/countdown/moment.min.js"></script>
		<script src="../assets/plugins/countdown/moment-timezone.min.js"></script>
		<script src="../assets/plugins/countdown/moment-timezone-with-data.min.js"></script>
		<script src="../assets/plugins/countdown/countdowntime.js"></script>

		<!-- COUNTERS JS-->
		<script src="../assets/plugins/counters/counterup.min.js"></script>
		<script src="../assets/plugins/counters/waypoints.min.js"></script>
		<script src="../assets/plugins/counters/counters-1.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>

	</body>
</html>