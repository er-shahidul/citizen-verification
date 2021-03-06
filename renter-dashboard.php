<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 3.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8">
<title>Renter Verification</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css">
<link href="assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container">
			<!-- BEGIN LOGO -->
			<div  class="page-logo">
				<a style="font-size: 20px; line-height: 63px;" href="renter-dashboard.php">ভাড়াটিয়া ভেরিফিকেসন  </a>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<img alt="" class="img-circle" src="assets/admin/layout3/img/avatar9.jpg">
							<span class="username username-hide-mobile">অ্যাডমিন </span>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="userview.php">
									<i class="icon-user"></i> আমার প্রোফাইল </a>
							</li>
							<li>
								<a href="login.html">
									<i class="icon-key"></i> লগ আউট </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="renter-dashboard.php">ড্যাশবোর্ড  </a>
					</li>
					<li class="menu-dropdown classic-menu-dropdown active">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
							ভাড়াটিয়া <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">

							<li class="">
								<a href="#">ভাড়াটিয়া তালিকা </a>
							</li>
						</ul>
					</li>
					<li class="menu-dropdown classic-menu-dropdown active">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
							অভিযুক্ত<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">

							<li class="">
								<a href="#">অভিযুক্তদের তালিকা </a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>

<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet light">
						 <h1>ভাড়াটিয়া ভেরিফিকেসন   এ স্বাগতম </h1></br></br>
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-light blue-soft" href="#">
									<div class="visual">
										<i class="fa fa-trophy"></i>
									</div>
									<div class="details">
										<div class="number">
											২৩
										</div>
										<div class="desc">
											মোট ভাড়াটিয়া
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-share font-blue-steel hide"></i>
								<span class="caption-subject font-blue-steel bold uppercase">আমার নিবন্ধিত ভাড়াটিয়া</span>
							</div>
							<div style="clear:both;"></div>
							<div class="btn-group">
								<a href="#">
									<button id="sample_editable_1_new" class="btn green">
										নুতন যোগ করুন  <i class="fa fa-plus"></i>
									</button>
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="scroller" style="height: 300px; overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible="0" data-initialized="1">
									<table class="table table-striped table-bordered table-hover" id="sample_1ddd">
										<thead>
										<tr>
											<th>সিরিয়াল#</th>
											<th>
												নাম
											</th>
											<th>
												মোবাইল নাম্বার
											</th>
											<th>
												জাতীয় পরিচয় পত্র
											</th>
											<th>

											</th>
										</tr>
										</thead>
										<tbody>
										<tr class="odd gradeX">
											<td>1</td>
											<td>
												আল-আমিন হোসাইন
											</td>
											<td>
												+880-01912-109434
											</td>
											<td>
												4554354533445
											</td>
											<td>
												<a href="#" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
												<a href="#" class="btn purple-plum btn-xs" >সম্পাদনা </a>
												<a href="report.php" rel="tooltip" title="report" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অভিজুক্ত করুন </a>
												<a href="status.php" rel="tooltip" title="status" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অকার্যকর করুন  </a>
											</td>
										</tr>
										<tr class="odd gradeX">
											<td>2</td>
											<td>
												তাসকিন আহমেদ
											</td>
											<td>
												+880-01912-109434
											</td>
											<td>
												4554354533445
											</td>
											<td>
												<a href="#" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
												<a href="#" class="btn purple-plum btn-xs" >সম্পাদনা </a>
												<a href="report.php" rel="tooltip" title="report" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অভিজুক্ত করুন </a>
												<a href="status.php" rel="tooltip" title="status" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অকার্যকর করুন  </a>
											</td>
										</tr>
										<tr class="odd gradeX">
											<td>3</td>
											<td>
												মুস্তাফিজুর রহমান
											</td>
											<td>
												+880-01912-109435
											</td>
											<td>
												4554354533443
											</td>

											<td>
												<a href="#" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
												<a href="#" class="btn purple-plum btn-xs" >সম্পাদনা </a>
												<a href="report.php" rel="tooltip" title="report" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অভিজুক্ত করুন </a>
												<a href="status.php" rel="tooltip" title="status" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অকার্যকর করুন  </a>
											</td>
										</tr>
										<tr class="odd gradeX">
											<td>4</td>
											<td>
												মাসরাফাফি
											</td>
											<td>
												+880-01912-109434
											</td>
											<td>
												4554354533445
											</td>
											<td>
												<a href="#" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
												<a href="#" class="btn purple-plum btn-xs" >সম্পাদনা </a>
												<a href="report.php" rel="tooltip" title="report" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অভিজুক্ত করুন </a>
												<a href="status.php" rel="tooltip" title="status" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অকার্যকর করুন  </a>
											</td>
										</tr>
										<tr class="odd gradeX">
											<td>5</td>
											<td>
												হাবিবুল বাসার সুমন
											</td>
											<td>
												+880-01912-109434
											</td>
											<td>
												4554354533445
											</td>
											<td>
												<a href="#" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
												<a href="#" class="btn purple-plum btn-xs" >সম্পাদনা </a>
												<a href="report.php" rel="tooltip" title="report" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অভিজুক্ত করুন </a>
												<a href="status.php" rel="tooltip" title="status" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অকার্যকর করুন  </a>
											</td>
										</tr>
										<tr class="odd gradeX">
											<td>6</td>
											<td>
												আকরাম খান
											</td>
											<td>
												+880-01912-109434
											</td>
											<td>
												4554354533445
											</td>
											<td>
												<a href="#" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
												<a href="#" class="btn purple-plum btn-xs" >সম্পাদনা </a>
												<a href="report.php" rel="tooltip" title="report" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অভিজুক্ত করুন </a>
												<a href="status.php" rel="tooltip" title="status" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অকার্যকর করুন  </a>
											</td>
										</tr>

										<tr class="odd gradeX">
											<td>7</td>
											<td>
												অপি
											</td>
											<td>
												+880-01912-109434
											</td>
											<td>
												4554354533445
											</td>
											<td>
												<a href="#" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
												<a href="#" class="btn purple-plum btn-xs" >সম্পাদনা </a>
												<a href="report.php" rel="tooltip" title="report" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অভিজুক্ত করুন </a>
												<a href="status.php" rel="tooltip" title="status" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i>অকার্যকর করুন  </a>
											</td>
										</tr>

										</tbody>
									</table>
								</div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 155.979px; background: rgb(187, 187, 187);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
							<div class="scroller-footer">
								<div class="btn-arrow-link pull-right">
									<a href="#">আরও</a>
									<i class="icon-arrow-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<?php require_once 'footer.php'; ?>
<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo(theme settings page)
   Index.init(); // init index page
   Tasks.initDashboardWidget(); // init tash dashboard widget
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>