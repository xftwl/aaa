<?php

// Found in the 'helper-libs' folder, or download twilio-php from http://twilio.com/docs/libraries
require "Services/Twilio/Capability.php";

$accountSid = "AC4321cb32c16fdee55f038b630b763650"; 
$authToken = "7bc4854b9b93ef90fe525f6426294ce8";

// The app outgoing connections will use:
$appSid = "APdf33abf7bd42360d00c2153a9f6b655d"; 

// The client name for incoming connections:
$clientName = "monkey";

$capability = new Services_Twilio_Capability($accountSid, $authToken);

// This would allow incoming connections as $clientName: 
$capability->allowClientIncoming($clientName);

// This allows outgoing connections to $appSid with the "From" parameter being $clientName 
$capability->allowClientOutgoing($appSid, array(), $clientName);

// This would return a token to use with Twilio based on 
// the account and capabilities defined above 
$token = $capability->generateToken();

echo $token;
?>
