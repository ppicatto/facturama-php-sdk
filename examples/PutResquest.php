<?php 

require __DIR__ . '/credentials.php';
require __DIR__ . '/../facturama/Api.php';

$facturma = new Api(USER, PASSWORD);

$clientId = 'TGpJ_Ko32_ZSEPBcZXRnRw2';

/*$params = [
  'id' => $clientId
];*/

$body = [
  "Id" => $clientId,
  "Address" => [
    "Street" => "St One",
    "ExteriorNumber" => "15",
    "InteriorNumber" => "12",
    "Neighborhood" => "Lower Manhattan, ",
    "ZipCode" => "sample string 5",
    "Locality" => "sample string 6",
    "Municipality" => "sample string 7",
    "State" => "sample string 8",
    "Country" => "MX"
  ],
  "Rfc" => "XEXX010101000",
  "Name" => "Test Test 2",
  "Email" => "test@facturma.com"
];

//$result = $facturma->put('Client/' . $clientId, $body, $params);
$result = $facturma->put('Client/' . $clientId, $body);

printf('<pre>%s<pre>', var_export($result, true));
