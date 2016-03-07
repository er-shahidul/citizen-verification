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
<?php require_once 'header.php'; ?>
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
								<a class="dashboard-stat dashboard-stat-light blue-soft" href="citizenList.php">
									<div class="visual">
										<i class="fa fa-trophy"></i>
									</div>
									<div class="details">
										<div class="number">
											২৩৩৩৪৪৪
										</div>
										<div class="desc">
											মোট ভাড়াটিয়া
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-light green-soft" href="holdingaddressList.php">
									<div class="visual">
										<i class="fa fa-shopping-cart"></i>
									</div>
									<div class="details">
										<div class="number">
											৩৩৪৪৪
										</div>
										<div class="desc">
											মোট বাড়িওয়ালা
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-share font-blue-steel hide"></i>
								<span class="caption-subject font-blue-steel bold uppercase">সর্বশেষ নিবন্ধিত ভাড়াটিয়া</span>
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
												<a href="citizenview.php" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
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
												<a href="citizenview.php" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
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
												<a href="citizenview.php" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
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
												<a href="citizenview.php" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
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
												<a href="citizenview.php" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
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
												<a href="citizenview.php" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
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
												<a href="citizenview.php" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
											</td>
										</tr>

										</tbody>
									</table>
								</div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 155.979px; background: rgb(187, 187, 187);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
							<div class="scroller-footer">
								<div class="btn-arrow-link pull-right">
									<a href="citizenList.php">আরও</a>
									<i class="icon-arrow-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="portlet light tasks-widget">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-share font-green-haze hide"></i>
								<span class="caption-subject font-green-haze bold uppercase">সর্বশেষ নিবন্ধিত  বাড়িওয়ালা</span>
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
												সাকিব আল হাসান
											</td>
											<td>
												+880-01912-109434
											</td>
											<td>
												4554354533445
											</td>
											<td>
												<a href="holdingaddressView.php" rel="tooltip" title="view-action" class="btn green-haze btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
											</td>
										</tr>
										<tr class="odd gradeX">
											<td>2</td>
											<td>
												সাব্বির রহমান
											</td>
											<td>
												+880-01912-109434
											</td>
											<td>
												4554354533445
											</td>
											<td>
												<a href="holdingaddressView.php" rel="tooltip" title="view-action" class="btn green-haze btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
											</td>
										</tr>
										<tr class="odd gradeX">
											<td>3</td>
											<td>
												সম্য সরকার
											</td>
											<td>
												+880-01912-109435
											</td>
											<td>
												4554354533443
											</td>

											<td>
												<a href="holdingaddressView.php" rel="tooltip" title="view-action" class="btn green-haze btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
											</td>
										</tr>
										<tr class="odd gradeX">
											<td>4</td>
											<td>
												নাসির হোসাইন
											</td>
											<td>
												+880-01912-109434
											</td>
											<td>
												4554354533445
											</td>
											<td>
												<a href="holdingaddressView.php" rel="tooltip" title="view-action" class="btn green-haze btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
											</td>
										</tr>
										<tr class="odd gradeX">
											<td>5</td>
											<td>
												তামিম
											</td>
											<td>
												+880-01912-109434
											</td>
											<td>
												4554354533445
											</td>
											<td>
												<a href="holdingaddressView.php" rel="tooltip" title="view-action" class="btn green-haze btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
											</td>
										</tr>
										<tr class="odd gradeX">
											<td>6</td>
											<td>
												মিথুন
											</td>
											<td>
												+880-01912-109434
											</td>
											<td>
												4554354533445
											</td>
											<td>
												<a href="holdingaddressView.php" rel="tooltip" title="view-action" class="btn green-haze btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
											</td>
										</tr>
										<tr class="odd gradeX">
											<td>7</td>
											<td>
												আবুল হাসান
											</td>
											<td>
												+880-01912-109434
											</td>
											<td>
												4554354533445
											</td>
											<td>
												<a href="holdingaddressView.php" rel="tooltip" title="view-action" class="btn green-haze btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
											</td>
										</tr>
										</tbody>
									</table>
								</div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 155.979px; background: rgb(187, 187, 187);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
							<div class="scroller-footer">
								<div class="btn-arrow-link pull-right">
									<a href="holdingaddressList.php">আরও</a>
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