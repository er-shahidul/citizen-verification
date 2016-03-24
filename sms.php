<?php
$sms = 'Dear Renter your username: imran, password: 1234 Please update your profile.';


$url = "http://api.bulksms.icombd.com/api/v3/sendsms";
require_once 'vendor/autoload.php';
use Guzzle\Http\Client;

if($_GET['mobile_no']){
    // Create a client and provide a base URL
    $client = new Client($url);
// Create a request with basic Auth
    $phoneNumber = $_GET['mobile_no'];
    $request = $client->get("plain?user=rightbrain&password=NdmHQ15W&sender=Friend&SMSText=".$sms."&GSM=".$phoneNumber);
    $response = $request->send();
}


exit;
//echo $response->getBody();

header("Location: holdingaddressList.php");