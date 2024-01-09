<!doctype html>
<html lang="en" dir="ltr">
	<head>
	    <?php include '../layouts/styles.php'; ?>

		<!-- INTERNAl Themes  css-->
		<link rel="stylesheet" href="../assets/plugins/rating/dist/themes/themes.css">

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
									<h1 class="page-title">Rating</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
										<li class="breadcrumb-item active" aria-current="page">Rating</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

                            <!-- Row -->
                            <div class="row row-cards">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Star Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-1" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Heart Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-2" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Multi Star Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-3" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Multi Heart Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-6" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Multi circle Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-4" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Thumbs-up Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-5" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cards">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Basic Star Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Rounded star Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars  block my-rating-4" data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                 Gradients Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-5" data-rating="5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Execute callback when rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-6"   data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Read only mode
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-7"  data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Use fullstars
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-8" data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                On hover event
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-9" data-rating="2">
                                            </div>
                                            <span class="live-rating"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Rating level colors
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-10" data-rating="2">
                                            </div>
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

		<!-- Star Rating Js-->
		<script src="../assets/plugins/rating/jquery-rate-picker.js"></script>
		<script src="../assets/plugins/rating/rating-picker.js"></script>

		<!-- Star Rating-1 Js-->
		<script src="../assets/plugins/ratings-2/jquery.star-rating.js"></script>
		<script src="../assets/plugins/ratings-2/star-rating.js"></script>

        <?php include '../layouts/main-scripts.php'; ?>
	</body>
</html>