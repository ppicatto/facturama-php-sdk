<?php 

require __DIR__ . '/credentials.php';
require __DIR__ . '/../facturama/Api.php';

$facturma = new Api(USER, PASSWORD);

$params = [
  "Address" => [
    "Street" => "St One ",
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
  "Name" => "Test Test",
  "Email" => "test@facturma.com"
];
$result = $facturma->post('Client', $params);

printf('<pre>%s<pre>', var_export($result, true));
