<?php

include('connect.php');

$url = 'https://' . $siteName . '/rest/' . $userID . '/' . $webHook . '/crm.deal.delete.json';
    $deal_id = $_POST['deal_id'];

$ch = curl_init();


$queryData = array(
    'id' => $deal_id
);

curl_setopt_array($ch, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_POST => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_POSTFIELDS => http_build_query($queryData)
));

$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response);

header('Location: index.php');
