<?php
require_once "conn.php";
if($_POST){
	$strname = $_POST['name'];
	$strfatherName = $_POST['fatherName'];
	$strnid = $_POST['nid'];
	$strbrd = $_POST['brd'];
	$strmariatalStatus = $_POST['mariatalStatus'];
	$strpaddress = $_POST['paddress'];
	$strworkaddress = $_POST['workaddress'];
	$strhouseType = $_POST['houseType'];
	$strrenterNumber = $_POST['renterNumber'];
	$strreligeon = $_POST['religeon'];
	$streduqualification = $_POST['eduqualification'];
	$strmobileNumber = $_POST['mobileNumber'];
	$strEmail = $_POST['Email'];
	$strpassportNumber = $_POST['passportNumber'];
	$strdivision = $_POST['division'];
	$strdistrict = $_POST['district'];
	$strthana = $_POST['thana'];
	$strword = $_POST['word'];
	$stremergencyName = $_POST['emergencyName'];
	$stremergencyAddress = $_POST['emergencyAddress'];
	$stremergencyRelation = $_POST['emergencyRelation'];
	$strservantName = $_POST['servantName'];
	$strservantNid = $_POST['servantNid'];
	$strservantMobileNo = $_POST['servantMobileNo'];
	$strservantParmanentAddress = $_POST['servantParmanentAddress'];
	$strdriverName = $_POST['driverName'];
	$strdriverNid = $_POST['driverNid'];
	$strdiriverMobileNo = $_POST['diriverMobileNo'];
	$strdriverParmanentAddress = $_POST['driverParmanentAddress'];
	$strguardName = $_POST['guardName'];
	$strguardNid = $_POST['guardNid'];
	$strguardMobileNo = $_POST['guardMobileNo'];
	$strguardPermanentAddress = $_POST['guardPermanentAddress'];


	  $data = json_encode($_POST,JSON_UNESCAPED_UNICODE);
	  $sql = "INSERT INTO houseHold (name,fatherName,nid,brd,mariatalStatus,paddress,workaddress,houseType,renterNumber,religeon,eduqualification,mobileNumber,Email,passportNumber,division,district,thana,word,emergencyName,emergencyAddress,emergencyRelation,servantName,servantNid,servantMobileNo,servantParmanentAddress,driverName,driverNid,diriverMobileNo,driverParmanentAddress,guardName,guardNid,guardMobileNo,guardPermanentAddress)
		VALUES
		('$strname','$strfatherName','$strnid','$strbrd','$strmariatalStatus','$strpaddress','$strworkaddress','$strhouseType','$strrenterNumber',
		'$strreligeon','$streduqualification','$strmobileNumber','$strEmail','$strpassportNumber',
		'$strdivision','$strdistrict','$strthana','$strword','$stremergencyName','$stremergencyAddress',
		'$stremergencyRelation','$strservantName','$strservantNid','$strservantMobileNo','$strservantParmanentAddress',
		'$strdriverName','$strdriverNid','$strdiriverMobileNo','$strdriverParmanentAddress','$strguardName',
		'$strguardNid','$strguardMobileNo','$strguardPermanentAddress')";

	if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}


}

$sqlSelect = "SELECT * from houseHold";
$result = $conn->query($sqlSelect);


if($_GET['status'] == 'delete'){
	$sqlDelete = "Delete from houseHold WHERE id=".$_GET['id'];
	$conn->query($sqlDelete);
}

$conn->close();

?>


<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 3.2.0
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
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>Renter Verification</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
	<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="assets/global/plugins/select2/select2.css"/>
	<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
	<!-- END PAGE LEVEL STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
	<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css">
	<link href="assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
	<link href="assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
	<link href="assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico"/>

	<style>
		.checker{
			display: none;
		}
	</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<!-- BEGIN HEADER -->
