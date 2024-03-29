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
									<h1 class="page-title">Form Editable</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Form Editable</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Form editable</h3>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table text-nowrap text-md-nowrap table-bordered">
													<tbody>
														<tr>
															<td class="wp-30">Username</td>
															<td class="wp-70">
																<a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
															</td>
														</tr>
														<tr>
															<td class="wp-30">Email</td>
															<td class="wp-70">
																<a href="#" id="email" data-type="email" data-pk="1">admin@example.com</a>
															</td>
														</tr>
														<tr>
															<td class="wp-30">Password</td>
															<td class="wp-70">
																<a href="#" id="password" data-type="password" data-pk="1"></a>
															</td>
														</tr>
														<tr>
															<td class="wp-30">URL</td>
															<td class="wp-70">
																<a href="#" id="url" data-type="url" data-pk="1"></a>
															</td>
														</tr>
														<tr>
															<td class="wp-30">Telephone Number, Maxlength</td>
															<td class="wp-70">
																<a href="#" id="tel" data-type="number" data-pk="1"></a>
															</td>
														</tr>
														<tr>
															<td class="wp-30">Range</td>
															<td class="wp-70">
																<a href="#" id="range" data-type="range" data-pk="1"></a>
															</td>
														</tr>
														<tr>
															<td class="wp-30">Time</td>
															<td class="wp-70">
																<a href="#" id="time" data-type="time" data-pk="1"></a>
															</td>
														</tr>
														<tr>
															<td class="wp-30">Combodate (date)</td>
															<td class="wp-70">
																<a href="#" id="dob" data-type="combodate" data-pk="1" data-value="31-12-2021" data-title="Select date"></a>
															</td>
														</tr>
														<tr>
															<td class="wp-30">Empty text field, required</td>
															<td class="wp-70">
																<a href="#" id="emptyField" data-type="text" data-pk="1" data-title="Enter username"></a>
															</td>
														</tr>
														<tr>
															<td class="wp-30">Select, local array, custom display</td>
															<td class="wp-70">
																<a href="#" id="gender" data-type="select" data-pk="1" data-title="Select Gender"></a>
															</td>
														</tr>
														<tr>
															<td class="wp-30">Select2 (dropdown mode)</td>
															<td class="wp-70">
																<a href="#" id="country" data-type="select2" data-pk="1" data-title="Select Country"></a>
															</td>
														</tr>
														<tr>
															<td class="wp-30">Custom input, several fields</td>
															<td class="wp-70">
																<a href="#" id="address" data-type="address" data-pk="1" data-title="Please, fill address"></a>
															</td>
														</tr>
														<tr>
															<td class="wp-30">Checklist</td>
															<td class="wp-70">
																<a href="#" id="checklist" data-type="checklist" data-pk="1" data-title="Select options"></a>
															</td>
														</tr>
														<tr>
															<td class="wp-30">Textarea, buttons below. Submit by <span class="tag">ctrl+enter</span> </td>
															<td class="wp-70">
																<a href="#" id="textarea" data-type="textarea" data-pk="1">awesome comment!</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

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

		<!-- MOMENT JS -->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!-- BOOTSTRAP EDITABLE JS -->
		<script src="../assets/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.min.js"></script>
		<script src="../assets/js/bootstrap-editable.js"></script>
		<script src="../assets/js/address-editable.js"></script>

		<!-- SELECT2 JS -->
		<script src="../assets/plugins/select2/select2.full.min.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>
	</body>
</html>


