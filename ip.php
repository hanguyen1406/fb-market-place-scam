<?php
$ip = $_SERVER['REMOTE_ADDR'];
echo "IP của bạn: " . $ip;
$url = "https://api.db-ip.com/v2/free/self/".$ip;
$response = file_get_contents($url);
header('Content-Type: application/json');
echo $response;

?>
