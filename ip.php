<?php
$ip = $_SERVER['REMOTE_ADDR'];
// echo "IP của bạn: " . $ip;
$url = "http://ip-api.com/json/".$ip;
$response = file_get_contents($url);
header('Content-Type: application/json');
echo $response;

?>
