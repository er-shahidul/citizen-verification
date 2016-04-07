<?php
require_once "conn.php";

$sqlSelect = "SELECT * from houseHold WHERE id=".$_GET['id'];
$records = $conn->query($sqlSelect);
$result = $records->fetch_assoc();
$data = json_decode($result['data']);
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
    <link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>

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
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light">

                        <h2>হোল্ডিং এড্রেস </h2>
                        <hr>
                        <div class="portlet-body">
                            <div  style="position: absolute; top:100px; left: 700px;">
                                <div class="fileinput-new thumbnail">
                                    <img src="http://www.placehold.it/300x250/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <a href="holdingaddressNew.php">
                                        <button id="sample_editable_1_new" class="btn green">
                                            ভাড়াটিয়া যোগ করুন  <i class="fa fa-plus"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name">
                                    নাম:
                                </div>
                                <div class="col-md-7 value">
                                   <?php echo $result['name']?>
                                </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name">
                                    পিতার নাম :
                                </div>
                                <div class="col-md-7 value">
                                    <?php echo $result['fatherName'];?>
                                </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name">
                                    বৈবাহিক অবস্থা:
                                </div>
                                <div class="col-md-7 value">
                                    <?php echo $result['mariatalStatus'];?>
                                </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name">
                                    স্থায়ী ঠিকানা :
                                </div>
                                <div class="col-md-7 value">
                                    <?php echo $result['paddress'];?>
                                </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name">
                                    পেশা ও প্রতিষ্টান কর্মস্তলের ঠিকানা:
                                </div>
                                <div class="col-md-7 value">
                                    <?php echo $result['workaddress'];?>
                                </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name">
                                    ধর্ম:
                                </div>
                                <div class="col-md-7 value">
                                    <?php echo $result['religeon'];?>
                                </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name">
                                    বাড়ির ধরন:
                                </div>
                                <div class="col-md-7 value">
                                    <?php echo $result['houseType'];?>
                                </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name">
                                    মোবাইল নাম্বার:
                                </div>
                                <div class="col-md-7 value">
                                    <?php echo $result['mobileNumber'];?>
                                </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name">
                                    ইমেইল আইডি:
                                </div>
                                <div class="col-md-7 value">
                                    <?php echo $result['Email'];?>
                                </div>
                            </div>

                            <div class="row static-info">
                                <div class="col-md-5 name">
                                    পাসপোর্ট নাম্বার:
                                </div>
                                <div class="col-md-7 value">
                                    <?php echo $result['passportNumber'];?>

                                </div>
                            </div>

                            <fieldset style="margin-bottom: 20px;">
                                <legend>জরুরি যোগাযোগ</legend>
                                <div class="row static-info">
                                    <div class="col-md-5 name">
                                        নাম:
                                    </div>
                                    <div class="col-md-7 value">
                                        <?php echo $result['emergencyName'];?>
                                    </div>
                                </div>
                                <div class="row static-info">
                                    <div class="col-md-5 name">
                                        ঠিকানা:
                                    </div>
                                    <div class="col-md-7 value">
                                        <?php echo $result['emergencyAddress'];?>
                                    </div>
                                </div>
                                <div class="row static-info">
                                    <div class="col-md-5 name">
                                        সম্পর্ক:
                                    </div>
                                    <div class="col-md-7 value">
                                        <?php echo $result['emergencyRelation'];?>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset style="margin-bottom: 20px;">
                                <legend>ড্রাইভার</legend>
                                <div class="row static-info">
                                    <div class="col-md-5 name">
                                        নাম:
                                    </div>
                                    <div class="col-md-7 value">
                                        <?php echo $result['driverName'];?>
                                    </div>
                                </div>
                                <div class="row static-info">
                                    <div class="col-md-5 name">
                                        জাতীয় পরিচয় পত্র:
                                    </div>
                                    <div class="col-md-7 value">
                                        <?php echo $result['driverNid'];?>
                                    </div>
                                </div>
                                <div class="row static-info">
                                    <div class="col-md-5 name">
                                        মোবাইল নাম্বার:
                                    </div>
                                    <div class="col-md-7 value">
                                        <?php echo $result['diriverMobileNo'];?>
                                    </div>
                                </div>
                                <div class="row static-info">
                                    <div class="col-md-5 name">
                                        স্থায়ী ঠিকানা:
                                    </div>
                                    <div class="col-md-7 value">
                                        <?php echo $result['driverParmanentAddress'];?>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset style="margin-bottom: 20px;">
                                <legend>নিরাপত্তা প্রহরী</legend>
                                <div class="row static-info">
                                    <div class="col-md-5 name">
                                        নাম:
                                    </div>
                                    <div class="col-md-7 value">
                                        <?php echo $result['guardName'];?>
                                    </div>
                                </div>
                                <div class="row static-info">
                                    <div class="col-md-5 name">
                                        জাতীয় পরিচয় পত্র:
                                    </div>
                                    <div class="col-md-7 value">
                                        <?php echo $result['guardNid'];?>
                                    </div>
                                </div>
                                <div class="row static-info">
                                    <div class="col-md-5 name">
                                        মোবাইল নাম্বার:
                                    </div>
                                    <div class="col-md-7 value">
                                        <?php echo $result['guardMobileNo'];?>
                                    </div>
                                </div>
                                <div class="row static-info">
                                    <div class="col-md-5 name">
                                        স্থায়ী ঠিকানা:
                                    </div>
                                    <div class="col-md-7 value">
                                        <?php echo $result['guardPermanentAddress'];?>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="portlet-title">
                                <div class="tools">
                                    <a href="javascript:;" class="collapse">
                                    </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config">
                                    </a>
                                    <a href="javascript:;" class="reload">
                                    </a>
                                    <a href="javascript:;" class="remove">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="gmap_marker" class="gmaps">
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
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/maps-google.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        MapsGoogle.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
