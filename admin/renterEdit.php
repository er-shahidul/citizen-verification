<?php
require_once "conn.php";

$sqlSelect = "SELECT * from renter WHERE id=".$_GET['id'];
$records = $conn->query($sqlSelect);
$result = $records->fetch_assoc();
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
                        <h2>ভাড়াটিয়া যোগ করুন </h2>
                        <hr>
                        <form  method="post" action="renterList.php?status=saved" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">ভাড়াটিয়া  নাম </label>
                                    <div class="col-md-4">
                                        <input type="text" name="name" class="form-control " value="<?php echo $result['name'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">ভাড়াটিয়া প্রকারভেদ </label>
                                    <div class="col-md-4">
                                        <select class="form-control renterType" name="renterType">
                                            <option value="bd">বাংলাদেশী </option>
                                            <option value="foreigner">বিদেশী </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">জাতীয় পরিচয় পত্র</label>
                                    <div class="col-md-4">
                                        <input id="nationalId" type="text" name="nid" class="form-control " value="<?php echo $result['name'] ?>">
                                    </div>
                                    <span class="verify" style="cursor:pointer">ভেরিফাই </span>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"> পেশা ও প্রতিষ্টান কর্মস্তলের ঠিকানা </label>
                                    <div class="col-md-4">
                                        <textarea type="text" name="workaddress" class="form-control " ><?php echo $result['name'] ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">পাসপোর্ট নাম্বার </label>
                                    <div class="col-md-4">
                                        <input type="text" name="passport" class="form-control " value="<?php echo $result['name'] ?>">
                                    </div>
                                </div>

                                <div class="form-group foreigner">
                                    <label class="col-md-3 control-label">দেশ</label>
                                    <div class="col-md-4">
                                         <select class="form-control" name="contry">
                                                <option value="AF">Afghanistan</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AG">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AG">Antigua &amp; Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AA">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BL">Bonaire</option>
                                                <option value="BA">Bosnia &amp; Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BR">Brazil</option>
                                                <option value="BC">British Indian Ocean Ter</option>
                                                <option value="BN">Brunei</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="IC">Canary Islands</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CD">Channel Islands</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CI">Christmas Island</option>
                                                <option value="CS">Cocos Island</option>
                                                <option value="CO">Colombia</option>
                                                <option value="CC">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CT">Cote D'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CB">Curacao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="TM">East Timor</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FA">Falkland Islands</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="FS">French Southern Ter</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GB">Great Britain</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HW">Hawaii</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IA">Iran</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IR">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="NK">Korea North</option>
                                                <option value="KS">Korea South</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Laos</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macau</option>
                                                <option value="MK">Macedonia</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="ME">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="MI">Midway Islands</option>
                                                <option value="MD">Moldova</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Nambia</option>
                                                <option value="NU">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="AN">Netherland Antilles</option>
                                                <option value="NL">Netherlands (Holland, Europe)</option>
                                                <option value="NV">Nevis</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NW">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau Island</option>
                                                <option value="PS">Palestine</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PO">Pitcairn Island</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="ME">Republic of Montenegro</option>
                                                <option value="RS">Republic of Serbia</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russia</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="NT">St Barthelemy</option>
                                                <option value="EU">St Eustatius</option>
                                                <option value="HE">St Helena</option>
                                                <option value="KN">St Kitts-Nevis</option>
                                                <option value="LC">St Lucia</option>
                                                <option value="MB">St Maarten</option>
                                                <option value="PM">St Pierre &amp; Miquelon</option>
                                                <option value="VC">St Vincent &amp; Grenadines</option>
                                                <option value="SP">Saipan</option>
                                                <option value="SO">Samoa</option>
                                                <option value="AS">Samoa American</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome &amp; Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="OI">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syria</option>
                                                <option value="TA">Tahiti</option>
                                                <option value="TW">Taiwan</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad &amp; Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TU">Turkmenistan</option>
                                                <option value="TC">Turks &amp; Caicos Is</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States of America</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VS">Vatican City State</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="VB">Virgin Islands (Brit)</option>
                                                <option value="VA">Virgin Islands (USA)</option>
                                                <option value="WK">Wake Island</option>
                                                <option value="WF">Wallis &amp; Futana Is</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZR">Zaire</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group foreigner">
                                    <label class="col-md-3 control-label">ভিসার মিয়াদ</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control " name="visaLifeTime" value="<?php echo $result['name'] ?>">
                                    </div>
                                </div>

                                <div class="form-group foreigner">
                                    <label class="col-md-3 control-label">দেশে প্রবেশের বিবরণ </label>
                                    <div class="col-md-4">
                                        <textarea type="text" class="form-control " name="reasonOfEnter" ><?php echo $result['name'] ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group foreigner">
                                    <label class="col-md-3 control-label">চাকুরী দাতার নাম ও ঠিকানা </label>
                                    <div class="col-md-4">
                                        <textarea type="text" class="form-control " name="employerNameAddress" ><?php echo $result['name'] ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">পিতার নাম </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control " name="fatherName" value="<?php echo $result['name'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" >জন্ম তারিখ</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control " name="dob" value="<?php echo $result['name'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">বৈবাহিক অবস্থা</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control " name="maritalStatus" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">স্থায়ী ঠিকানা </label>
                                    <div class="col-md-4">
                                        <textarea type="text" class="form-control " name="pAddress" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">ধর্ম</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="religion">
                                            <option>ইসলাম  </option>
                                            <option>হিন্দু </option>
                                            <option>ক্রিস্টান</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">শিক্ষাগত যোগ্যতা</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control " name="education" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">মোবাইল নাম্বার</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="mobileNo" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">ইমেইল আইডি</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="email" >
                                    </div>
                                </div>

                                    <div class="form-group localBd">
                                        <label class="col-md-3 control-label">বিভাগ</label>
                                        <div class="col-md-4">
                                            <select class="form-control" name="division">
                                                <option>দযা করে সিলেক্ট করুন </option>
                                                <option>ঢাকা  </option>
                                                <option>খুলনা </option>
                                                <option>চট্টগ্রাম</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group localBd">
                                        <label class="col-md-3 control-label">জেলা</label>
                                        <div class="col-md-4">
                                            <select class="form-control" name="district">
                                                <option>দযা করে সিলেক্ট করুন </option>
                                                <option>সাভার  </option>
                                                <option> ঢাকা</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group localBd">
                                        <label class="col-md-3 control-label">থানা</label>
                                        <div class="col-md-4">
                                            <select class="form-control" name="thana">
                                                <option>দযা করে সিলেক্ট করুন </option>
                                                <option>সাভার  সদর </option>
                                                <option>ঢাকা</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group localBd">
                                    <label class="col-md-3 control-label">ওয়ার্ড  </label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="word">
                                            <option>দযা করে সিলেক্ট করুন </option>
                                            <option>ওয়ার্ড নম্বর ১</option>
                                            <option>ওয়ার্ড নম্বর ২</option>
                                        </select>
                                    </div>
                                </div>

                            <div class="form-group last">
                                <label class="control-label col-md-3">ছবি </label>
                                <div class="col-md-9">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                        </div>
                                        <div>
														<span class="btn default btn-file">
														<span class="fileinput-new">
														ছবি নির্বাচন করুন </span>
														<span class="fileinput-exists">
														পরিবর্তন </span>
														<input type="file" name="...">
														</span>
                                            <a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
                                                মুছে ফেল   </a>
                                        </div>
                                    </div>
                                    <div class="clearfix margin-top-10">

                                    </div>
                                </div>
                            </div>
                            <fieldset style="margin-bottom: 20px;">
                                <legend style="border: none;">জরুরি যোগাযোগ</legend>
                                <div style="border:1px solid #e5e5e5; padding-top: 20px;">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">নাম</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control " name = "emergencyName" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">ঠিকানা</label>
                                            <div class="col-md-4">
                                                <textarea type="text" class="form-control " name="emergencyAddress" ></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">সম্পর্ক</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control " name="emergencyRelation" >
                                            </div>
                                        </div>

                                </div>
                            </fieldset>

                            <fieldset style="margin-bottom: 20px;">
                                <legend style="border: none;">গৃহ কর্মী</legend>
                                <div style="border:1px solid #e5e5e5; padding-top: 20px;">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">নাম</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control " name="servantName" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">জাতীয় পরিচয় পত্র</label>
                                            <div class="col-md-4">
                                                <input id="nationalId" type="text" class="form-control " name="servantNid">
                                            </div>
                                            <span class="verify" style="cursor:pointer">ভেরিফাই </span>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">মোবাইল নাম্বার</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control " name="servantMobile">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">স্থায়ী ঠিকানা </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control " name="Servantpaddress" >
                                            </div>
                                        </div>
                                </div>
                            </fieldset>


                            <fieldset style="margin-bottom: 20px;">
                                <legend style="border: none;">ড্রাইভার</legend>
                                <div style="border:1px solid #e5e5e5; padding-top: 20px;">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">নাম</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="driverName" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">জাতীয় পরিচয় পত্র</label>
                                            <div class="col-md-4">
                                                <input id="nationalId" type="text" class="form-control " name="driverNid" >
                                            </div>
                                            <span class="verify" style="cursor:pointer">ভেরিফাই </span>
                                        </div>
                                    </div>

                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">মোবাইল নাম্বার</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control " name="driverMobile" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">স্থায়ী ঠিকানা </label>
                                            <div class="col-md-4">
                                                <textarea type="text" class="form-control " name="driverPaddress" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset style="margin-bottom: 20px;">
                                <legend style="border: none;">পূরবর্তী বাড়িওয়ালা</legend>
                                <div style="border:1px solid #e5e5e5; padding-top: 20px;">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">নাম</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control " name="previousHouseHolder">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">মোবাইল নাম্বার</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control " name="previousHouseHolderMobileNo">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">স্থায়ী ঠিকানা </label>
                                            <div class="col-md-4">
                                                <textarea type="text" class="form-control" name="PreviouspAddress"></textarea>
                                            </div>
                                        </div>
                                </div>
                            </fieldset>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">পূরবর্তী বাসা সাড়ার কারণ</label>
                                    <div class="col-md-4">
                                        <textarea type="text" class="form-control " name="reasonOFpreviousHouseLeft"></textarea>
                                    </div>
                                </div>

                            <fieldset style="margin-bottom: 20px;">
                                <legend style="border: none;">বর্তমান বাড়িওয়ালা</legend>
                                <div style="border:1px solid #e5e5e5; padding-top: 20px;">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">নাম</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="currHouseHolderName" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">মোবাইল নাম্বার</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control " name="currHouseHolderMobileNo">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">স্থায়ী ঠিকানা </label>
                                            <div class="col-md-4">
                                                <textarea type="text" class="form-control " name="currHouseHolderPaddress"></textarea>
                                            </div>
                                        </div>
                                </div>
                            </fieldset>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">বর্তমান বাড়িতে কোন তারিখ থেকে বসবাস </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control " name="startDateOfCurrLiving">
                                    </div>
                                </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-circle blue">সাবমিট</button>
                                        <button type="button" class="btn btn-circle default">বাতিল</button>
                                    </div>
                                </div>
                            </div>
                            <div>
                        </form>

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
<script type="text/javascript" src="assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>

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

        jQuery('.verify').on('click',function(){
               jQuery('#nationalId').toggleClass('spinner');
        })

        jQuery(".renterType").on("change",function(){
            var renterType= jQuery(this).val();
            if(renterType == "bd"){
                //jQuery(".localBd").show();
                jQuery(".foreigner").hide();

            }else{
                //jQuery(".localBd").hide();
                jQuery(".foreigner").show();
            }
        }).change();

    });
</script>
</body>
<!-- END BODY -->
</html>