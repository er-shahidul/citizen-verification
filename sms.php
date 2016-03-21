<?php
$sms = 'Dear Renter your username: imran, password: 1234 Please update your profile.';
$phoneNumber = '8801912109075';

$url = "http://api.bulksms.icombd.com/api/v3/sendsms";
require_once 'vendor/autoload.php';
use Guzzle\Http\Client;

// Create a client and provide a base URL
$client = new Client($url);
// Create a request with basic Auth
$request = $client->get("plain?user=rightbrain&password=NdmHQ15W&sender=Friend&SMSText=".$sms."&GSM=".$phoneNumber);
$response = $request->send();

echo $response->getBody();