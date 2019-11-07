<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://wrapapi.com/use/laken/publix/bogos/0.0.9");
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
  "wrapAPIKey" => "K9U1HEqiH7upc4d7kCZHG9A8NIlw3ywc"
]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$data = $response;

$file = "publix_bogos.json";

file_put_contents($file, $data);

print_r($data);
