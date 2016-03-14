<?php
/**
 * Created by PhpStorm.
 * User: imran
 * Date: 3/14/16
 * Time: 12:38 PM
 */

require "vendor/twilio/sdk/Services/Twilio.php";

// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "ACaeb4c346f6311ec9512786c66c2fe40b";
$AuthToken = "470237ba933dec8e1c3be0f4223f1392";

$client = new Services_Twilio($AccountSid, $AuthToken);

try {
    $message = $client->account->messages->create(array(
        "From" => "+15005550006",
        "To" => "+8801912109075",
        "Body" => "Test message!",
    ));
} catch (Services_Twilio_RestException $e) {
    echo $e->getMessage();
}