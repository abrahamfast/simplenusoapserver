<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../functions.php";
$sconfig = require __DIR__ . "/../config/params.php";
$aconfig = require __DIR__ . "/../config/app.php";

$server = new nusoap_server();
$server->configureWSDL("IMINotification", "urn:IMINotification");

// add your method
$server->register('notification', $sconfig['notification']['input'], $sconfig['notification']['output']);
$server->register('demo', $sconfig['demo']['input'], $sconfig['demo']['output']);


// set raw post
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';

// $server->service($HTTP_RAW_POST_DATA);
$server->service(file_get_contents("php://input"));




