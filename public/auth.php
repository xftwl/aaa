<?php

require "Services/Twilio/Capability.php";

$accountSid = "AC4321cb32c16fdee55f038b630b763650";
$authToken = "7bc4854b9b93ef90fe525f6426294ce8";

$appSid = "APdf33abf7bd42360d00c2153a9f6b655d";

$clientName = $_REQUEST["clientName"];

$capability = new Services_Twilio_Capability($accountSid, $authToken);

$capability->allowClientIncoming($clientName);

$capability->allowClientOutgoing($appSid, array(), $clientName);

$token = $capability->generateToken();

echo $token;
?>
