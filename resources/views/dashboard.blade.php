<!DOCTYPE HTML>
<html>

<head>
	<title>Forland</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Forland Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font-awesome.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
	<script src="js/Chart.min.js"></script>

	<script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
	<script>
		window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')
	</script>

	<script src="js/chartinator.js"></script>
	<script type="text/javascript">
		jQuery(function ($) {

			var chart3 = $('#geoChart').chartinator({
				tableSel: '.geoChart',

				columns: [{
					role: 'tooltip',
					type: 'string'
				}],

				colIndexes: [2],

				rows: [
					['China - 2015'],
					['Colombia - 2015'],
					['France - 2015'],
					['Italy - 2015'],
					['Japan - 2015'],
					['Kazakhstan - 2015'],
					['Mexico - 2015'],
					['Poland - 2015'],
					['Russia - 2015'],
					['Spain - 2015'],
					['Tanzania - 2015'],
					['Turkey - 2015']
				],

				ignoreCol: [2],

				chartType: 'GeoChart',

				chartAspectRatio: 1.5,

				chartZoom: 1.75,

				chartOffset: [-12, 0],

				chartOptions: {

					width: null,

					backgroundColor: '#fff',

					datalessRegionColor: '#F5F5F5',

					region: 'world',

					resolution: 'countries',

					legend: 'none',

					colorAxis: {

						colors: ['#679CCA', '#337AB7']
					},
					tooltip: {

						trigger: 'focus',

						isHtml: true
					}
				}


			});
		});
	</script>

	<script src="js/skycons.js"></script>
	<style>
		.leftBtns .btn {
			color: #333333;
			background: none !important;
			font-size: 15px;
			border: 1px solid #e61d2f;
			margin: 10px 5px;
			font-weight: bold;
			/* -webkit-box-shadow: 9px 10px 13px -9px #e61d2f;
-moz-box-shadow: 9px 10px 13px -9px #e61d2f;
box-shadow: 9px 10px 13px -9px #e61d2f; */
			-webkit-box-shadow: 10px 10px 5px -10px gray;
			-moz-box-shadow: 10px 10px 5px -10px gray;
			box-shadow: 10px 10px 5px -10px gray;
		}

		/* .nav-pills .nav-link.active,
		.nav-pills .show>.nav-link {
			color: #ffffff;
			background: #e61d2f !important;
			border: 1px solid #e61d2f;
		} */

		.leftBtns .btn:hover {
			color: #ffffff;
			background: #e61d2f !important;
			border: 1px solid #e61d2f;
			transition: .1s;
		}

		.leftBtns .btn-myPrimary-add {
			background-color: #e61d2f;

			width: 110px;
		}

		.leftBtns .btn-myPrimary {
			background-color: #e61d2f;

			/* width: 97px; */
			width: 110px;


		}

		.leftBtns .btn-mysecondary {
			background-color: #0a549d;
			/* width: 97px; */
			width: 110px;



		}

		.leftBtns .btn {
			margin: 5px 0px;
		}

		.labels {
			margin-left: 12px;
			font-weight: bold;
			font-size: 20px;
			color: #0a549d;
		}

		body {
			margin: 0;
			padding: 0;
		}


		.btn-my {
			border: 1px solid #3498db;
			background: none;
			padding: 10px 20px;
			font-size: 20px;
			font-family: "montserrat";
			cursor: pointer;
			margin: 10px;
			transition: 0.8s;
			position: relative;
			overflow: hidden;
		}

		.btn1 {
			color: #3498db;
		}

		.btn1:hover {
			color: #333;
		}

		.btn-my::before {
			content: "";
			position: absolute;
			left: 0;
			width: 100%;
			height: 0%;
			background: #3498db;
			z-index: -1;
			transition: 0.8s;
		}

		.btn1::before {
			top: 0;
			border-radius: 0 0 50% 50%;
		}

		.btn1:hover::before {
			height: 180%;
		}
	</style>
</head>

