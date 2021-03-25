<?php

include('connect.php');

$url = 'https://'.$siteName.'/rest/'.$userID.'/'.$webHook.'/crm.deal.add.json';

$title = $_POST['title'];
$amount = $_POST['amount'];

 

$queryData = array(
  'fields' => array(
    'TITLE' => $title,
    "CURRENCY_ID" => "RUB",
    "OPPORTUNITY" => $amount,
  ),
  'params' => array("REGISTER_SONET_EVENT" => "Y")
);


$ch = curl_init();

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

$result = json_decode($response);



if (!$response) {
  print_r("Ошибка получения данных путем cURL запроса");
}
else {
  header('Location: index.php');

}