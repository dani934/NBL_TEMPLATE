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
									<h1 class="page-title">Read Mail</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Email</a></li>
										<li class="breadcrumb-item active" aria-current="page">Read Mail</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<a href="mail-compose.php" class="btn btn-outline-primary btn-block py-2">Compose</a>
										</div>
										<div class="card-body">
											<ul class="nav1 nav-column flex-column br-7">
												<li class="nav-item1 mt-0">
													<a class="nav-link thumb" href="mail-inbox.php">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.5,4h-15C3.119812,4.0012817,2.0012817,5.119812,2,6.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-11C21.9987183,5.119812,20.880188,4.0012817,19.5,4z M21,17.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V8.0913696l8.7392578,5.3353882c0.0080566,0.0048828,0.0184326,0.0030518,0.0266724,0.0075073C11.836731,13.4725952,11.9138184,13.500061,12,13.5c0.0905762,0.000061,0.1763306-0.0263672,0.2519531-0.0707397c0.0026855-0.0015869,0.0061646-0.0008545,0.0087891-0.0025024L21,8.0913696V17.5z M21,6.9194946l-0.2387695,0.145752c-0.0070801,0.0038452-0.0150146,0.0037842-0.0219727,0.0079956l-8.7313843,5.3359985L12,12.4140625l-0.0078735-0.0048218L3.2607422,7.0732422C3.2603149,7.072998,3.2598877,7.0727539,3.2594604,7.0724487c-0.006958-0.0042114-0.0149536-0.0041504-0.0220337-0.0079956L3,6.9194946V6.5C3.0009155,5.671936,3.671936,5.0009155,4.5,5h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V6.9194946z"/></svg>
														Inbox
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M13.5,10h2.4199219c0.1328125,0,0.2597656-0.0527344,0.3535156-0.1464844l5.5800781-5.5800781c0.1953125-0.1953125,0.1953125-0.5117188,0-0.7070312l-2.4199219-2.4199219c-0.1953125-0.1953125-0.5117188-0.1953125-0.7070312,0l-5.5800781,5.5800781C13.0527344,6.8203125,13,6.9472656,13,7.0800781V9.5C13,9.7763672,13.2236328,10,13.5,10z M14,7.2871094l5.0800781-5.0800781l1.7128906,1.7128906L15.7128906,9H14V7.2871094z M21.5,9C21.2236328,9,21,9.2236328,21,9.5v8c0,0.8271484-0.6728516,1.5-1.5,1.5h-15C3.6728516,19,3,18.3271484,3,17.5v-11c0-0.2324219,0.0576172-0.4499512,0.1523438-0.6464844l7.0859375,7.0859375c0.4863281,0.4863281,1.125,0.7294922,1.7636719,0.7294922s1.2773438-0.2431641,1.7636719-0.7294922c0.1953125-0.1953125,0.1953125-0.5117188,0-0.7070312s-0.5117188-0.1953125-0.7070312,0c-0.5820312,0.5820312-1.53125,0.5820312-2.1132812,0L3.861145,5.1482544C4.0557251,5.0558472,4.2706909,5,4.5,5h6C10.7763672,5,11,4.7763672,11,4.5S10.7763672,4,10.5,4h-6C3.1210938,4,2,5.1210938,2,6.5v11C2,18.8789062,3.1210938,20,4.5,20h15c1.3789062,0,2.5-1.1210938,2.5-2.5v-8C22,9.2236328,21.7763672,9,21.5,9z"/></svg>
														Drafts
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.9189453,10.1265259c0.0802612-0.546814-0.2979736-1.0551147-0.8447266-1.135376L15.4228516,8.164978l-2.5253906-5.1464844c-0.0909424-0.1569824-0.2214355-0.2873535-0.37854-0.3781128c-0.4960327-0.2866821-1.1306152-0.1170044-1.4173584,0.3790894L8.5771484,8.164978L2.9257812,8.9912109C2.7097168,9.0228882,2.5100098,9.1244507,2.3569946,9.2802734c-0.387146,0.3943481-0.3812256,1.0278931,0.0131226,1.4150391l4.0927734,4.0126953l-0.9658203,5.6640625c-0.0091553,0.0541992-0.013855,0.1090698-0.0139771,0.1641235c-0.0015259,0.5534058,0.4458618,1.0032959,0.9993286,1.0048218c0.163147-0.0002441,0.3237915-0.0404663,0.4677734-0.1171875L12,18.7539062l5.0488281,2.6689453c0.1951294,0.1035767,0.4190063,0.1396484,0.6367798,0.1025391c0.5441895-0.0928345,0.9100952-0.6091309,0.8173218-1.1533203l-0.9658203-5.6640625l4.09375-4.0137329C21.7861328,10.5414429,21.8872681,10.3421021,21.9189453,10.1265259z M16.6503906,14.1766968c-0.1170654,0.1148682-0.1706543,0.2796631-0.1435547,0.4414062l1.0097656,5.9208984l-5.2832031-2.7930298c-0.1463013-0.0761719-0.3204956-0.0761719-0.4667969,0L6.4833984,20.539978l1.0097046-5.921814c0.0271606-0.1617432-0.0264282-0.3265381-0.1435547-0.4414062L3.0702515,9.9814453l5.9121094-0.8642578C9.1456299,9.0927734,9.286499,8.9898682,9.359375,8.8417969L12,3.460022l2.640564,5.3817139c0.072876,0.1480713,0.2138062,0.2509766,0.3770142,0.2753906l5.9130859,0.8632812L16.6503906,14.1766968z"/></svg>
														Starred
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16.6474609,7.3417969c0.093689,0.0939331,0.2208862,0.1466675,0.3535156,0.1464844c0.1326294,0.0001221,0.2598877-0.0526123,0.3535156-0.1464844l4.5-4.5c0.1904907-0.194397,0.1904907-0.5055542,0-0.6999512c-0.1932983-0.1971436-0.5098267-0.2003174-0.7070312-0.0070801L17.0009766,6.28125l-2.1464844-2.1464233c-0.0023804-0.0024414-0.0047607-0.0048218-0.0072021-0.0072021c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0072021c-0.1932373,0.1972046-0.1900635,0.5137329,0.0071411,0.7069702L16.6474609,7.3417969z M21.5078125,6.9736328c-0.276123,0-0.5,0.223877-0.5,0.5v10c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-11c0.0002441-0.2310181,0.0570068-0.4471436,0.1503906-0.6425781l7.0859375,7.0859375c0.4643555,0.4656372,1.0953369,0.7268066,1.7529297,0.7255859c0.6781006-0.0012207,1.3276978-0.2729492,1.8046875-0.7548828l1.7196655-1.7207031c0.1904907-0.194397,0.1904907-0.5054321,0-0.6998291c-0.1932373-0.1972046-0.5097656-0.2004395-0.7070312-0.0072021l-1.75,1.75c-0.5841675,0.5820923-1.5290527,0.5820923-2.1132812,0L3.8651733,5.1240234C4.0606079,5.0305786,4.2767944,4.973877,4.5078125,4.9736328h7c0.276123,0,0.5-0.223877,0.5-0.5s-0.223877-0.5-0.5-0.5h-7c-1.380188,0.0012817-2.4987183,1.119812-2.5,2.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-10C22.0078125,7.1975098,21.7839355,6.9736328,21.5078125,6.9736328z"/></svg>
														Sent
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.0859375,10.8789062l-8.7324219-8.7324219C12.2597656,2.0526733,12.1326294,2,12,2H2.5C2.4998169,2,2.4996338,2,2.4993896,2C2.2234497,2.0001831,1.9998169,2.223999,2,2.5V12c0,0.1326294,0.0526733,0.2597656,0.1464844,0.3535156l8.7324219,8.7323608C11.44104,21.6488647,12.2044067,21.9644775,13,21.9628906c0.7955933,0.0015869,1.55896-0.3140259,2.1210938-0.8769531l5.9648438-5.9648438C22.2558594,13.9490356,22.2558594,12.0509644,21.0859375,10.8789062z M20.3789062,14.4140625l-5.9648438,5.9649048c-0.7816772,0.7792358-2.0464478,0.7792358-2.828125,0L3,11.7930298V3h8.7930298l8.5858765,8.5859985C21.1582031,12.3676147,21.1582031,13.6324463,20.3789062,14.4140625z M7.5,6C6.6715698,6,6,6.6715698,6,7.5S6.6715698,9,7.5,9C8.328064,8.9990845,8.9990845,8.328064,9,7.5C9,6.6715698,8.3284302,6,7.5,6z M7.5,8C7.223877,8,7,7.776123,7,7.5S7.223877,7,7.5,7C7.7759399,7.0005493,7.9994507,7.2240601,8,7.5C8,7.776123,7.776123,8,7.5,8z"/></svg>
														Tags
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17,9V7c0-2.7614136-2.2385864-5-5-5S7,4.2385864,7,7v2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v7c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-7C19.9981689,10.3438721,18.6561279,9.0018311,17,9z M8,7c0-2.2091675,1.7908325-4,4-4s4,1.7908325,4,4v2H8V7z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-7c0.0014038-1.1040039,0.8959961-1.9985962,2-2h0.5h9h0.0006104H17c1.1040039,0.0014038,1.9985962,0.8959961,2,2V19z"/></svg>
														Trash Bin
													</a>
												</li>
											</ul>
											<ul class="nav1 nav-column flex-column br-7 mt-3">
												<li class="nav-item1 mt-0">
													<a class="nav-link thumb" href="mail-settings.php">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M11.5,7.9c-2.3,0-4,1.9-4,4.2s1.9,4,4.2,4c2.2,0,4-1.9,4-4.1c0,0,0-0.1,0-0.1C15.6,9.7,13.7,7.9,11.5,7.9z M14.6,12.1c0,1.7-1.5,3-3.2,3c-1.7,0-3-1.5-3-3.2c0-1.7,1.5-3,3.2-3C13.3,8.9,14.7,10.3,14.6,12.1C14.6,12,14.6,12.1,14.6,12.1z M20,13.1c-0.5-0.6-0.5-1.5,0-2.1l1.4-1.5c0.1-0.2,0.2-0.4,0.1-0.6l-2.1-3.7c-0.1-0.2-0.3-0.3-0.5-0.2l-2,0.4c-0.8,0.2-1.6-0.3-1.9-1.1l-0.6-1.9C14.2,2.1,14,2,13.8,2H9.5C9.3,2,9.1,2.1,9,2.3L8.4,4.3C8.1,5,7.3,5.5,6.5,5.3l-2-0.4C4.3,4.9,4.1,5,4,5.2L1.9,8.8C1.8,9,1.8,9.2,2,9.4l1.4,1.5c0.5,0.6,0.5,1.5,0,2.1L2,14.6c-0.1,0.2-0.2,0.4-0.1,0.6L4,18.8c0.1,0.2,0.3,0.3,0.5,0.2l2-0.4c0.8-0.2,1.6,0.3,1.9,1.1L9,21.7C9.1,21.9,9.3,22,9.5,22h4.2c0.2,0,0.4-0.1,0.5-0.3l0.6-1.9c0.3-0.8,1.1-1.2,1.9-1.1l2,0.4c0.2,0,0.4-0.1,0.5-0.2l2.1-3.7c0.1-0.2,0.1-0.4-0.1-0.6L20,13.1z M18.6,18l-1.6-0.3c-1.3-0.3-2.6,0.5-3,1.7L13.4,21H9.9l-0.5-1.6c-0.4-1.3-1.7-2-3-1.7L4.7,18l-1.8-3l1.1-1.3c0.9-1,0.9-2.5,0-3.5L2.9,9l1.8-3l1.6,0.3c1.3,0.3,2.6-0.5,3-1.7L9.9,3h3.5l0.5,1.6c0.4,1.3,1.7,2,3,1.7L18.6,6l1.8,3l-1.1,1.3c-0.9,1-0.9,2.5,0,3.5l1.1,1.3L18.6,18z"/></svg>
														Mail Settings
													</a>
												</li>
											</ul>
										</div>
										<div class="card-footer border-top p-5">
											<ul class="nav1 nav-column flex-column br-7">
												<li class="nav-item1 mt-0">
													<a class="nav-link thumb" href="#">
														<span class="wpx-10 hpx-10 rounded-circle bg-orange me-2"></span>Friends
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<span class="wpx-10 hpx-10 rounded-circle bg-secondary me-2"></span>Family
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<span class="wpx-10 hpx-10 rounded-circle bg-info me-2"></span>Social
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<span class="wpx-10 hpx-10 rounded-circle bg-danger me-2"></span>Office
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-8 col-xl-9 col-md-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h4 class="card-title fw-bold">Wie liebe mir</h4>
										</div>
										<div class="card-body">
											<div class="email-media">
												<div class="mt-0 d-sm-flex">
													<img class="me-2 rounded-circle avatar-xl" src="../assets/images/faces/8.jpg" alt="avatar">
													<div class="media-body">
														<div class="float-end d-none d-md-flex tx-8">
															<small class="me-2  border br-5 p-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Important">
																<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.9189453,10.1265259c0.0802612-0.546814-0.2979736-1.0551147-0.8447266-1.135376L15.4228516,8.164978l-2.5253906-5.1464844c-0.0909424-0.1569824-0.2214355-0.2873535-0.37854-0.3781128c-0.4960327-0.2866821-1.1306152-0.1170044-1.4173584,0.3790894L8.5771484,8.164978L2.9257812,8.9912109C2.7097168,9.0228882,2.5100098,9.1244507,2.3569946,9.2802734c-0.387146,0.3943481-0.3812256,1.0278931,0.0131226,1.4150391l4.0927734,4.0126953l-0.9658203,5.6640625c-0.0091553,0.0541992-0.013855,0.1090698-0.0139771,0.1641235c-0.0015259,0.5534058,0.4458618,1.0032959,0.9993286,1.0048218c0.163147-0.0002441,0.3237915-0.0404663,0.4677734-0.1171875L12,18.7539062l5.0488281,2.6689453c0.1951294,0.1035767,0.4190063,0.1396484,0.6367798,0.1025391c0.5441895-0.0928345,0.9100952-0.6091309,0.8173218-1.1533203l-0.9658203-5.6640625l4.09375-4.0137329C21.7861328,10.5414429,21.8872681,10.3421021,21.9189453,10.1265259z M16.6503906,14.1766968c-0.1170654,0.1148682-0.1706543,0.2796631-0.1435547,0.4414062l1.0097656,5.9208984l-5.2832031-2.7930298c-0.1463013-0.0761719-0.3204956-0.0761719-0.4667969,0L6.4833984,20.539978l1.0097046-5.921814c0.0271606-0.1617432-0.0264282-0.3265381-0.1435547-0.4414062L3.0702515,9.9814453l5.9121094-0.8642578C9.1456299,9.0927734,9.286499,8.9898682,9.359375,8.8417969L12,3.460022l2.640564,5.3817139c0.072876,0.1480713,0.2138062,0.2509766,0.3770142,0.2753906l5.9130859,0.8632812L16.6503906,14.1766968z"/></svg>
															</small>
															<small class="me-2  border br-5 p-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Attachments">
																<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M18.1875,13.3789062l-6.0107422,6.0097656c-1.9523926,1.9526978-5.118103,1.9528809-7.0708008,0.0004883s-1.9528809-5.118103-0.0004883-7.0708008l8.4853516-8.4853516c1.1714478-1.1717529,3.0709839-1.171936,4.2426758-0.0004883c1.1717529,1.1714478,1.171936,3.0709839,0.0004883,4.2426758l-7.7783203,7.7783203c-0.3956299,0.3779297-1.0184937,0.3779297-1.4140625,0c-0.3896484-0.3908081-0.3896484-1.0232544,0-1.4140625l5.3026733-5.303772c0.0024414-0.0023193,0.0048218-0.0046997,0.0072021-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0072021-0.7069702c-0.1972046-0.1932983-0.5137329-0.1900635-0.7069702,0.0071411l-5.3027344,5.3037109c-0.0002441,0.0002441-0.0004883,0.0004883-0.0007324,0.0007324c-0.7805786,0.7809448-0.7802124,2.046814,0.0007324,2.8273926c0.7913818,0.7553711,2.0367432,0.7553711,2.828125,0l7.7783203-7.7783203c1.5517578-1.5604248,1.5515747-4.0812988-0.0004883-5.6414795c-1.5579834-1.5661011-4.0905762-1.5727539-5.6567383-0.0147705l-8.4853516,8.4853516c-1.124939,1.1251831-1.756897,2.6511841-1.756897,4.2422485c0,3.3137207,2.6863403,6,6.000061,5.999939c1.5921631,0.0045166,3.119812-0.62854,4.2421875-1.7578125l6.0107422-6.0097656c0.0023804-0.0023804,0.0047607-0.0047607,0.0070801-0.0071411c0.1932983-0.1972046,0.1900635-0.5137329-0.0070801-0.7070312C18.6973267,13.1785278,18.3807983,13.1817017,18.1875,13.3789062z"/></svg>
															</small>
															<small class="me-2 border br-5 p-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Reply">
																<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17.5,10H5.7069702l2.6464844-2.6464844c0.1871948-0.1937866,0.1871948-0.5009766,0-0.6947021C8.1616211,6.4602051,7.8450928,6.4546509,7.6464844,6.6465454l-3.5,3.5c-0.000061,0-0.0001221,0.000061-0.0001221,0.0001221c-0.1951904,0.1951904-0.1951294,0.5117188,0.0001221,0.7068481l3.5,3.5C7.7401123,14.4474487,7.8673706,14.5001831,8,14.5c0.1325684,0,0.2597046-0.0526733,0.3533936-0.1464233c0.1953125-0.1952515,0.1953125-0.5118408,0.0001221-0.7070923L5.7069702,11H17.5c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5v4.5005493c0.0001831,0.276001,0.223999,0.4996338,0.5,0.4994507h0.0006104C19.7765503,17.4998169,20.0001831,17.276001,20,17v-4.5C19.9987183,11.119812,18.880188,10.0012817,17.5,10z"/></svg>
															</small>
															<div class="me-2 br-5 d-flex"  data-bs-toggle="tooltip" title="" data-bs-original-title="View more">
																<a href="#" class="border br-5 p-2" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
																	<i class="fe fe-more-vertical tx-18 text-black-50"></i>
																</a>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="#">Reply</a>
																	<a class="dropdown-item" href="#">Report Spam</a>
																	<a class="dropdown-item" href="#">Print</a>
																	<a class="dropdown-item" href="#">Block Sender</a>
																	<a class="dropdown-item" href="#">Delete</a>
																</div>
															</div>
														</div>
														<div class="media-title fw-bold mt-3">Sansa Stark <span class="tx-13 fw-semibold">( sansastark@gmail.com )</span></div>
														<p class="mb-0"> to<span class="text-muted"> Emilie Benett ( emiliebenett@gmail.com )</span> </p>
														<small class="me-2 d-md-none">Oct 20 , 2021 16:35pm</small>
														<small class="me-2 d-md-none"><i class="fe fe-star text-muted" data-bs-toggle="tooltip" title="" data-bs-original-title="Rated"></i></small>
														<small class="me-2 d-md-none"><i class="fa fa-reply text-muted" data-bs-toggle="tooltip" title="" data-bs-original-title="Reply"></i></small>
													</div>
												</div>
											</div>
											<div class="eamil-body mt-5">
												<h6 class="fw-bold">Hi Sir/Madam</h6>
												<p>Eirmod eos clita labore vero ea, Et clita ipsum lorem takimata est dolor clita, ut sea sed tempor amet. Duo consetetur invidunt elitr magna dolor dolor. dolor eos stet est sanctus ipsum sea sadipscing gubergren ut. Amet at ut voluptua nonumy, amet ipsum stet elitr.</p>
												<p>Dolor et dolor diam diam vero dolore tempor. Sea lorem sit et sea ut. Ipsum est justo consetetur eirmod kasd.</p>
												<p>Accusam gubergren consetetur sit eos sed tempor est stet kasd. Ipsum gubergren et ea clita accusam rebum, diam sed invidunt et dolor aliquyam sadipscing, sed eos sadipscing at sanctus et. Duo diam amet dolor stet..</p>
												<p class="mb-0">Thanking you Sir/Madam</p>
												<hr>
												<div class="email-attch">
													<div class="float-end">
														<a href="#"><i class="fe fe-download  border br-5 p-2  tx-18" data-bs-toggle="tooltip" title="" data-bs-original-title="Download"></i></a>
													</div>
													<p>3 Attachments.<a href="#" class="text-teritary"> View All Images</a></p>
													<div class="emai-img">
														<div class="d-sm-flex">
															<div class=" m-2">
																<a href="#"><img class="wd-150 br-5 mb-2" src="../assets/images/photos/5.jpg" alt="placeholder image"></a>
																<h6 class="mb-3 mb-lg-0">1.jpg <small class="text-muted">12kb</small></h6>
															</div>
															<div class="m-2">
																<a href="#"><img class="wd-150 br-5 mb-2" src="../assets/images/photos/7.jpg" alt="placeholder image"></a>
																<h6 class="mb-3 mb-lg-0">2.jpg <small class="text-muted">18kb</small></h6>
															</div>
															<div class="m-2">
																<a href="#"><img class="wd-150 br-5 mb-2" src="../assets/images/photos/8.jpg" alt="placeholder image"></a>
																<h6>3.jpg <small class="text-muted">21kb</small></h6>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer">
											<a class="btn btn-primary mt-1 mb-1" href="#"><i class="fa fa-reply"></i> Reply</a>
											<a class="btn btn-info mt-1 mb-1" href="#"><i class="fa fa-share"></i> Forward</a>
										</div>
									</div>
								</div>
							</div>

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

		<!-- INPUT MASK JS-->
		<script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

		<?php include '../layouts/main-scripts.php'; ?>

	</body>
</html>