<?php require_once "header.php";  ?>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<?php if($_GET['status'] == 'saved'):?>
				<div id="prefix_16075061353" class="Metronic-alerts alert alert-success fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>সফল ভাবে সংরক্ষিত হইসে</div>
			<?php endif; ?>

			<?php if($_GET['status'] == 'delete'):?>
				<div id="prefix_16075061353" class="Metronic-alerts alert alert-success fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>সফল ভাবে মুছে ফেলা হইসে</div>
			<?php endif; ?>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">হোল্ডিং তালিকা  </span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<!--<a href="#portlet-config" data-toggle="modal" class="config">
								</a>-->
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<a href="holdingaddressNew.php">
												<button id="sample_editable_1_new" class="btn green">
													নুতন যোগ করুন  <i class="fa fa-plus"></i>
												</button>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div style="margin-bottom: 20px;">
								<div>
									<div class="form-group">
										<label class="col-md-2 control-label">বিভাগ</label>
										<div class="col-md-3">
											<select class="form-control" name="">
												<option>দযা করে সিলেক্ট করুন </option>
												<option>ঢাকা  </option>
												<option>খুলনা </option>
												<option>চট্টগ্রাম</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-2 control-label">জেলা</label>
										<div class="col-md-3">
											<select class="form-control" name="">
												<option>দযা করে সিলেক্ট করুন </option>
												<option>সাভার  </option>
												<option> ঢাকা</option>
											</select>
										</div>
									</div>
								</div>
								<div style="clear: both;"></div>
								<div>
									<div class="form-group">
										<label class="col-md-2 control-label">থানা</label>
										<div class="col-md-3">
											<select class="form-control" name="">
												<option>দযা করে সিলেক্ট করুন </option>
												<option>সাভার  সদর </option>
												<option>ঢাকা</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-2 control-label">ওয়ার্ড  </label>
										<div class="col-md-3">
											<select class="form-control" name="">
												<option>দযা করে সিলেক্ট করুন </option>
												<option>ওয়ার্ড নম্বর ১</option>
												<option>ওয়ার্ড নম্বর ২</option>
											</select>
										</div>
									</div>
								</div>
								<div style="clear: both;"></div>
								<div>
									<div class="form-group">
										<label class="col-md-2 control-label">মোবাইল নাম্বার  </label>
										<div class="col-md-3">
											<input type="text" class="form-control" name="">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-2 control-label">জাতীয় পরিচয় পত্র  </label>
										<div class="col-md-3">
											<input type="text" class="form-control" name="">
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-circle blue">অনুসন্ধান</button>

							</div>
							<table class="table table-striped table-bordered table-hover" id="sample_1ddd">
								<thead>
								<tr>
									<th><input type="checkbox" class="checkAll"> </th>
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
										হাল্নাগাত
									</th>
									<th>

									</th>
								</tr>
								</thead>
								<tbody>
								<?php if ($result->num_rows > 0):
									while($row = $result->fetch_assoc()):
										$arrData = json_decode($row['data']);
								?>

									<tr class="odd gradeX">
										<td><input name="householders"  type="checkbox"> </td>
										<td>
											<?php echo $row['name']; ?>
										</td>
										<td>
											<?php echo $row['mobileNumber']; ?>
										</td>
										<td>
											<?php echo $row['nid']; ?>
										</td>
										<td>
											সম্পন্ন(8/0)
										</td>
										<td>
											<a href="<?php echo 'holdingaddressView.php?id='.$row['id'];?>" rel="tooltip" title="view-action" class="btn purple-plum btn-xs" role="button"><i class="glyphicon glyphicon-view"></i> দেখুন </a>
											<a href="<?php echo 'holdingaddressEdit.php?id='.$row['id'];?>" class="btn purple-plum btn-xs" >সম্পাদনা </a>
											<a onclick="return confirm('are you sure?')" href= "<?php echo 'holdingaddressList.php?status=delete&id='.$row['id']?>" class="btn red-flamingo btn-xs" >মুছে ফেলুন</a>
											<a href="renterList.php?house_hold=<?php echo $row['id']; ?>" class="btn purple-plum btn-xs" >ভাড়াটিয়া তালিকা </a>
											<a href="sms.php?mobile_no=<?php echo $row['mobileNumber'];  ?>" class="btn purple-plum btn-xs" >সেন্ড এস এম এস </a>
										</td>
									</tr>
								<?php endwhile; endif;  ?>
									<tr class="odd gradeX">
										<td colspan="6"><button type="submit">সেন্ড এস এম এস </button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
<?php require_once "footer.php"; ?>

<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
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
<script type="text/javascript" src="assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/table-managed.js"></script>
<script>
	jQuery(document).ready(function() {
		Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Demo.init(); // init demo features
		TableManaged.init();
	});
	jQuery(".checkAll").on('change',(function () {
		var checkBoxes = $("input[name=householders]");
		checkBoxes.attr("checked", !checkBoxes.attr("checked"));
		jQuery.uniform.update();
	}));
</script>
</body>
<!-- END BODY -->
</html>