<body>
	<div class="page-container">
		<div class="left-content">
			<div class="mother-grid-inner">
				<div class="header-main">
					<div class="header-left">
						<div class="logo-name">
							<a href="index.html">
								<img src="https://automark.pk/jw-forland/assets/images/logo-footer.png"
									class="img-fluid" alt="">
							</a>
						</div>

						<div class="clearfix"> </div>
					</div>
					<div class="header-right">
						<div class="profile_details_left">
							<!-- <ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p4.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images/p2.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p3.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images/p5.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/p6.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/p7.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 8 pending task</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
								</ul> -->

							<button class="btn-my btn1" data-toggle="modal"
								data-target=".bd-example-modal-lg">Operations</button>

							<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
								aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Forland Operations</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<!-- <div class="modal-body">
											<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link active" id="pills-Sales-tab" data-toggle="pill"
														href="#pills-Sales" role="tab" aria-controls="pills-Sales"
														aria-selected="true">Sales</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="pills-Purchase-tab" data-toggle="pill"
														href="#pills-Purchase" role="tab" aria-controls="pills-Purchase"
														aria-selected="false">Purchase</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="pills-Inventory-tab" data-toggle="pill"
														href="#pills-Inventory" role="tab"
														aria-controls="pills-Inventory" aria-selected="false">Inventory
														Management</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="pills-Customer-tab" data-toggle="pill"
														href="#pills-Customer" role="tab" aria-controls="pills-Customer"
														aria-selected="false">Customer
														Management</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="pills-Transaction-tab" data-toggle="pill"
														href="#pills-Transaction" role="tab"
														aria-controls="pills-Transaction"
														aria-selected="false">Transaction Flow
													</a>
												</li>
												<li class="nav-item" style="    margin-left: 67px;" role="presentation">
													<a class="nav-link" id="pills-Secuirty-tab" data-toggle="pill"
														href="#pills-Secuirty" role="tab" aria-controls="pills-Secuirty"
														aria-selected="false">Secuirty
													</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="pills-Expense -tab" data-toggle="pill"
														href="#pills-Expense " role="tab" aria-controls="pills-Expense "
														aria-selected="false">Expense
													</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="pills-Attendance -tab" data-toggle="pill"
														href="#pills-Attendance " role="tab"
														aria-controls="pills-Attendance "
														aria-selected="false">Attendance
													</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="pills-Investors-tab" data-toggle="pill"
														href="#pills-Investors" role="tab"
														aria-controls="pills-Investors" aria-selected="false">Investors
													</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="pills-Printing-tab" data-toggle="pill"
														href="#pills-Printing" role="tab" aria-controls="pills-Printing"
														aria-selected="false">Printing
													</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="pills-taskList-tab" data-toggle="pill"
														href="#pills-taskList" role="tab" aria-controls="pills-taskList"
														aria-selected="false">taskList
													</a>
												</li>
											</ul>
											<div class="tab-content" id="pills-tabContent">
												<div class="tab-pane fade show active" id="pills-Sales" role="tabpanel"
													aria-labelledby="pills-Sales-tab">
													<div class="container">
														<div class="row">
															<div class="col-md-8 offset-md-2">
																<div class="row">
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">View
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>


												</div>
												<div class="tab-pane fade" id="pills-Purchase" role="tabpanel"
													aria-labelledby="pills-Purchase-tab">
													<div class="container">
														<div class="row">
															<div class="col-md-8 offset-md-2">
																<div class="row">
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">View
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="pills-Inventory" role="tabpanel"
													aria-labelledby="pills-Inventory-tab">
													<div class="container">
														<div class="row">
															<div class="col-md-8 offset-md-2">
																<div class="row">
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">View
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade show " id="pills-Customer" role="tabpanel"
													aria-labelledby="pills-Customer-tab">
													<div class="container">
														<div class="row">
															<div class="col-md-8 offset-md-2">
																<div class="row">
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">View
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade show " id="pills-Transaction" role="tabpanel"
													aria-labelledby="pills-Transaction-tab">
													<div class="container">
														<div class="row">
															<div class="col-md-8 offset-md-2">
																<div class="row">
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">View
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="pills-Secuirty" role="tabpanel"
													aria-labelledby="pills-Secuirty-tab">
													<div class="container">
														<div class="row">
															<div class="col-md-8 offset-md-2">
																<div class="row">
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">View
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="pills-Expense" role="tabpanel"
													aria-labelledby="pills-Expense-tab">
													<div class="container">
														<div class="row">
															<div class="col-md-8 offset-md-2">
																<div class="row">
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">View
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade show " id="pills-Attendance" role="tabpanel"
													aria-labelledby="pills-Attendance-tab">
													<div class="container">
														<div class="row">
															<div class="col-md-8 offset-md-2">
																<div class="row">
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">View
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="pills-Investors" role="tabpanel"
													aria-labelledby="pills-Investors-tab">
													<div class="container">
														<div class="row">
															<div class="col-md-8 offset-md-2">
																<div class="row">
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">View
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="pills-Printing" role="tabpanel"
													aria-labelledby="pills-Printing-tab">
													<div class="container">
														<div class="row">
															<div class="col-md-8 offset-md-2">
																<div class="row">
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">View
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade show " id="pills-taskList" role="tabpanel"
													aria-labelledby="pills-taskList-tab">
													<div class="container">
														<div class="row">
															<div class="col-md-8 offset-md-2">
																<div class="row">
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">View
																				Stock</button><br>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="leftBtns">
																			<button
																				class="btn btn-myPrimary-add">Add</button><br>
																			<button
																				class="btn btn-mysecondary">Delete</button><br>
																			<button class="btn btn-myPrimary">Edit
																				Stock</button><br>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div>


										</div> -->

										<div class="modal-body">
											<div class="container-fluid">
												<div class="row p-2"
													style="border: 2px solid gray; border-radius: 10px;">



													<div class="col-md-3">
														<label class="labels" for="">Purchase</label>
														<div style="border-right: 2px solid gray;" class="leftBtns">
															<button class="btn btn-myPrimary-add"  onclick="location.href = 'bookOrder.html'">Book Order</button><br>
															<button class="btn btn-mysecondary"  onclick="location.href = 'Receiving.html'">Dilivery</button><br>
															
														</div>
													</div>
													<div class="col-md-3">
														<label style="margin-left: 30px;" class="labels"
															for="">Sales</label>
														<div style="border-right: 2px solid gray;" class="leftBtns">
															<button class="btn btn-myPrimary-add">Add</button><br>
															<button class="btn btn-mysecondary">Delete</button><br>
															<button class="btn btn-myPrimary">View Stock</button><br>
															<button class="btn btn-myPrimary-add">Add</button><br>
															<button class="btn btn-mysecondary">Delete</button><br>
															<button class="btn btn-myPrimary">View Stock</button><br>
														</div>
													</div>
													<div class="col-md-3">
														<label style="margin-left: 30px;" class="labels"
															for="">Stock</label>
														<div style="border-right: 2px solid gray;" class="leftBtns">
															<button class="btn btn-myPrimary-add">Add</button><br>
															<button class="btn btn-mysecondary">Delete</button><br>
															<button class="btn btn-myPrimary">View Stock</button><br>
															<button class="btn btn-myPrimary-add">Add</button><br>
															<button class="btn btn-mysecondary">Delete</button><br>
															<button class="btn btn-myPrimary">View Stock</button><br>
														</div>
													</div>
													<div class="col-md-3">
														<label style="margin-left: 22px;" class="labels"
															for="">Ledger</label>
														<div class="leftBtns">
															<button class="btn btn-myPrimary-add">Add</button><br>
															<button class="btn btn-mysecondary">Delete</button><br>
															<button class="btn btn-myPrimary">View Stock</button><br>
															<button class="btn btn-myPrimary-add">Add</button><br>
															<button class="btn btn-mysecondary">Delete</button><br>
															<button class="btn btn-myPrimary">View Stock</button><br>
														</div>
													</div>




												</div>

											</div>

										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary"
												data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>

							<div class="clearfix"> </div>
						</div>
						<div class="profile_details">
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">
											<span class="prfil-img"><img style="height: 50px; border-radius: 50%; "
													src="https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixlib=rb-1.2.1&w=1000&q=80"
													alt=""> </span>
											<div class="user-name">
												<p style="color: #e61d2f;">Waqas Ali </p>
												<span>Administrator</span>
											</div>
											<i class="fa fa-angle-down lnr"></i>
											<i class="fa fa-angle-up lnr"></i>
											<div class="clearfix"></div>
										</div>
									</a>
									<!-- <ul class="dropdown-menu drp-mnu">
										<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
										<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
										<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
									</ul> -->
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>

				<script>
					$(document).ready(function () {
						var navoffeset = $(".header-main").offset().top;
						$(window).scroll(function () {
							var scrollpos = $(window).scrollTop();
							if (scrollpos >= navoffeset) {
								$(".header-main").addClass("fixed");
							} else {
								$(".header-main").removeClass("fixed");
							}
						});

					});
				</script>
				<div class="inner-block">
					<div class="market-updates">
						<div class="row">


							<div class="col-md-4 market-update-gd">
								<div class="market-update-block clr-block-1">
									<div class="col-md-8 market-update-left">
										<h3>83</h3>
										<h4>Sales Today</h4>
										<p>80% cash sales</p>
									</div>
									<div class="col-md-4 market-update-right">
										<i class="fa fa-file-text-o"> </i>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="col-md-4 market-update-gd">
								<div class="market-update-block clr-block-2">
									<div class="col-md-8 market-update-left">
										<h3>135</h3>
										<h4>Leads</h4>
										<p>Team visited 230 people</p>
									</div>
									<div class="col-md-4 market-update-right">
										<i class="fa fa-eye"> </i>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="col-md-4 market-update-gd">
								<div class="market-update-block clr-block-3">
									<div class="col-md-8 market-update-left">
										<h3>23</h3>
										<h4>New Messages</h4>
										<p>get reply from whatsapp messages</p>
									</div>
									<div class="col-md-4 market-update-right">
										<i class="fa fa-envelope-o"> </i>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="chit-chat-layer1">
						<div class="row">

							<div class="col-md-6 chit-chat-layer1-left">
								<div class="work-progres">
									<div class="chit-chat-heading">
										Recent Orders
									</div>
									<div class="table-responsive">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>Client</th>
													<th>Manager</th>

													<th>Status</th>
													<th>Progress</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>PELL </td>
													<td>Mushtaq</td>

													<td><span class="label label-warning">in progress</span></td>
													<td><span class="badge badge-info">50%</span></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Qarshi</td>
													<td>Sultan</td>

													<td><span class="label label-success">completed</span></td>
													<td><span class="badge badge-success">100%</span></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Gormets</td>
													<td>John</td>

													<td><span class="label label-danger">Delayed</span></td>
													<td><span class="badge badge-warning">75%</span></td>
												</tr>
												<tr>
													<td>4</td>
													<td>Khadi</td>
													<td>Danial</td>

													<td><span class="label label-info">in progress</span></td>
													<td><span class="badge badge-info">65%</span></td>
												</tr>
												<tr>
													<td>5</td>
													<td>J.</td>
													<td>Amjad</td>

													<td><span class="label label-warning">in progress</span></td>
													<td><span class="badge badge-danger">95%</span></td>
												</tr>
												<tr>
													<td>6</td>
													<td>UCP</td>
													<td>Ali</td>

													<td><span class="label label-info">in progress</span></td>
													<td><span class="badge badge-success">95%</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="col-md-6 chart-blo-1">
								<div class="dygno" style="height: 431px !important;">
									<h2>Ring Chart</h2>

									<canvas id="doughnut" height="300" width="470"
										style="width: 470px; height: 300px;"></canvas>
									<script>
										var doughnutData = [{
												value: 30,
												color: "#e61d2f"
											},
											{
												value: 50,
												color: "#0a549d"
											},
											{
												value: 100,
												color: "#e61d2f"
											},
											{
												value: 40,
												color: "#0a549d"
											},
										];
										new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
									</script>
								</div>
							</div>

						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="main-page-charts">
						<div class="main-page-chart-layer1">
							<div class="row">


								<div class="col-md-6 chart-layer1-left">
									<div class="glocy-chart">
										<div class="span-2c">
											<h3 class="tlt">Sales Analytics</h3>
											<canvas id="bar" height="300" width="400"
												style="width: 400px; height: 300px;"></canvas>
											<script>
												var barChartData = {
													labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "jul"],
													datasets: [{
															fillColor: "#e61d2f",
															data: [65, 59, 90, 81, 56, 55, 40]
														},
														{
															fillColor: "#337AB7",
															data: [28, 48, 40, 19, 96, 27, 100]
														}
													]

												};
												new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
											</script>
										</div>
									</div>
								</div>
								<div class="col-md-6 chart-blo-1">
									<div class="line-chart">
										<h3>Line Chart</h3>
										<canvas id="line" height="300" width="400" style="width: 400px; height: 300px;">
										</canvas>
										<script>
											var lineChartData = {
												labels: ["", "", "", "", "", "", ""],
												datasets: [{
														fillColor: "#337AB7",
														strokeColor: "#e61d2f",
														pointColor: "#e61d2f",
														pointStrokeColor: "#fff",
														data: [65, 59, 90, 81, 56, 55, 40]
													},
													{
														fillColor: "#e61d2f",
														strokeColor: "#337AB7",
														pointColor: "#337AB7",
														pointStrokeColor: "#fff",
														data: [28, 48, 40, 19, 96, 27, 100]
													}
												]

											};
											new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
										</script>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="chart-layer-2">
						<div class="row">


							<div class="col-md-6 chart-layer2-right">
								<div class="prograc-blocks">
									<div class="home-progres-main">
										<h3>Total Sales</h3>
									</div>
									<div class='bar_group'>
										<div class='bar_group__bar thin' label='Rating' show_values='true'
											tooltip='true' value='343'></div>
										<div class='bar_group__bar myBlueColor thin' style="background: #0a549d;"
											label='Quality' show_values='true' tooltip='true' value='235'></div>
										<div class='bar_group__bar thin' label='Amount' show_values='true'
											tooltip='true' value='550'></div>
										<div class='bar_group__bar thin' style="background: #0a549d;" label='Farming'
											show_values='true' tooltip='true' value='456'></div>
									</div>
									<script src="js/bars.js"></script>

								</div>
							</div>
							<div class="col-md-6 chart-layer2-left">
								<div class="content-main revenue">
									<h3>Total Revenue</h3>
									<canvas id="radar" height="300" width="300"
										style="width: 300px; height: 300px;"></canvas>
									<script>
										var radarChartData = {
											labels: ["", "", "", "", "", "", ""],
											datasets: [{
													fillColor: "#e61d2f",
													strokeColor: "#0a549d",
													pointColor: "#0a549d",
													pointStrokeColor: "#fff",
													data: [65, 59, 90, 81, 56, 55, 40]
												},
												{
													fillColor: "#0a549d",
													strokeColor: "#e61d2f",
													pointColor: "#e61d2f",
													pointStrokeColor: "#fff",
													data: [28, 48, 40, 19, 96, 27, 100]
												}
											]

										};
										new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
									</script>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>


				</div>

			</div>
		</div>


		<div class="clearfix"> </div>
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function () {
			if (toggle) {
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({
					"position": "absolute"
				});
			} else {
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function () {
					$("#menu span").css({
						"position": "relative"
					});
				}, 400);
			}
			toggle = !toggle;
		});
	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
		integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
	</script>
	<script src="js/scripts.js"></script>
	<script src="js/bars.js"></script>

</body>

</html>