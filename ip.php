<?php
$url = "https://api.db-ip.com/v2/free/self";
$response = file_get_contents($url);
header('Content-Type: application/json');
echo $response;
?>
